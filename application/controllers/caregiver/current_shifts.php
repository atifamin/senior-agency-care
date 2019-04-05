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
		$this->load->view('caregiver/currentshifts/index',$data);
	}
	public function add_new_medication(){
		$post = $this->input->post();
		$data = $this->Schedule_model->add_new_medication($post);
		redirect('caregiver/current_shifts/index');
	}
	public function delete_medication(){
		$medicationId = $this->input->post('id');
		$this->Schedule_model->delete_medication($medicationId);
	}
	public function edit_medication(){
		$medicationId = $this->input->post("id");
		$data = $this->Schedule_model->edit_medication($medicationId);
		$this->load->view("agency/scheduling/inc/medication_list/edit_medication", $data);
	}

	public function add_vital_report(){
		$post = $this->input->post();
		//print_array($post);
		$data = $this->Schedule_model->add_vital_report($post);
		redirect('caregiver/current_shifts/index');
	}

	
}