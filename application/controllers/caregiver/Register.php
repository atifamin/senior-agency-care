<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata("isCaregiverLoggedIn")){
			return redirect("caregiver/dashboard");
		}
	}
	
	public function index(){
		if(!isset($_GET['id'])){
			redirect("caregiver");
		}
		$getUrl = $_GET['id'];
		$ifUserExists = $this->common_model->listingRow("register_code",$getUrl,"caregiver");
		if(count($ifUserExists)<=0)
			redirect("caregiver");
		
		$caregiver_id = $ifUserExists->id;
		$this->load->model("Caregiver_model");
		$data['caregiver'] = $this->Caregiver_model->getCaregiverById($caregiver_id);
		$this->load->view("caregiver/register/index", $data);
	}
	
	
}
