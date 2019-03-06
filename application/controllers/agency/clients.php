<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {
	
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
		$data["breadcrumb"] = "Clients";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "clients";
		$data["clients"] = $this->Client_model->getAllClients();
		$this->load->view("agency/clients/index",$data);
	}

	public function add_client(){
		$data["breadcrumb"] = "Add Client";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "add_caregivers";
		$this->load->view("agency/clients/add_client",$data);
	}

	public function save_client(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$this->Client_model->save_client($post);
		echo 1;
	}

	public function client_profile($id){
		$data["breadcrumb"] = "Client";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "clients";
		$data["client"] = $this->Client_model->getById($id);
		$this->load->view("agency/clients/client_profile",$data);
	}
}