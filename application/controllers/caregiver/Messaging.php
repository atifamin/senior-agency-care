<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messaging extends CI_Controller {

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
		$data["breadcrumb"] = "Messages";
		$data["heading"] = "Messages";
		$data["url_segment"] = "messages";
		$this->load->view("caregiver/messaging/index",$data);
	}
}