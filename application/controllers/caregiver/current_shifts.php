<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Current_shifts extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isCaregiverLoggedIn")){
			return redirect("caregiver/login");
		}
	}
	
	public function index(){
		$data["breadcrumb"] = "Notice Board";
		$data["heading"] = "Notice Board";
		$data["url_segment"] = "notice board";
		$this->load->view('caregiver/currentshifts/index',$data);
	}
}