<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_sheets extends CI_controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

		//LoggedIn User ID
		$userSession = $this->session->userdata('isAgencyLoggedIn');
		$this->user_id = $userSession['user_id'];
	}

	public function index() {
		$data["breadcrumb"] = "Time Sheets";
		$data["heading"] = "Time Sheets";
		$data["url_segment"] = "time sheets";
		$this->load->view('agency/timesheets/index',$data);
	}

	public function view_timesheets(){
		$data["breadcrumb"] = "Time Sheets";
		$data["heading"] = "Time Sheets";
		$data["url_segment"] = "time sheets";
		$this->load->view('agency/timesheets/view_timesheets',$data);
	}

	public function invoice(){
		$data["breadcrumb"] = "Time Sheets / Invoice";
		$data["heading"] = "Time Sheets";
		$data["url_segment"] = "time sheets";
		$this->load->view('agency/timesheets/invoice',$data);
	}
}

?>