<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scheduling extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isCaregiverLoggedIn")){
			redirect("caregiver/login");
		}

    	//LoggedIn User ID
		$userSession = $this->session->userdata("isCaregiverLoggedIn");
		$this->caregiver_id = $userSession['user_id'];
	}

	public function index(){
		$data["breadcrumb"] = "Scheduling";
		$data["heading"] = "Client Scheduling";
		$data["url_segment"] = "Scheduling";
		$this->load->view("caregiver/scheduling/index",$data);
	}
	
}