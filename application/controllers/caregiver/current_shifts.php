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
		$this->load->model(array('Caregiver_model',"Schedule_model","Client_model"));
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
		$this->load->view("caregiver/currentshifts/inc/medication_list/edit_medication", $data);
	}
	public function update_medication_list(){
		$post = $this->input->post();
		$data = $this->Schedule_model->update_medication_list($post);
		$this->load->view("agency/scheduling/inc/medication_list/list_view",$data);
	}
	public function add_appointment_calender(){
		$post = $this->input->post();
		$data = $this->Schedule_model->add_appointment_calender($post);
		redirect('caregiver/current_shifts/index');
	}
	public function delete_appointment_calender(){
		$appointment_id = $this->input->post('id');
		$this->Schedule_model->delete_appointment_calender($appointment_id);
	}
	public function edit_appointment_calender(){
		$appointment_id = $this->input->post('id');
		$data = $this->Schedule_model->edit_appointment_calender($appointment_id);
		$this->load->view('caregiver/currentshifts/inc/appointment_calender/edit_appointment',$data);
	}
	public function update_appointment_calender(){
		$post = $this->input->post();
		$data = $this->Schedule_model->update_appointment_calender($post);
		$this->load->view('caregiver/currentshifts/inc/appointment_calender/list_view_appointment',$data);
	}
	public function add_client_dietry_needs(){
		$post = $this->input->post();
		//print_array($post);
		$data = $this->Schedule_model->add_client_dietry_needs($post);
		redirect('caregiver/current_shifts/index');
	}
	public function client_bio_form(){
		$post = $this->input->post();
		//print_array($post);
		$data = $this->Schedule_model->client_bio_form($post);
		redirect('caregiver/current_shifts/index');
		//$this->load->view("/agency/scheduling/inc/client_bio/view",$data);
	}
	public function delete_client_bio(){
		$id = $this->input->post('id');
		//print_array($id);
		$data = $this->Schedule_model->delete_client_bio($id);
		$this->load->view("/caregiver/currentshifts/inc/client_bio/view",$data);
	}
	public function add_vital_report(){
		$post = $this->input->post();
		$data = $this->Schedule_model->add_vital_report($post);
		redirect('caregiver/current_shifts/index');
	}

	public function edit_vital_reports(){
		$vitalReportId = $this->input->post("id");
		$data = $this->Schedule_model->edit_vital_reports($vitalReportId);
		$this->load->view("caregiver/currentshifts/inc/client_vitals/edit_vital_reports", $data);
	}

	public function delete_vital_reports(){
		$vitalReportId = $this->input->post('id');
		$this->Schedule_model->delete_vital_reports($vitalReportId);
	}

	public function update_vital_reports(){
		$post = $this->input->post();
		$data = $this->Schedule_model->update_vital_reports($post);
	    $this->load->view("caregiver/currentshifts/inc/client_vitals/list_view", $data);
	}

	public function add_new_shopping(){
		$post = $this->input->post();
		//print_array($post);
		$detail = $this->Schedule_model->add_new_shopping($post);
		redirect('caregiver/current_shifts/index');
	}

	public function delete_shopping(){
		$shopping_id = $this->input->post('id');
		$detail = $this->Schedule_model->delete_shopping($shopping_id);
	}

	public function edit_shopping(){
		$shopping_id = $this->input->post('id');
		$data = $this->Schedule_model->edit_shopping($shopping_id);
		//print_array($data);
		$this->load->view("caregiver/currentshifts/inc/shopping_list/edit_shopping",$data);	
	}

	public function update_shopping(){
		$post = $this->input->post();
		//print_array($post);
		$data = $this->Schedule_model->update_shopping($post);
 		$this->load->view("caregiver/currentshifts/inc/shopping_list/list_view",$data);
	}

	
}