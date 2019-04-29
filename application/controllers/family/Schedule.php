<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isFamilyLoggedIn")){
			redirect("login");
		}
		$this->load->model("Family_model");
		$userSession = $this->session->userdata('isFamilyLoggedIn');
		$this->family_id = $userSession['user_id'];
	}
	
	public function index(){

		$data["breadcrumb"] = "Schedule";
		$data["heading"] = "Schedule";
		$data["url_segment"] = "schedule";
	}
}