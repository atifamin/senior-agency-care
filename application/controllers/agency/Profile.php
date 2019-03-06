<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_controller {

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

	public function index() {
		$data["breadcrumb"] = "My Profile";
		$data["heading"] = "My Profile";
		$data["url_segment"] = "profile";
		$data["profile_detail"] = $this->Agency_model->getAgencyById($this->agency_id);
		$this->load->view('agency/profile/index',$data);
	}
	public function wizard($agency_id){
		//$data['post'] = $this->input->post();
		$data["breadcrumb"] = "Edit Profile";
		$data["heading"] = "Edit Profile";
		$data["url_segment"] = "wizard";
		$data["profile_detail"] = $this->Agency_model->getAgencyById($this->agency_id);
		$data['countries'] = $this->common_model->listingResult("countries");
		$data["states"] = $this->common_model->listingResultWhere("country_id",$data["profile_detail"]->profile->country_id,"states");
		//$data["states"] = $this->Agency_model->loadStatesByCountryId($data["profile_detail"]->profile->country_id);
		$data["cities"] = $this->common_model->listingResultWhere("state_id",$data["profile_detail"]->profile->state_id,"cities");
		$this->load->view("agency/profile/wizard",$data);
	}

	public function loadStatesByCountryId(){

	}

}
?>
