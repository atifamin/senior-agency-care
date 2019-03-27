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
		$this->load->model(array("Client_model", "Caregiver_model"));
	}

	public function index(){
		$data["breadcrumb"] = "Scheduling";
		$data["heading"] = "Client Scheduling";
		$data["url_segment"] = "Scheduling";
		$data["scheduledClients"] = $this->Client_model->scheduledClients($this->agency_id);
		$data["notScheduledClients"] = $this->Client_model->notScheduledClients($this->agency_id);
		$this->load->view("agency/scheduling/index",$data);
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
		$data['vital_report_details'] = $this->common_model->listingResultWhere('client_id',$client_id,"client_vital_reports");
		$data['shopping_list_detail'] =$this->common_model->listingResultWhere('client_id',$client_id,"client_shopping_list");
		$this->load->view("agency/scheduling/scheduling",$data);
	}
	
	public function load_calendar(){
		$post = $this->input->post();
		$data['events'] = $this->Client_model->load_client_appointement_events($post['client_id']);
		$data['client_id'] = $post['client_id'];
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
		$this->common_model->delete("client_caregiver_relationship", array("id"=>$id));
	}
	
	public function add_client_appointement(){
		$post = $this->input->post();
		$dates = explode(",", $post["dates"]);
		foreach($dates as $date){
			unset($post['dates']);
			$client_detail = $this->common_model->listingRow("id",$post['client_id'],"client");
			$post['title'] = $client_detail->first_name." ".$client_detail->last_name." Appointement";
			$post['date'] = date("Y-m-d", strtotime($date));
			$post['in_time'] = date("H:i:s", strtotime($post['in_time']));
			$post['out_time'] = date("H:i:s", strtotime($post['out_time']));
			$post['color'] = randomString($length = 6);
			$post['created_by'] = $this->agency_id;
			$post['created_at'] = date("Y-m-d H:i:s");
			$post['updated_by'] = $this->agency_id;
			$post['updated_at'] = date("Y-m-d H:i:s");
			$this->common_model->insertQuery("client_appointements", $post);
		}
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
	
	public function update_client_appointement_form(){
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
	}
	
	public function change_is_recurring_status(){
		$post = $this->input->post();
		$this->common_model->updateQuery("client_appointements", "id", $post['appointement_id'], array("is_recurring"=>$post['is_recurring']));
	}
	
	public function delete_appointement(){
		$post = $this->input->post();
		$this->common_model->delete("client_appointements", array("id"=>$post["appointement_id"]));
	}

	public function edit_medication(){
		$medicationId = $this->input->post("id");
		$data['result'] = $this->common_model->listingRow("id",$medicationId,"client_medication_list");
		$this->load->view("agency/scheduling/inc/medication_list/edit_medication", $data);
	}

	public function delete_medication(){
		//$id = $this->input->post('id');
		$id = $this->input->post('id');
		$data['result'] = $this->common_model->delete("client_medication_list",array('id'=>$id));
	}
	
	public function add_new_medication(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$this->common_model->insertGetIDQuery("client_medication_list", $post);
		$data['medication_detail'] = $this->common_model->listingResultWhere('client_id',$post['client_id'],"client_medication_list");
		$data['client_id'] = $post['client_id'];
		$this->load->view("agency/scheduling/inc/medication_list/list_view",$data);
	}
	
	public function update_medication_list(){
		$post = $this->input->post();
		$mediData = $post;
		unset($mediData['medication_id']);
		$mediData['updated_by'] = $this->agency_id;
		$mediData['updated_at'] = date("Y-m-d H:i:s");
		$this->common_model->updateQuery("client_medication_list", "id", $post['medication_id'], $mediData);
		$medication_detail = $this->common_model->listingRow("id",$post['medication_id'],"client_medication_list");
		$data['medication_detail'] = $this->common_model->listingResultWhere('client_id',$medication_detail->client_id,"client_medication_list");
		$data['client_id'] = $medication_detail->client_id;
		$this->load->view("agency/scheduling/inc/medication_list/list_view",$data);
	}
	public function add_client_dietry_needs(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$post['created_by'] = $this->agency_id;
		$post['created_at'] = date('Y-m-d H:i:s');
 		$this->common_model->insertGetIDQuery("client_dietry_needs", $post);
	}
		public function add_vital_report(){
		$post = $this->input->post();
		//print_array($post);
		$post['agency_id'] = $this->agency_id;
		$this->common_model->insertGetIDQuery("client_vital_reports", $post);
		$data['vital_report_details'] = $this->common_model->listingResultWhere('client_id',$post['client_id'],"client_vital_reports");
		$data['client_id'] = $post['client_id'];
		$this->load->view("agency/scheduling/inc/vital_reports",$data);
	}

	public function edit_vital_reports(){
		$vitalReportId = $this->input->post("id");
		$data['result'] = $this->common_model->listingRow("id",$vitalReportId,"client_vital_reports");
		//print_array($data);
		$this->load->view("agency/scheduling/inc/vital_reports/edit_vital_reports", $data);
	}

	public function update_vital_reports(){
		$post = $this->input->post();
		//print_array($post);
		$reportData = $post;
		unset($reportData['report_id']);
		$this->common_model->updateQuery("client_vital_reports", "id", $post['report_id'], $reportData);
		$reportData = $post;
		unset($reportData['report_id']);
		$reportData['updated_by'] = $this->agency_id;
		$reportData['updated_at'] = date("Y-m-d H:i:s");
		$this->common_model->updateQuery("client_vital_reports", "id", $post['report_id'], $reportData);
		$vital_report_details = $this->common_model->listingRow("id", $post['report_id'], "client_vital_reports");
		$data['vital_report_details'] = $this->common_model->listingResultWhere('client_id', $vital_report_details->client_id, "client_vital_reports");
        $data['client_id'] = $vital_report_details->client_id;
	    $this->load->view("agency/scheduling/inc/vital_reports/list_view",$data);

	}


	public function delete_vital_reports(){
		$id = $this->input->post('id');
		$data['result'] = $this->common_model->delete("client_vital_reports",array('id'=>$id));
	}

	public function add_new_shopping(){
		$post = $this->input->post();
		$data = array();
		$data['agency_id'] = $this->agency_id;
		$data['created_by'] = $this->agency_id;
		$data['created_at'] = date('Y-m-d H:i:s');
		$data['client_id'] = $post['client_id'];
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
		$data['result'] = $this->common_model->listingRow('id',$shopping_id,"client_shopping_list");
		$this->load->view("agency/scheduling/inc/shopping_list/edit_shopping",$data);	
	}
	public function update_shopping(){
		$post = $this->input->post();
		//print_array($post);
		$data = array();
		unset($data['shopping_id']);
		$data['updated_by'] = $this->agency_id;
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['list_detail'] = "";
		if (isset($post['list_detail'])) {
			$data['list_detail'] = json_encode($post['list_detail']);
		}
 		$shopping_list_id = $this->common_model->updateQuery("client_shopping_list", 'id',$post['shopping_id'] , $data);
 		$shopping_detail = $this->common_model->listingRow("id",$post['shopping_id'],"client_shopping_list");
 		$detail['shopping_list_detail'] = $this->common_model->listingResultWhere('client_id',$shopping_detail->client_id,"client_shopping_list");
		$detail['client_id'] = $shopping_detail->client_id;
		$this->load->view("agency/scheduling/inc/shopping_list/list_view_shopping",$detail);

 		// if (!empty($_FILES['file']['name'])) {
 		// 	$client_shopping_file = upload_file($_FILES['file'], "client_shopping_list", $shopping_list_id, $FILE_DIRECTORY="./uploads/agency/clients/");
			// 	$list_file = $this->common_model->insertGetIDQuery('media',$client_shopping_file);
 		// }
	}

}