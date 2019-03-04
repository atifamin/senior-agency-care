<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}
		$this->load->model("Agency_model");
		//LoggedIn User ID
		$userSession = $this->session->userdata('isAgencyLoggedIn');
		$this->agency_id = $userSession['user_id'];
	}
	
	public function index(){
		$data["breadcrumb"] = "Payroll";
		$data["heading"] = "Payroll";
		$data["url_segment"] = "payroll";
		$this->load->view("agency/payroll/index",$data);
	}

	public function archive(){
		$data["breadcrumb"] = "Payroll  /  Archive";
		$data["heading"] = "Archive";
		$data["url_segment"] = "archive";
		$this->load->view("agency/payroll/archive",$data);
	}
}