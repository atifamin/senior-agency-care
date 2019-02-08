<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scheduling extends CI_Controller {

	public function index()
	{
		$data["breadcrumb"] = "Scheduling";
		$data["heading"] = "Client Scheduling";
		$data["url_segment"] = "Scheduling";
		$this->load->view("agency/scheduling/index",$data);
	}

	public function add_caregiver(){
		$data["breadcrumb"] = "Add Caregiver";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "add_caregivers";
		$this->load->view("agency/caregiver/add_caregiver",$data);
	}

	public function caregiver_profile(){
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$this->load->view("agency/caregiver/caregiver_profile",$data);
	}

	public function send_invite_to_caregiver(){
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$this->load->view("agency/caregiver/send_invite_to_caregiver",$data);
	}
}