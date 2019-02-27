<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isCaregiverLoggedIn")){
			redirect("login");
		}

		//LoggedIn Caregiver ID
		$sessionData = $this->session->userdata("isCaregiverLoggedIn");
		$this->caregiver_id = $sessionData['user_id'];
	}
	
	public function index(){
		$data["breadcrumb"] = "Charts";
		$data["heading"] = "Charts";
		$data["url_segment"] = "charts";
		$this->load->view("caregiver/charts/index",$data);
	}
}