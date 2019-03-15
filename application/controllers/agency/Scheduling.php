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
		//print_array($data['clients']);
		$this->load->view("agency/scheduling/index",$data);
	}

	public function view($client_id){
		$data["breadcrumb"] = "Scheduling";
		$data["heading"] = "Scheduling";
		$data["url_segment"] = "scheduling";
		$data['client_id'] = $client_id;
		$data['relationshipDetails'] = $this->Client_model->clientRelationshipDetailById($client_id);
		$data['client'] = $this->Client_model->getById($client_id);
		$data['caregivers'] = $this->Caregiver_model->getAll();
		$data['assignedCargivers'] = $this->common_model->listingResultWhere("client_id",$client_id,"client_caregiver_relationship");
		$this->load->view("agency/scheduling/scheduling",$data);
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
	
}