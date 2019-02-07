<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caregiver extends CI_Controller {

	public function index()
	{
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$this->load->view("caregiver/index",$data);
	}

	public function add_caregiver(){
		$data["breadcrumb"] = "Add Caregiver";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "add_caregivers";
		$this->load->view("caregiver/add_caregiver",$data);
	}

	public function caregiver_profile(){
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$this->load->view("caregiver/caregiver_profile",$data);
	}

	public function send_invite_to_caregiver(){
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$this->load->view("caregiver/send_invite_to_caregiver",$data);
	}
}