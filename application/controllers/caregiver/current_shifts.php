<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Current_shifts extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isCaregiverLoggedIn")){
			redirect("login");
		}

		//LoggedIn Caregiver ID
		$sessionData = $this->session->userdata("isCaregiverLoggedIn");
		$this->caregiver_id = $sessionData['user_id'];
		$this->load->model('Caregiver_model');
	}
	
	public function index(){
		$data["breadcrumb"] = "Notice Board";
		$data["heading"] = "Notice Board";
		$data["url_segment"] = "notice board";
		//$data['caregiver_id'] = $this->caregiver_id;
		$data['shift_detail'] = $this->Caregiver_model->shift_detail($this->caregiver_id);
		$this->load->view('caregiver/currentshifts/index',$data);
	}
	
}