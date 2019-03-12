<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata("isFamilyLoggedIn")){
			return redirect("family/dashboard");
		}
	}

	public function index(){
		if(!isset($_GET['id'])){
			redirect("family");
		}
		$getUrl = $_GET['id'];
		$ifUserExists = $this->common_model->listingRow("register_code",$getUrl,"client_family");
		if(count($ifUserExists)<=0)
			redirect("family");
		//print_array($ifUserExists);
		$family_id = $ifUserExists->id;
		$this->load->model("Family_model");
		$data['family'] = $this->Family_model->getFamily($family_id);
		//print_array($data['family']);
		$this->load->view("family/register/index",$data);
	}

}