<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Current_shifts extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isCaregiverLoggedIn")){
			redirect("login");
		}

		//LoggedIn Caregiver ID
		$sessionData = $this->session->userdata("isCaregiverLoggedIn");
		$this->caregiver_id = $sessionData['user_id'];
		$this->load->model(array('Caregiver_model',"Schedule_model"));
	}
	
	public function index(){
		$data["breadcrumb"] = "Notice Board";
		$data["heading"] = "Notice Board";
		$data["url_segment"] = "notice board";
		$data['shift_detail'] = $this->Caregiver_model->caregiver_shift_detail($this->caregiver_id);
		// $client_appointements = $this->common_model->listingRow("id",$this->caregiver_id,"client_appointements");
		// $client_id = $client_appointements->client_id;
		// $agency_id = $client_appointements->agency_id;
		// //print_array($agency_id);
		// $data['client'] = $this->common_model->listingRow("id",$client_id,"client");
 	// 	$data['client_bio'] = $this->common_model->listingRow("client_id",$client_id,"client_bio");
		$this->load->view('caregiver/currentshifts/index',$data);
	}
	// public function client_bio_form(){
	// 	$post = $this->input->post();
	// 	$data = $this->Schedule_model->client_bio_form($post);
	// 	$this->load->view("/caregiver/currentshifts/inc/client_bio/view",$data);
	// }
	// public function delete_client_bio(){
	// 	$id = $this->input->post('id');
	// 	print_array($id);
	// 	$data = $this->Schedule_model->client_bio_form($id);
	// 	$this->load->view("/caregiver/currentshifts/inc/client_bio/view",$data);
	// }
	
}