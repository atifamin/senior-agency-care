<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index(){
		$data['countries'] = load_table("countries");
		//print_array(load_table("personal_care_services"));
		/*$data['personal_care_services'] = $this->common_model->listingResult("personal_care_services");
		$data['housekeeping_services'] = $this->common_model->listingResult("housekeeping_services");
		$data['sunrise_sunset_services'] = $this->common_model->listingResult("sunrise_sunset_services");
		$data['dementia_alzheimer_assistance'] = $this->common_model->listingResult("dementia_alzheimer_assistance");
		$data['personal_assistance_services'] = $this->common_model->listingResult("personal_assistance_services");
		$data['post_surgery_maternity_services'] = $this->common_model->listingResult("post_surgery_maternity_services");
		$data['respite_services'] = $this->common_model->listingResult("respite_services");
		$data['other_services'] = $this->common_model->listingResult("other_services");*/
		$this->load->view("agency/register/index", $data);
	}
	
	public function load_states(){
		$id = $this->input->post("id");
		$data['result'] = $this->common_model->listingResultWhere("country_id",$id,"states");
		$this->load->view("agency/register/load_states_cities", $data);
	}
	
	public function load_cities(){
		$id = $this->input->post("id");
		$data['result'] = $this->common_model->listingResultWhere("state_id",$id,"cities");
		$this->load->view("agency/register/load_states_cities", $data);
	}
	
	public function add_new_license_form(){
		$data['post'] = $this->input->post();
		$data['file'] = $_FILES["media_license_document"];
		$this->load->view("agency/register/add_new_license_form", $data);
	}
}
