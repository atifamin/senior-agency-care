<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isCaregiverLoggedIn")){
			redirect("caregiver");
		}

		//LoggedIn Caregiver ID
		$sessionData = $this->session->userdata("isCaregiverLoggedIn");
		$this->caregiver_id = $sessionData['user_id'];
	}
	
	public function index(){
		$data["breadcrumb"] = "Payroll";
		$data["heading"] = "Payroll";
		$data["url_segment"] = "payroll";
		$this->load->view("caregiver/payroll/index",$data);
	}

		public function archive(){
		$data["breadcrumb"] = "Payroll  /  Archive";
		$data["heading"] = "Archive";
		$data["url_segment"] = "archive";
		$this->load->view("caregiver/payroll/archive",$data);
	}

	public function statistics(){
		$data["breadcrumb"] = "Payroll  /  Statistics";
		$data["heading"] = "Statistics";
		$data["url_segment"] = "statistics";
		$this->load->view("caregiver/payroll/statistics",$data);
	}
}	
