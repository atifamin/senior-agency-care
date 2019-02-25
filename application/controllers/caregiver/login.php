<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata("isCaregiverLoggedIn")){
			return redirect("caregiver/dashboard");
		}
	}
	
	public function index(){
		$this->load->view("caregiver/login/index");
	}
	
	public function testing(){
		echo "testing";
	}
}
