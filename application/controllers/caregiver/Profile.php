<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isCaregiverLoggedIn")){
			redirect("caregiver");
		}

		//LoggedIn Caregiver ID
		$sessionData = $this->session->userdata("isCaregiverLoggedIn");
		$this->caregiver_id = $sessionData['user_id'];
		$this->load->model("Caregiver_model");
	}
	
	public function index(){
		checkIfProfileNotCompleted($this->caregiver_id);
		$data["breadcrumb"] = "Profile";
		$data["heading"] = "Profile";
		$data["url_segment"] = "profile";
		$this->load->view("caregiver/profile/index",$data);
	}
	
	public function wizard($caregiver_id){
		$data["breadcrumb"] = "Edit Profile";
		$data["heading"] = "Edit Profile";
		$data["url_segment"] = "wizard";
		$data["caregiver"] = $this->Caregiver_model->getCaregiverById($caregiver_id);
		$data['states'] = $this->common_model->listingResultWhere("country_id",$data["caregiver"]->country_id,"states");
		//$data['caregiver_license'] = $this->common_model->listingRow('caregiver_id',$caregiver_id,'caregiver_license');
		$this->load->view("caregiver/profile/wizard",$data);
	}
}	
