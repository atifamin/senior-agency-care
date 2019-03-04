<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

    	//LoggedIn User ID
		$userSession = $this->session->userdata("isAgencyLoggedIn");
		$this->agency_id = $userSession['user_id'];
	}
	
	public function index(){
		$data["breadcrumb"] = "Reports";
		$data["heading"] = "Reports";
		$data["url_segment"] = "reports";
		$this->load->view("agency/reports/index",$data);
	}
}