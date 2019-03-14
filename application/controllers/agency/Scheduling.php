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
		$this->load->model("Client_model");
	}

	public function index(){
		$data["breadcrumb"] = "Scheduling";
		$data["heading"] = "Client Scheduling";
		$data["url_segment"] = "Scheduling";
		$data["clients"] = $this->Client_model->getAllClients();
		//print_array($data['clients']);
		$this->load->view("agency/scheduling/index",$data);
	}

	public function view($client_id){
		$data["breadcrumb"] = "Scheduling";
		$data["heading"] = "Scheduling";
		$data["url_segment"] = "scheduling";
		$data['client_id'] = $client_id;
		$data['relationshipDetails'] = $this->Client_model->clientRelationshipDetail($client_id);
		//print_array($data['clientDetail']);
		$this->load->view("agency/scheduling/scheduling",$data);
	}
	
}