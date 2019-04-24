<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Current_shifts extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

    	//LoggedIn User ID
		$userSession = $this->session->userdata("isAgencyLoggedIn");
		$this->agency_id = $userSession['user_id'];
		$this->load->model(array('Caregiver_model','Client_model'));
	}

	public function index() {
		//print_array(date("Y-m-d h:i A"));
		$data["breadcrumb"] = "Current Shifts";
		$data["heading"] = "Current Shifts";
		//$data["url_segment"] = "current shifts";
		$data['client_current_shifts'] = $this->Client_model->client_current_shifts($this->agency_id);
		$data['client_upcomming_shifts'] = $this->Client_model->client_upcomming_shifts($this->agency_id);
		//print_array($data);
		$this->load->view('agency/currentshifts/index',$data);
	}
	public function delete_shift(){
		$post = $this->input->post();
		$this->common_model->delete("client_appointements", array("id"=>$post["id"]));
	}
	public function swicth_schedule(){
		$post = $this->input->post();
		$data['is_switch'] = $post['is_switch'];
		$appointment = $this->common_model->listingRow("id",$post['id'],"client_appointements");
		$data['result'] = $appointment;
		$data['client'] = $this->common_model->listingRow('id',$appointment->client_id,"client");
		$data['caregivers'] = $this->Caregiver_model->getCaregiverByAgencyId($this->agency_id);
		$data['assignedCargivers'] = $this->common_model->listingResultWhere("client_id",$appointment->client_id,"client_caregiver_relationship");
		// print_array($data['result']);
		$this->load->view('agency/currentshifts/edit_switch_caregiver',$data);
	}
	public function update_client_appointement(){
		$post = $this->input->post();
		// print_array($post);
		if(isset($post['switch_caregiver'])){
			$post['replace_with_id'] = $post['switch_caregiver'];
			$this->switch_appointment($post);
		}
		if(isset($post['assign_caregiver'])){
			$post['replace_with_id'] = $post['assign_caregiver'];
			$this->assign_other_caregiver($post);
		}
		if(isset($post['assign_any_caregiver'])){
			$post['replace_with_id'] = $post['assign_any_caregiver'];
			$this->assign_other_caregiver($post);
		}
	}
	public function assign_other_caregiver($post){
		$message['type'] = "success";
		$message["action"] = "assign";
		$message['text'] = "";
		$result = $this->common_model->listingRow("id",$post['appointment_id'],"client_appointements");
		// print_array($result);
		$from = date("Y-m-d H:i:s ", strtotime($result->from));
		$to = date("Y-m-d H:i:s ", strtotime($result->to));
		$checkAvailability = $this->Client_model->check_availability($post['replace_with_id'], $from, $to);
		// print_array($checkAvailability);
		if($checkAvailability){
			$this->common_model->updateQuery("client_appointements", "id", $post['appointment_id'], array(
				"caregiver_id"		=> $post['replace_with_id'],
				"is_recurring"		=> 0,
				"recurring_months"	=> 0,
				"parent_id"			=> 0,
				"updated_by"		=> $this->agency_id,
				"updated_at"		=> date("Y-m-d H:i:s"),
			));
		}else{
			$message['type'] = "error";
			$message['action'] = "assign_error";
			$message['text'] = "This caregiver is already assigned somewhere else on this datetime.";
		}
		echo json_encode($message);
	}
	public function switch_appointment($post){
		$message['type'] = "success";
		$message["action"] = "switch";
		$message['text'] = "";
		//$this->load->view("agency/currentshifts/switch_caregiver");
		//print_array($post);
		$appointment = $this->common_model->listingRow("id",$post['appointment_id'],"client_appointements");
		// print_array($appointment);
		$switcherAppointments = $this->common_model->listingMultipleWhereResult("client_appointements", array("from"=>$appointment->from, "caregiver_id"=>$post['switch_caregiver']));
		//print_array($switcherAppointments);
		$from = date("Y-m-d H:i:s ", strtotime($appointment->from));
		$to = date("Y-m-d H:i:s ", strtotime($appointment->to));
		$checkAvailability = $this->Client_model->check_availability($post['switch_caregiver'], $from, $to);

		if ($checkAvailability){

			$data['caregiver_current'] = $this->common_model->listingRow('id',$post['caregiver_id'],'caregiver');
			$data['caregiver_switch'] = $this->common_model->listingRow('id',$post['switch_caregiver'],'caregiver');
			$data['client'] = $this->common_model->listingRow("id",$appointment->client_id,"client");

			$data['current_appointment_detail'] = $this->common_model->listingRow('caregiver_id',$post['caregiver_id'],'client_appointements');
			$data['switch_appointment_detail'] = $this->common_model->listingResultWhere('caregiver_id',$post['switch_caregiver'],'client_appointements');
			$message['type'] = "success";
			$message['text'] = json_encode($this->load->view('agency/currentshifts/switch_caregiver',$data, true));
		}
		else{
			$message['type'] = "error";
			$message['action'] = "switch_error";
			$message['text'] = "This caregiver has already been assigned to another schedule at that time slot.Please select alternative times to successfully schedule."; 
		}
		echo json_encode($message);
	}
	public function switch_appointment_shift(){
		$post = $this->input->post();

		$current_appointment = $this->common_model->listingRow('id',$post['from'],'client_appointements');
		$switch_appointment = $this->common_model->listingRow('id',$post['to'],'client_appointements');
		//print_array($switch_appointment);
		$update_current['caregiver_id'] =  $switch_appointment->caregiver_id;
		$update_current['is_recurring'] =  0;

		$update_switch['caregiver_id'] =  $current_appointment->caregiver_id;
		$update_switch['is_recurring'] = 0;

		$this->common_model->updateQuery("client_appointements", "id", $current_appointment->id, $update_current);
		$this->common_model->updateQuery("client_appointements", "id", $switch_appointment->id, $update_switch);
	}

}
?>