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
		$this->load->model(array("Client_model", "Caregiver_model", "Schedule_model","Notification_model"));
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
		$data['dietry_needs_detail'] = $this->common_model->listingRow("client_id",$client_id,"client_dietry_needs");
		$data['client_address'] = $this->common_model->listingRow("client_id",$client_id,"client_address");
		$this->load->view("agency/scheduling/scheduling",$data);
	}
	
	public function add_client_address(){
		$post = $this->input->post();
		$detail = (array)json_decode($post["client_address_detail"]);
		$detail['agency_id'] = $this->agency_id;
		$detail['client_id'] = $post['client_id'];
		$detail['created_by'] = $this->agency_id;
		//check if exists
		$checkIfExists = $this->common_model->listingRow("client_id",$post['client_id'],"client_address");
		if(!empty($post["client_address_detail"])){
			if(count($checkIfExists)>0){
				$this->common_model->updateQuery("client_address", "id", $checkIfExists->id, $detail);
			}else{
				$this->common_model->insertQuery("client_address", $detail);
			}
		}
		return redirect($_SERVER["HTTP_REFERER"]);
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
	public function calender_shift_view(){
		$post = $this->input->post();
		$data = $this->Schedule_model->calender_shift_view($post);
		$this->load->view('agency/scheduling/inc/scheduling/calendar_shift_detail',$data);
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
			$from = date("Y-m-d H:i:s ", strtotime($date." ".$post['in_time']));
			$to = date("Y-m-d H:i:s ", strtotime($date." ".$post['out_time']));
			$diff = $this->common_model->dateDifferanceTwoDates($from, $to);
			if($diff['hours']<0){
				$to = date('Y-m-d H:i:s', strtotime("+1 day", strtotime($to)));
			}
			$post['from'] = $from;
			$post['to'] = $to;
			//$post['color'] = randomString($length = 6);
			$post['created_by'] = $this->agency_id;
			$post['created_at'] = date("Y-m-d H:i:s");
			$post['updated_by'] = $this->agency_id;
			$post['updated_at'] = date("Y-m-d H:i:s");
			$checkIfCargiverIsAvailable = $this->Client_model->check_availability($post['caregiver_id'], $from, $to);
			$parent_id = 0;
			if($checkIfCargiverIsAvailable){
				$ca = $post;
				unset($ca['date']);
				unset($ca['in_time']);
				unset($ca['out_time']);
				$parent_id = $this->common_model->insertGetIDQuery("client_appointements", $ca);
				$addedIds[] = $parent_id;
				if(isset($post['is_recurring']) && $post['is_recurring']==1){
					$post['parent_id'] = $parent_id;
					if($post['is_recurring']==0){
						$post['recurring_months'] = 0;
					}
					$from = $post['from'];
					$to = $post['to'];
					$diff = $this->common_model->dateDifferanceTwoDates($from, $to);
					if($diff['hours']<0){
						$to = date('Y-m-d H:i:s', strtotime("+1 day", strtotime($to)));
					}
					$post['from'] = date("Y-m-d H:i:s ", strtotime(date("Y-m-d", strtotime($from))." ".date("H:i:s", strtotime($post['in_time']))));
					$post['to'] = date("Y-m-d H:i:s ", strtotime(date("Y-m-d", strtotime($to))." ".date("H:i:s", strtotime($post['out_time']))));
					$message = $this->add_recurring_appointments($post, $date, $message);
				}
			}else{
				$message['type'] = 'error';
				$message['error_detail'][] = (object)array("from"=>date("M, d Y h:i A", strtotime($from)), "to"=>date("M, d Y h:i A", strtotime($to)));
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
					<thead><tr><td colspan="3">'.date("l d, Y", strtotime($lastAddedAppointment->from)).'</td></tr></thead>
					<tbody><tr><td>'.date("h:i A", strtotime($lastAddedAppointment->from)).' - '.date("h:i A", strtotime($lastAddedAppointment->to)).'</td><td><span class="fc-event-dot" style="background-color:#546E7A"></span></td><td><img src="'.caregiver_image($lastAddedCaregiver->id).'" class="rounded-circle" width="40" height="40" alt=""> '.$lastAddedCaregiver->first_name.' '.$lastAddedCaregiver->last_name.'</td></tr></tbody>
					</table>
					';
				}
				$message['error_detail'] = $m;
			}
		}
		$this->Notification_model->add_client_appointement($post);
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
			//$post['date'] = $val;
			$post['recurring_months'] = 0;
			$from = date("".$val." H:i:s", strtotime(date("H:i:s", strtotime($post['from']))));
			$to = date("".$val." H:i:s", strtotime(date("H:i:s", strtotime($post['to']))));
			
			//$to = $post['to'];
			$diff = $this->common_model->dateDifferanceTwoDates($from, $to);
			if($diff['hours']<0){
				$to = date('Y-m-d H:i:s', strtotime("+1 day", strtotime($to)));
			}
			$checkIfCargiverIsAvailable = $this->Client_model->check_availability($post['caregiver_id'], $from, $to);
			if($checkIfCargiverIsAvailable){
				$ca = $post;
				unset($ca['date']);
				unset($ca['in_time']);
				unset($ca['out_time']);
				$ca['from'] = $from;
				$ca['to'] = $to;
				$parent_id = $this->common_model->insertGetIDQuery("client_appointements", $ca);
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
			$message = $this->add_recurring_appointments($data, date("Y-m-d", strtotime($data['from'])), $message);
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
		$message['type'] = "success";
		$message["action"] = "switch";
		$message['text'] = "";
		$appointment = $this->common_model->listingRow("id",$post['appointment_id'],"client_appointements");

		$switcherAppointments = $this->common_model->listingMultipleWhereResult("client_appointements", array("from"=>$appointment->from, "caregiver_id"=>$post['switch_caregiver']));

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
			$message['text'] = json_encode($this->load->view('agency/scheduling/inc/scheduling/switch_caregiver',$data, true));
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
		//print_array($post);
		$current_appointment = $this->common_model->listingRow('id',$post['from'],'client_appointements');
		$switch_appointment = $this->common_model->listingRow('id',$post['to'],'client_appointements');
		//print_array($switch_appointment);
		$update_current['caregiver_id'] =  $switch_appointment->caregiver_id;
		$update_current['is_recurring'] =  0;

		$update_switch['caregiver_id'] =  $current_appointment->caregiver_id;
		$update_switch['is_recurring'] = 0;

		$this->common_model->updateQuery("client_appointements", "id", $current_appointment->id, $update_current);
		$this->common_model->updateQuery("client_appointements", "id", $switch_appointment->id, $update_switch);
		$this->Notification_model->switch_appointment_shift($post);
	}

	public function assign_other_caregiver($post){
		$message['type'] = "success";
		$message["action"] = "assign";
		$message['text'] = "";
		//print_array($post);
		$result = $this->common_model->listingRow("id",$post['appointment_id'],"client_appointements");
		$from = date("Y-m-d H:i:s ", strtotime($result->from));
		$to = date("Y-m-d H:i:s ", strtotime($result->to));
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
			$this->Notification_model->assign_other_caregiver($post);
		}else{
			$message['type'] = "error";
			$message['action'] = "assign_error";
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
		$medication_id = $this->input->post('id');
		$this->Schedule_model->delete_medication($medication_id);
		//$this->Notification_model->delete_medication($medication_id);
	}
	public function add_new_medication(){
		$post = $this->input->post();

		$post['agency_id'] = $this->agency_id;
		$data = $this->Schedule_model->add_new_medication($post);
		$post['medication_id'] = $data['medication_id'];
		//print_array($data['medication_id']);
		$data = $this->Notification_model->add_new_medication($post);
		$this->load->view("agency/scheduling/inc/medication_list/list_view", $data);
	}
	
	public function update_medication_list(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Notification_model->update_medication_list($post);
		$data = $this->Schedule_model->update_medication_list($post);
		$this->load->view("agency/scheduling/inc/medication_list/list_view",$data);
	}
	public function add_client_dietry_needs(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Schedule_model->add_client_dietry_needs($post);
		$post['dietry_needs_id'] = $data['dietry_needs_id'];
		$post['update_dietry_id'] = $data['update_dietry_id'];
		$data = $this->Notification_model->add_client_dietry_needs($post);

		$this->load->view("agency/scheduling/inc/dietry_needs",$data);
	}

	public function add_vital_report(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Schedule_model->add_vital_report($post);
		$post['vital_report_id'] = $data['vital_report_id'];
		$data = $this->Notification_model->add_vital_report($post);
		$this->load->view("agency/scheduling/inc/vital_reports/list_view",$data);
	}
	public function edit_vital_reports(){
		$vitalReportId = $this->input->post("id");
		$data = $this->Schedule_model->edit_vital_reports($vitalReportId);
		$this->load->view("agency/scheduling/inc/vital_reports/edit_vital_reports", $data);
	}
	public function update_vital_reports(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Notification_model->update_vital_reports($post);
		$data = $this->Schedule_model->update_vital_reports($post);
	    $this->load->view("agency/scheduling/inc/vital_reports/list_view", $data);

	}
	public function delete_vital_reports(){
		$vitalReportId = $this->input->post('id');
		$this->Schedule_model->delete_vital_reports($vitalReportId);
	}
	public function add_new_shopping(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$detail = $this->Schedule_model->add_new_shopping($post);
		$post['shopping_list_id'] = $detail['shopping_list_id'];
		$detail = $this->Notification_model->add_new_shopping($post);
		$this->load->view("agency/scheduling/inc/shopping_list/list_view_shopping",$detail);
	}
	public function delete_shopping(){
		$shopping_id = $this->input->post('id');
		$detail = $this->Schedule_model->delete_shopping($shopping_id);
		//$detail = $this->Notification_model->delete_shopping($shopping_id);
	}
	public function edit_shopping(){
		$shopping_id = $this->input->post('id');
		$data = $this->Schedule_model->edit_shopping($shopping_id);
		$this->load->view("agency/scheduling/inc/shopping_list/edit_shopping",$data);	
	}
	public function update_shopping(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Notification_model->update_shopping($post);
		$data = $this->Schedule_model->update_shopping($post);
 		$this->load->view("agency/scheduling/inc/shopping_list/list_view_shopping",$data);
	}
	public function add_recipt(){
		$post = $this->input->post();
		if (!empty($_FILES['file']['name'])) {
			$client_shopping_file = upload_file($_FILES['file'], "client_shopping_list",$post['module_id'], $FILE_DIRECTORY="./uploads/agency/clients/");
			$this->common_model->insertGetIDQuery('media',$client_shopping_file);
		}
	}
	public function edit_recipt(){
		$id = $this->input->post('id');
		$val = "client_shopping_list";
		$result = $this->common_model->listingRow("id",$id,"client_shopping_list");	
		$data['result'] = $result;
		$data['file_data'] = $this->db->query("SELECT * FROM media WHERE module = '".$val."' AND module_id ='".$result->id."' ")->result(); 
		$data['client'] = $this->common_model->listingRow("id",$result->client_id,"client");	

		$this->load->view("agency/scheduling/inc/shopping_list/shopping_recipt",$data);	
		//print_array($id);
	}
	public function delete_recipt(){
		$id = $this->input->post('id');
		//print_array($id);
		$this->common_model->delete('media', array('id'=>$id));
	}
	public function client_bio_form(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Schedule_model->client_bio_form($post);
		$post['client_bio_id'] = $data['client_bio_id'];
		$post['update_client_bio_id'] = $data['update_client_bio_id'];
		$data = $this->Notification_model->client_bio_form($post);
		$this->load->view("/agency/scheduling/inc/client_bio/view",$data);
	}

	public function delete_client_bio(){
		$id = $this->input->post('id');
		$data = $this->Schedule_model->delete_client_bio($id);
		$this->load->view("/agency/scheduling/inc/client_bio/view",$data);
	}

	public function add_appointment_calender(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$data = $this->Schedule_model->add_appointment_calender($post);
		$post['appointment_calender_id'] = $data['appointment_calender_id'];
		$data = $this->Notification_model->add_appointment_calender($post);
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
		$data = $this->Notification_model->update_appointment_calender($post);
		$data = $this->Schedule_model->update_appointment_calender($post);
		$this->load->view('agency/scheduling/inc/appointment_calender/list_view_appointment',$data);
	}
}