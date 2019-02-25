<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messaging extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

    	//LoggedIn User ID
		$userSession = $this->session->userdata("isAgencyLoggedIn");
		$this->user_id = $userSession['user_id'];
	}
	
	public function index(){
		$data["breadcrumb"] = "Messages";
		$data["heading"] = "Messages";
		$data["url_segment"] = "messages";
		$this->load->view("agency/messages/index",$data);
	}
}