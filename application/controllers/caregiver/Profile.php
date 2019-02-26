<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isCaregiverLoggedIn")){
			redirect("login");
		}

		//LoggedIn Caregiver ID
		$sessionData = $this->session->userdata("isCaregiverLoggedIn");
		$this->caregiver_id = $sessionData['user_id'];
		$this->load->model("Caregiver_model");
	}
	
	public function index(){
		$data["breadcrumb"] = "Profile";
		$data["heading"] = "Profile";
		$data["url_segment"] = "profile";
		$this->load->view("caregiver/profile/index",$data);
	}
	
	public function wizard($caregiver_id){
		$data["breadcrumb"] = "Edit Profile";
		$data["heading"] = "Edit Profile";
		$data["url_segment"] = "wizard";
		$this->load->view("caregiver/profile/wizard",$data);
	}
}	
