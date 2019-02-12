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
		$this->user_id = $userSession['user_id'];
	}
	
	public function index(){
		$data["breadcrumb"] = "Clients";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "clients";
		$this->load->view("agency/clients/index",$data);
	}

	public function add_client(){
		$data["breadcrumb"] = "Add Client";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "add_caregivers";
		$this->load->view("agency/clients/add_client",$data);
	}

	public function client_profile(){
		$data["breadcrumb"] = "Client";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "clients";
		$this->load->view("agency/clients/client_profile",$data);
	}
}