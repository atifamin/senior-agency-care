<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata("isFamilyLoggedIn")){
			redirect("family/dashboard");
		}
		$this->load->model("Family_model");
		$userSession = $this->session->userdata('isFamilyLoggedIn');
		$this->family_id = $userSession['user_id'];
	}
	
	// public function __construct(){
	// 	parent::__construct();
	// 	if($this->session->userdata("isFamilyLoggedIn")){
	// 		return redirect("family/dashboard");
	// 	}
	// }
	
	public function index(){
		$this->load->view("family/login/index");
	}
	
	public function testing(){
		echo "testing";
	}
}