<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scheduling extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

    	//LoggedIn User ID
		$userSession = $this->session->userdata("isAgencyLoggedIn");
		$this->agency_id = $userSession['user_id'];
		$this->load->model(array("Client_model", "Caregiver_model", "Schedule_model"));
	}

	public function index(){
		$data["breadcrumb"] = "Scheduling";
		$data["heading"] = "Client Scheduling";
		$data["url_segment"] = "Scheduling";
		$data["scheduledClients"] = $this->Client_model->scheduledClients($this->agency_id);
		$data["notScheduledClients"] = $this->Client_model->notScheduledClients($this->agency_id);
		$this->load->view("agency/scheduling/index",$data);
	}
	
	public function set_redirection(){
		$this->session->set_userdata("redirect", $this->input->post("val"));
	}

	public function view($client_id){
		$data["breadcrumb"] = "Scheduling";
		$data["heading"] = "Scheduling";
		$data["url_segment"] = "scheduling";
		$data['client_id'] = $client_id;
		$data['agency_id'] = $this->agency_id;
		$data['relationshipDetails'] = $this->Client_model->clientRelationshipDetailById($client_id);
		$data['client'] = $this->Client_model->getById($client_id);
		$data['caregivers'] = $this->Caregiver_model->getCaregiverByAgencyId($this->agency_id);
		$data['assignedCargivers'] = $this->common_model->listingResultWhere("client_id",$client_id,"client_caregiver_relationship");
		//$data['events'] = $this->Client_model->load_client_appointement_events($client_id);
		//print_array($data['events']);
		$data['medication_detail'] = $this->common_model->listingResultWhere('client_id',$client_id,"client_medication_list");
		$data['client_bio'] = $this->common_model->listingRow("client_id",$client_id,"client_bio");
		$data['vital_report_details'] = $this->common_model->listingResultWhere('client_id',$client_id,"client_vital_reports");
		$data['shopping_list_detail'] =$this->common_model->listingResultWhere('client_id',$client_id,"client_shopping_list");
		$data['appointment_detail'] = $this->common_model->listingResultWhere('client_id',$client_id,"client_appointment_calender");
		$data['dietry_needs_detail'] =$this->common_model->listingRow("client_id",$client_id,"client_dietry_needs");
		$this->load->view("agency/scheduling/scheduling",$data);
	}
	
	public function load_calendar(){
		$post = $this->input->post();
		$data = $this->Schedule_model->load_calendar($post);
		$data['events'] = $this->Client_model->load_client_appointement_events($post['client_id']);
		$data['client_id'] = $post['client_id'];
		$caregivers = $this->Client_model->gettingAssignedCaregivers($post['client_id']);
		$appointments = $this->Client_model->getAppointmentsForPdfView($post['client_id']);
		$data['data'] = array(
			"caregivers"=>json_encode($caregivers),
			"appointments"=>json_encode($appointments)
		);
		$this->load->view("agency/scheduling/inc/scheduling/load_calendar",$data);
	}
	
	public function load_assign_caregiver(){
		$post = $this->input->post();
		$data = $this->Schedule_model->load_assign_caregiver($post);
		$this->load->view("agency/scheduling/inc/scheduling/load_assign_caregiver", $data);
	}
	
	public function assign_caregiver(){
		$post = $this->input->post();
		$data = $this->Schedule_model->assign_caregiver($post);
		$this->load->view("agency/scheduling/inc/scheduling/view_assigned_caregivers", $data);
	}
	
	public function delete_assigned_caregiver(){
		$post = $this->input->post();
		$this->Schedule_model->delete_assigned_caregiver($post);
	}
	
	public function add_client_appointement(){
		$post = $this->input->post();
		$dates = explode(",", $post["dates"]);
		$message['type'] = 'success';
		$message['error_detail'] = array();
		$addedIds = array();
		foreach($dates as $date){
			unset($post['dates']);
			$client_detail = $this->common_model->listingRow("id",$post['client_id'],"client");
			$post['parent_id'] = 0;
			$post['title'] = $client_detail->first_name." ".$client_detail->last_name." Appointement";
			$post['date'] = date("Y-m-d", strtotime($date));
			$post['in_time'] = date("H:i:s", strtotime($post['in_time']));
			$post['out_time'] = date("H:i:s", strtotime($post['out_time']));
			//$post['color'] = randomString($length = 6);
			$post['created_by'] = $this->agency_id;
			$post['created_at'] = date("Y-m-d H:i:s");
			$post['updated_by'] = $this->agency_id;
			$post['updated_at'] = date("Y-m-d H:i:s");
			
			$from = date("Y-m-d H:i:s ", strtotime($date." ".$post['in_time']));
			$to = date("Y-m-d H:i:s ", strtotime($date." ".$post['out_time']));
			$checkIfCargiverIsAvailable = $this->Client_model->check_availability($post['caregiver_id'], $from, $to);
			$parent_id = 0;
			if($checkIfCargiverIsAvailable){
				$parent_id = $this->common_model->insertGetIDQuery("client_appointements", $post);
				$addedIds[] = $parent_id;
			}else{
				$message['type'] = 'error';
				$message['error_detail'][] = (object)array("from"=>date("M, d Y h:i A", strtotime($from)), "to"=>date("M, d Y h:i A", strtotime($to)));
			}
			if(isset($post['is_recurring']) && $post['is_recurring']==1){
				$post['parent_id'] = $parent_id;
				if($post['is_recurring']==0){
					$post['recurring_months'] = 0;
				}
				$message = $this->add_recurring_appointments($post, $date, $message);
			}
		}
		
		if($message['type'] == 'success'){
			$m = '';
			if(count($addedIds)>0){
				$lastAddedClient = $this->common_model->listingRow("id",$post['client_id'],"client");
				
				$m .= '<p>Here is the summary of '.$lastAddedClient->first_name.' '.$lastAddedClient->last_name.'\'s created schedule.</p>';
				foreach($addedIds as $addedId){
					$lastAddedAppointment = $this->common_model->listingRow("id",$addedId,"client_appointements");
					
					$lastAddedCaregiver = $this->common_model->listingRow("id",$lastAddedAppointment->caregiver_id,"caregiver");
					$m .= '
					<br>
					<table class="table">
					<thead><tr><td colspan="3">'.date("l d, Y", strtotime($lastAddedAppointment->date)).'</td></tr></thead>
					<tbody><tr><td>'.date("h:i A", strtotime($lastAddedAppointment->in_time)).' - '.date("h:i A", strtotime($lastAddedAppointment->out_time)).'</td><td><span class="fc-event-dot" style="background-color:#546E7A"></span></td><td><img src="'.caregiver_image($lastAddedCaregiver->id).'" class="rounded-circle" width="40" height="40" alt=""> '.$lastAddedCaregiver->first_name.' '.$lastAddedCaregiver->last_name.'</td></tr></tbody>
					</table>
					';
				}
				$message['error_detail'] = $m;
			}
		}
		echo json_encode($message);
	}
	
	public function add_recurring_appointments($post, $date, $message){
		$appStartDate = date("Y-m-d", strtotime($date));
		$appEndDate = date('Y-m-d', strtotime('+'.$post['recurring_months'].' month', strtotime($date)));
		$datesArray = $this->common_model->getDatesFromRange($appStartDate, $appEndDate, "Y-m-d");
		$appDatesArray = array();
		foreach($datesArray as $key=>$val){
			if(date("N", strtotime($val))==date("N", strtotime($date))){
				if($val!=date("Y-m-d", strtotime($date))){
					$appDatesArray[] = $val;
				}
			}
		}
		$parent_id = 0;
		foreach($appDatesArray as $key=>$val){
			if($post['parent_id']==0){
				if($key==0){
					$post['parent_id'] = $parent_id;
				}
			}
			$post['date'] = $val;
			$post['recurring_months'] = 0;
			$from = date("Y-m-d H:i:s ", strtotime($val." ".$post['in_time']));
			$to = date("Y-m-d H:i:s ", strtotime($val." ".$post['out_time']));
			$checkIfCargiverIsAvailable = $this->Client_model->check_availability($post['caregiver_id'], $from, $to);
			if($checkIfCargiverIsAvailable){
				$parent_id = $this->common_model->insertGetIDQuery("client_appointements", $post);
			}else{
				$message['type'] = 'error';
				$message['error_detail'][] = (object)array("from"=>date("M, d Y h:i A", strtotime($from)), "to"=>date("M, d Y h:i A", strtotime($to)));
			}
		}
		return $message;
	}
	
	public function edit_client_schedule(){
		$post = $this->input->post();
		$data = $this->Schedule_model->edit_client_schedule($post);
		$this->load->view("agency/scheduling/inc/scheduling/edit_client_schedule", $data);
	}
	
	public function change_is_recurring_status(){
		$post = $this->input->post();
		$appointment_id = $post['appointement_id'];
		$message['type'] = 'success';
		$message['error_detail'] = array();
		$result = $this->common_model->listingRow("id",$post['appointement_id'],"client_appointements");
		
		if($result->parent_id!=0){
			$appointment_id = $result->parent_id;
			$result = $this->common_model->listingRow("id",$result->parent_id,"client_appointements");
		}
		if($post['is_recurring']==1){
			
			$this->common_model->updateQuery("client_appointements", "id", $appointment_id, array(
				"is_recurring"=>1,
				"recurring_months"=>$post['months']
			));
			$data = (array)$result;
			$data['parent_id'] = $result->id;
			$data['is_recurring'] = 1;
			$data['recurring_months'] = $post['months'];
			$data['created_by'] = $this->agency_id;
			$data['created_at'] = date("Y-m-d H:i:s");
			$data['updated_by'] = $this->agency_id;
			$data['updated_at'] = date("Y-m-d H:i:s");
			unset($data['id']);
			$message = $this->add_recurring_appointments($data, $data['date'], $message);
		}else{
			$this->common_model->delete("client_appointements", array("parent_id"=>$appointment_id));
			$this->common_model->updateQuery("client_appointements", "id", $appointment_id, array(
				"is_recurring"		=> $post['is_recurring'],
				"recurring_months"	=> $post['months'],
				"updated_by"		=> $this->agency_id,
				"updated_at"		=> date("Y-m-d H:i:s"),
			));
		}
		echo json_encode($message);
	}
	
	public function delete_appointement(){
		$post = $this->input->post();
		$this->Schedule_model->delete_appointement($post);
	}
	
	public function update_client_appointement_form(){
		$post = $this->input->post();
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
	
	public function switch_appointment($post){
		$appointment = $this->common_model->listingRow("id",$post['appointment_id'],"client_appointements");
		
		//$todaysAppointments = $this->Client_model->check_appointments_by_date($post['switch_caregiver'], $appointment->date);
		$switcherAppointments = $this->common_model->listingMultipleWhereResult("client_appointements", array("date"=>$appointment->date, "caregiver_id"=>$post['switch_caregiver']));
		//print_array($switcherAppointments);
		//foreach($switcherAppointments as $key=>$val){
			$from = date("Y-m-d H:i:s ", strtotime($appointment->date." ".$appointment->in_time));
			$to = date("Y-m-d H:i:s ", strtotime($appointment->date." ".$appointment->out_time));
			$checkAvailability = $this->Client_model->check_availability($post['switch_caregiver'], $from, $to);
			print_r($checkAvailability);
		//}
		
		//print_array($switcherAppointments);
	}
	
	public function assign_other_caregiver($post){
		$message['type'] = "success";
		$message['text'] = "";
		$result = $this->common_model->listingRow("id",$post['appointment_id'],"client_appointements");
		$from = date("Y-m-d H:i:s ", strtotime($result->date." ".$result->in_time));
		$to = date("Y-m-d H:i:s ", strtotime($result->date." ".$result->out_time));
		$checkAvailability = $this->Client_model->check_availability($post['replace_with_id'], $from, $to);
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
			$message['text'] = "This caregiver is already assigned somewhere else on this datetime.";
		}
		echo json_encode($message);
	}

	public function edit_medication(){
		$medicationId = $this->input->post("id");
		$data = $this->Schedule_model->edit_medication($medicationId);
		$this->load->view("agency/scheduling/inc/medication_list/edit_medication", $data);
	}

	public function delete_medication(){
		$medicationId = $this->input->post('id');
		$this->Schedule_model->delete_medication($medicationId);
	}
	public function add_new_medication(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Schedule_model->add_new_medication($post);
		$this->load->view("agency/scheduling/inc/medication_list/list_view", $data);
	}
	
	public function update_medication_list(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Schedule_model->update_medication_list($post);
		$this->load->view("agency/scheduling/inc/medication_list/list_view",$data);
	}
	public function add_client_dietry_needs(){
		$post = $this->input->post();
		$post = $this->agency_id;
		$data = $this->Schedule_model->add_client_dietry_needs($post);
		$this->load->view("agency/scheduling/inc/dietry_needs",$data);
	}

	public function add_vital_report(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Schedule_model->add_vital_report($post);
		$this->load->view("agency/scheduling/inc/vital_reports/list_view",$data);
	}
	public function edit_vital_reports(){
		$vitalReportId = $this->input->post("id");
		$data = $this->Schedule_model->edit_vital_reports($vitalReportId);
		$this->load->view("agency/scheduling/inc/vital_reports/edit_vital_reports", $data);
	}
	public function update_vital_reports(){
		$post = $this->input->post();
		$data = $this->Schedule_model->update_vital_reports($post);
	    $this->load->view("agency/scheduling/inc/vital_reports/list_view", $data);

	}
	public function delete_vital_reports(){
		$vitalReportId = $this->input->post('id');
		$this->Schedule_model->delete_vital_reports($vitalReportId);
	}
	public function add_new_shopping(){
		$post = $this->input->post();
		$detail = $this->Schedule_model->add_new_shopping($post);
		$this->load->view("agency/scheduling/inc/shopping_list/list_view_shopping",$detail);
	}
	public function delete_shopping(){
		$shopping_id = $this->input->post('id');
		$detail = $this->Schedule_model->delete_shopping($shopping_id);
	}
	public function edit_shopping(){
		$shopping_id = $this->input->post('id');
		$data = $this->Schedule_model->edit_shopping($shopping_id);
		$this->load->view("agency/scheduling/inc/shopping_list/edit_shopping",$data);	
	}
	public function update_shopping(){
		$post = $this->input->post();
		$data = $this->Schedule_model->update_shopping($post);
 		$this->load->view("agency/scheduling/inc/shopping_list/list_view_shopping",$detail);
	}
	public function client_bio_form(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Schedule_model->client_bio_form($post);
		$this->load->view("/agency/scheduling/inc/client_bio/view",$data);
	}

	public function delete_client_bio(){
		$id = $this->input->post('id');
		$data = $this->Schedule_model->client_bio_form($id);
		$this->load->view("/agency/scheduling/inc/client_bio/view",$data);
	}

	public function add_appointment_calender(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		//print_array($post);
		$data = $this->Schedule_model->add_appointment_calender($post);
		$this->load->view('agency/scheduling/inc/appointment_calender/list_view_appointment',$data);
	}
	public function edit_appointment_calender(){
		$appointment_id = $this->input->post('id');
		$data = $this->Schedule_model->edit_appointment_calender($appointment_id);
		$this->load->view('agency/scheduling/inc/appointment_calender/edit_appointment',$data);
	}
	public function delete_appointment_calender(){
		$appointment_id = $this->input->post('id');
		$this->Schedule_model->delete_appointment_calender($appointment_id);
	}
	public function update_appointment_calender(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Schedule_model->update_appointment_calender($post);
		$this->load->view('agency/scheduling/inc/appointment_calender/list_view_appointment',$data);
	}
}