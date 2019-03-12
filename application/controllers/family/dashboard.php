<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isFamilyLoggedIn")){
			redirect("login");
		}
		//LoggedIn Caregiver ID
		$sessionData = $this->session->userdata("isFamilyLoggedIn");
		$this->family_id = $sessionData['user_id'];
		//checkIfProfileNotCompleted($this->caregiver_id);
	}


	public function index()
	{
		$data["breadcrumb"] = "Notice Board";
		$data["heading"] = "Notice Board";
		$data["url_segment"] = "notice board";
		$this->load->view("family/dashboard/index",$data);
	}
}