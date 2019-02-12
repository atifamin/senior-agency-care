<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata("isAgencyLoggedIn")){
			redirect("agency/dashboard");
		}
	}

	public function index(){
		$this->load->view("agency/login/index");
	}
}
