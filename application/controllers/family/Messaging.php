<?php defined ('BASEPATH') or exit('No direct script access allowed');

class Messaging extends CI_controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isFamilyLoggedIn")){
			redirect("login");
		}
		$this->load->model("Family_model");
		$userSession = $this->session->userdata('isFamilyLoggedIn');
		$this->family_id = $userSession['user_id'];
	}

	public function index() {
		$data["breadcrumb"] = "Messaging";
		$data["heading"] = "Messaging";
		$data["url_segment"] = "messaging";
		$this->load->view('family/messaging/index',$data);
	}
}