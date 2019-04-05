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
		$client_id = $post["client_id"];
		$assignedCargivers = $this->common_model->listingResultWhere("client_id",$client_id,"client_caregiver_relationship");
		$assigCaregiver = array();
		if(count($assignedCargivers)>0){
			foreach($assignedCargivers as $row){
				$assigCaregiver[] = $row->caregiver_id;
			}
		}
		$data["assignedCargivers"] = $assigCaregiver;
		$data['caregivers'] = $this->Caregiver_model->getCaregiverByAgencyId($this->agency_id);
		$this->load->view("agency/scheduling/inc/scheduling/load_assign_caregiver", $data);
	}
	
	public function assign_caregiver(){
		$post = $this->input->post();
		$caregivers = explode(",", $post["caregivers_id"]);
		$client_id = $post['client_id'];
		foreach($caregivers as $caregiver_id){
			$checkIfCaregiverAssigned = $this->common_model->listingMultipleWhereRow("client_caregiver_relationship", array("client_id"=>$client_id, "caregiver_id"=>$caregiver_id));
			if(count($checkIfCaregiverAssigned)<=0){
				$this->common_model->insertQuery("client_caregiver_relationship", array(
					"client_id"	=>	$client_id,
					"caregiver_id"	=>	$caregiver_id
				));
			}
		}
		$data['assignedCargivers'] = $this->common_model->listingResultWhere("client_id",$client_id,"client_caregiver_relationship");
		$this->load->view("agency/scheduling/inc/scheduling/view_assigned_caregivers", $data);
	}
	
	public function delete_assigned_caregiver(){
		$post = $this->input->post();
		$id = $post["id"];
		$relationship = $this->common_model->listingRow("id",$id,"client_caregiver_relationship");
		$whereArray = array(
			"client_id"=>$relationship->client_id,
			"caregiver_id"=>$relationship->caregiver_id,
		);
		$this->common_model->delete("client_appointements", $whereArray);
		$this->common_model->delete("client_caregiver_relationship", array("id"=>$id));
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
		$data['client_id'] = $post['client_id'];
		$data['result'] = $this->common_model->listingRow("id",$post['id'],"client_appointements");
		$data['relationshipDetails'] = $this->Client_model->clientRelationshipDetailById($post['client_id']);
		$data['client'] = $this->Client_model->getById($post['client_id']);
		$data['caregivers'] = $this->Caregiver_model->getCaregiverByAgencyId($this->agency_id);
		$data['assignedCargivers'] = $this->common_model->listingResultWhere("client_id",$post['client_id'],"client_caregiver_relationship");
		$data['appointement_id'] = $post['id'];
		$this->load->view("agency/scheduling/inc/scheduling/edit_client_schedule", $data);
	}
	
	/*public function update_client_appointement_form(){
		$post = $this->input->post();
		$data['caregiver_id'] = $post['caregiver_id'];
		$data['date'] = date("Y-m-d", strtotime($post['date']));
		$data['in_time'] = date("H:i:s", strtotime($post['in_time']));
		$data['out_time'] = date("H:i:s", strtotime($post['out_time']));
		$data['is_recurring'] = 0;
		if(isset($post['is_recurring'])){
			$data['is_recurring'] = $post['is_recurring'];
		}
		$data['updated_by'] = $this->agency_id;
		$data['updated_at'] = date("Y-m-d H:s:i");
		$this->common_model->updateQuery("client_appointements", "id", $post['appointement_id'], $data);
	}*/
	
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
		$result = $this->common_model->listingRow("id",$post["appointement_id"],"client_appointements");
		if($result->parent_id==0){
			$this->common_model->delete("client_appointements", array("parent_id"=>$post["appointement_id"]));
		}
		$this->common_model->delete("client_appointements", array("id"=>$post["appointement_id"]));
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
		$result = $this->common_model->listingRow("id",$medicationId,"client_medication_list");
		$data['result'] = $result;
		$client_id = $result->client_id;
		$data['client'] = $this->common_model->listingRow("id",$client_id,"client");
		$this->load->view("agency/scheduling/inc/medication_list/edit_medication", $data);
	}

	public function delete_medication(){
		//$id = $this->input->post('id');
		$id = $this->input->post('id');
		$data['result'] = $this->common_model->delete("client_medication_list",array('id'=>$id));
	}
	public function add_new_medication(){
		$post = $this->input->post();
		$data = $this->Schedule_model->add_new_medication($post);
		$this->load->view("agency/scheduling/inc/medication_list/list_view", $data);
	}
	
	public function update_medication_list(){
		$post = $this->input->post();
		//print_array($post);
		$mediData = $post;
		unset($mediData['medication_id']);
		$mediData['updated_by'] = $this->agency_id;
		$mediData['updated_at'] = date("Y-m-d H:i:s");
		if ($post['day_period_time']) {
			$mediData['day_period_time'] = json_encode($post['day_period_time']);
		}
		$this->common_model->updateQuery("client_medication_list", "id", $post['medication_id'], $mediData);
		$medication_detail = $this->common_model->listingRow("id",$post['medication_id'],"client_medication_list");
		$data['medication_detail'] = $this->common_model->listingResultWhere('client_id',$medication_detail->client_id,"client_medication_list");
		$data['client_id'] = $medication_detail->client_id;
		$this->load->view("agency/scheduling/inc/medication_list/list_view",$data);
	}
	public function add_client_dietry_needs(){
		$post = $this->input->post();
		$dietry_needs = $post;
		$id = $this->input->post('dietry_needs_id');
		unset($dietry_needs['dietry_needs_id']);
		$dietry_needs['agency_id'] = $this->agency_id;
		$dietry_needs['created_by'] = $this->agency_id;
		$dietry_needs['created_at'] = date('Y-m-d H:i:s');
		if ($post['dietry_needs_id'] !=0) {
			$this->common_model->updateQuery("client_dietry_needs", "id", $post['dietry_needs_id'],$dietry_needs);
		}else{
			$this->common_model->insertGetIDQuery("client_dietry_needs", $dietry_needs);
		}
 		$data['dietry_needs_detail'] = $this->common_model->listingRow("client_id",$post['client_id'],"client_dietry_needs");
		$data['client_id'] = $post['client_id'];
		$this->load->view("agency/scheduling/inc/dietry_needs",$data);
	}

	public function add_vital_report(){
		$post = $this->input->post();
		$input_date = $this->input->post('from_date');
		$date = explode(" - ", $input_date);
		$post['from_date'] = date("Y-m-d H:i:s", strtotime($date[0]));
		$post['to_date'] = date("Y-m-d H:i:s", strtotime($date[1]));
		$post['agency_id'] = $this->agency_id;
		$ddd = $this->common_model->insertGetIDQuery("client_vital_reports", $post);
		$data['vital_report_details'] = $this->common_model->listingResultWhere('client_id',$post['client_id'],"client_vital_reports");
		$data['client_id'] = $post['client_id'];
		$this->load->view("agency/scheduling/inc/vital_reports/list_view",$data);
	}
	public function edit_vital_reports(){
		$vitalReportId = $this->input->post("id");
		$result = $this->common_model->listingRow("id",$vitalReportId,"client_vital_reports");
		$data['result'] = $result;
		$client_id = $result->client_id;
		$data['client'] = $this->common_model->listingRow('id',$client_id,'client');
		// $data['client'] = $this->Client_model->getById($client_id);
		//print_array($data);
		$this->load->view("agency/scheduling/inc/vital_reports/edit_vital_reports", $data);
	}
	public function update_vital_reports(){
		$post = $this->input->post();
		
		$reportData = $post;
		unset($reportData['report_id']);

		if (isset($reportData['is_bloodpressure'])) {
			$reportData['is_bloodpressure'] = 1;
		}else{
			$reportData['is_bloodpressure'] = 0;
		}
		if (isset($reportData['is_breathing'])) {
			$reportData['is_breathing'] = 1;
		}else{
			$reportData['is_breathing'] = 0;
		}
		if (isset($reportData['is_pulse'])) {
			$reportData['is_pulse'] = 1;
		}else{
			$reportData['is_pulse'] = 0;
		}
		if (isset($reportData['is_temprature'])) {
			$reportData['is_temprature'] = 1;
		}else{
			$reportData['is_temprature'] = 0;
		}
		//print_array($post);
		//print_array($reportData);
		$input_date = $this->input->post('from_date');
		$date = explode('-', $input_date);
		$reportData['from_date'] = date("Y-m-d H:i:s", strtotime($date[0]));
		$reportData['to_date'] = date("Y-m-d H:i:s", strtotime($date[1]));
		$reportData['updated_by'] = $this->agency_id;
		$reportData['updated_at'] = date("Y-m-d H:i:s");
		$this->common_model->updateQuery("client_vital_reports", "id", $post['report_id'], $reportData);
		$vital_report_details = $this->common_model->listingRow("id", $post['report_id'], "client_vital_reports");
		$data['vital_report_details'] = $this->common_model->listingResultWhere('client_id', $vital_report_details->client_id, "client_vital_reports");
        $data['client_id'] = $vital_report_details->client_id;
	    $this->load->view("agency/scheduling/inc/vital_reports/list_view", $data);

	}
	public function delete_vital_reports(){
		$id = $this->input->post('id');
		$data['result'] = $this->common_model->delete("client_vital_reports",array('id'=>$id));
	}
	public function add_new_shopping(){
		$post = $this->input->post();
		//print_array($post);
		$data = array();
		$data['agency_id'] = $this->agency_id;
		$data['created_by'] = $this->agency_id;
		$data['created_at'] = date('Y-m-d H:i:s');
		$data['client_id'] = $post['client_id'];
		$data['status'] = $post['status'];
		$data['list_detail'] = "";
		if(isset($post['list_detail'])){
			$data['list_detail'] = json_encode($post['list_detail']);
			//$data['list_detail'] = implode(",", $post['list_detail']);
		}
		$shopping_list_id = $this->common_model->insertGetIDQuery("client_shopping_list", $data);
		if (!empty($_FILES['file']['name'])) {
			$client_shopping_file = upload_file($_FILES['file'], "client_shopping_list", $shopping_list_id, $FILE_DIRECTORY="./uploads/agency/clients/");
			$list_file = $this->common_model->insertGetIDQuery('media',$client_shopping_file);
		}
		if (!empty($list_file)) {
			$this->common_model->updateQuery("client_shopping_list", "id", $shopping_list_id,array('list_file'=>$list_file));
		}
		$detail['shopping_list_detail'] = $this->common_model->listingResultWhere('client_id',$post['client_id'],"client_shopping_list");
		$detail['client_id'] = $post['client_id'];
		$this->load->view("agency/scheduling/inc/shopping_list/list_view_shopping",$detail);
	}
	public function delete_shopping(){
		$id = $this->input->post('id');
		$this->common_model->delete('client_shopping_list', array('id'=>$id));
	}
	public function edit_shopping(){
		$shopping_id = $this->input->post('id');
		$result = $this->common_model->listingRow('id',$shopping_id,"client_shopping_list");
		$data["result"] = $result;
		$client_id = $result->client_id;
		$data['client'] = $this->common_model->listingRow('id',$client_id,'client');
		$this->load->view("agency/scheduling/inc/shopping_list/edit_shopping",$data);	
	}
	public function update_shopping(){
		$post = $this->input->post();
		//print_array($post);
		$data = array();
		unset($data['shopping_id']);
		$data['updated_by'] = $this->agency_id;
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['status'] = $post['status'];
 		$data['list_detail'] = "";
		if (isset($post['list_detail'])) {
			$data['list_detail'] = json_encode($post['list_detail']);
		}
 		$shopping_list_id = $this->common_model->updateQuery("client_shopping_list", 'id',$post['shopping_id'] , $data);
 		$shopping_list_detail = $this->common_model->listingRow("id",$post['shopping_id'],"client_shopping_list");
 		$detail['shopping_list_detail'] = $this->common_model->listingResultWhere('client_id',$shopping_list_detail->client_id,"client_shopping_list");
		$client_id = $shopping_list_detail->client_id;
		
		if (!empty($_FILES['file']['name'])) {
			$client_shopping_file = upload_file($_FILES['file'], "client_shopping_list", $shopping_list_id, $FILE_DIRECTORY="./uploads/agency/clients/");
			$list_file = $this->common_model->insertGetIDQuery('media',$client_shopping_file);
		}
 		// 	if ($shopping_list_detail->list_detail !=0) {
			// 	if (!empty($client_shopping_file)) {
			// 		$previous_detail = $this->common_model->listingRow("id", $shopping_list_detail->list_detail, "media");
			// 		if (file_exists(DOC_PATH.$previous_detail->full_path)) {
			// 			unlink(DOC_PATH.$previous_detail->full_path);
			// 		}
			// 		$tihs->common_model->updateMultipleWhereQuery("media", array("id"=>$shopping_list_detail->list_detail), $client_shopping_file);
			// 	}else{
			// 		$list_file = $this->common_model->insertGetIDQuery('media',$client_shopping_file);
			// 		$tihs->common_model->updateMultipleWhereQuery("client_shopping_list", array("id"=>$client_id), array("list_detail"=>$list_file));
			// 	}
			// }
 		// }
 		$this->load->view("agency/scheduling/inc/shopping_list/list_view_shopping",$detail);
	}
	public function client_bio_form(){
		$post = $this->input->post();
		$bioData = $post;
		$id = $post['client_bio_id'];
		unset($bioData['client_bio_id']);
		$bioData['agency_id'] = $this->agency_id;
		if($post['client_bio_id']!=0){
			$this->common_model->updateQuery("client_bio", "id", $post['client_bio_id'],$bioData);
		}else{
			$id = $this->common_model->insertGetIDQuery("client_bio", $bioData);
		}
		$data['client_bio'] = $this->common_model->listingRow("client_id",$post['client_id'],"client_bio");
		$data['client_id'] = $post['client_id'];
		$data['client'] = $this->Client_model->getById($post['client_id']);
		$this->load->view("/agency/scheduling/inc/client_bio/view",$data);
	}

	public function delete_client_bio(){
		$id = $this->input->post('id');
		$client_id = $this->input->post("client_id");
		$this->common_model->delete("client_bio", array('id'=>$id));
		$data['client_bio'] = $this->common_model->listingRow("id",$id,"client_bio");
		$data['client_id'] = $client_id;
		$data['client'] = $this->Client_model->getById($client_id);
		$this->load->view("/agency/scheduling/inc/client_bio/view",$data);
	}

	public function add_appointment_calender(){
		$post = $this->input->post();
		//print_array($post);
		$post['agency_id'] = $this->agency_id;
		$post['created_by'] = $this->agency_id;
		$post['created_at'] = date('Y-m-d H:i:s');
		$date = $this->input->post('appointment_date');
		$post['appointment_date'] = date('Y-m-d H:i:s',strtotime($date));
		//print_array($post);
 	// 	$input_date = $this->input->post('from_date');
		// $date = explode("-", $input_date);
		// $post['from_date'] = date("Y-m-d H:i:s",strtotime($date[0]));
		// $post['to_date'] = date("Y-m-d H:i:s",strtotime($date[1]));
		$this->common_model->insertGetIDQuery("client_appointment_calender", $post);
		$data['appointment_detail'] = $this->common_model->listingResultWhere("client_id",$post['client_id'],"client_appointment_calender");
		$data['client_id'] = $post['client_id'];
		$this->load->view('agency/scheduling/inc/appointment_calender/list_view_appointment',$data);
	}
	public function edit_appointment_calender(){
		$appointment_id = $this->input->post('id');
		$result = $this->common_model->listingRow("id",$appointment_id,"client_appointment_calender");
		$data['result'] = $result;
		$client_id = $result->client_id;
		$data['client'] =$this->common_model->listingRow('id',$client_id,'client');
		$this->load->view('agency/scheduling/inc/appointment_calender/edit_appointment',$data);
	}
	public function delete_appointment_calender(){
		$id = $this->input->post('id');
		$this->common_model->delete("client_appointment_calender", array('id'=>$id));
	}
	public function update_appointment_calender(){
		$post = $this->input->post();
		//print_array($post);
		$appData = $post;
		unset($appData['appointment_id']);
		$appData['agency_id'] = $this->agency_id;
		$appData['updated_by'] = $this->agency_id;
		$date = $this->input->post('appointment_date');
		$appData['appointment_date'] = date('Y-m-d H:i:s',strtotime($date));
		// $input_date = $this->input->post('from_date');
		// $date = explode("-", $input_date);
		// $appData['from_date'] = date("Y-m-d H:i:s",strtotime($date[0]));
		// $appData['to_date'] = date("Y-m-d H:i:s",strtotime($date[1]));
		$this->common_model->updateQuery("client_appointment_calender", "id",$post['appointment_id'], $appData);
		$appointment_detail = $this->common_model->listingRow("id",$post['appointment_id'],"client_appointment_calender");
		$data['appointment_detail'] = $this->common_model->listingResultWhere('client_id',$post['client_id'],'client_appointment_calender');
		$data['client_id'] = $appointment_detail->client_id;
		$this->load->view('agency/scheduling/inc/appointment_calender/list_view_appointment',$data);
	}
}