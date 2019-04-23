<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Current_shifts extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isCaregiverLoggedIn")){
			redirect("caregiver");
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
		if(count($data['shift_detail'])>0){
		$data['client'] = $this->Client_model->getById($data['shift_detail'][0]->client_id);
	}
		//print_array($data);

		//$data['client'] = $this->Client_model->getById($data['shift_detail'][0]->client_id);
		// print_array($data['client']);
		if(count($data['shift_detail'])>0){
			$current_appointment = $data['shift_detail'][0];
			$data['result'] = $this->common_model->listingRow("appointment_id", $current_appointment->id,"caregiver_time_sheets");
		}
		//$data["clock_in"] = $this->Client_model->clockinTimesheets($client_id);
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

	public function clock_in(){
		//print_array($id);
		$post = $this->input->post();
		$post['from'] = date("Y-m-d H:i:s", strtotime($this->input->post("from")));
		$post['created_by'] = $post['caregiver_id'];
		$shift_clock_in = $this->common_model->insertGetIDQuery("caregiver_time_sheets", $post);
		$shift_clock_in['result'] = $this->common_model->listingRow("id",$shift_clock_in,"caregiver_time_sheets");
		//$data['result'] = $this->common_model->listingRow("id",$time_sheet_id,"caregiver_time_sheets");
		// $data['data'] = array(
		// 	"timein"=>json_encode($time_sheet_id),
		// 	"appointments"=>json_encode($appointments)
		// );
		// $this->load->view("caregiver/currentshifts/index",$data);
		// $data['clock_in'] = $this->common_model->listingRow('id',$post['id'],"caregiver_time_sheets");
		//print_array($post);
		//$post = $this->load->view("", $post);
		redirect('caregiver/current_shifts');
	}

	public function clock_out(){
		$appointment_id = $this->input->post("id");

		$to = date("Y-m-d H:i:s", strtotime($this->input->post("outTime")));
		$detail = $this->common_model->listingRow("appointment_id",$appointment_id,"caregiver_time_sheets");
		$difference = $this->common_model->dateDifferanceTwoDates($detail->from, $detail->to);
		//print_array($difference);
		$this->common_model->updateQuery("caregiver_time_sheets", 'id', $detail->id, array(
			"to" => $to,"total_hours" => json_encode($difference)
		));
		return redirect("caregiver/current_shifts");
	}

	public function add_photos(){
		$post = $this->input->post();
		$data = array();
		$data['client_id'] = $post['client_id'];
		$data['agency_id'] = $post['agency_id'];
		$data['title'] = $post["photo_title"];
		$data['created_by'] = $post['agency_id'];
		$data['created_at'] = date('Y-m-d H:i:s');
		$photo_id = $this->common_model->insertGetIDQuery("client_favorite_media", $data);
		if(!empty($_FILES['file']['name'])){
			$client_photo = upload_file($_FILES['file'], "client_photo_music", $photo_id, $FILE_DIRECTORY="./uploads/clients/");
			$image_file = $this->common_model->insertGetIDQuery("media", $client_photo);
		}
		if (!empty($image_file)) {
			$this->common_model->updateQuery("client_favorite_media", "id", $photo_id,array('list_file'=>$image_file));
		}
		$data['client_photo'] = $this->common_model->listingResultWhere("client_id",$post['client_id'],"client_favorite_media");
		redirect('caregiver/current_shifts/index');

	}

	public function add_music(){
		$post = $this->input->post();
		$data = array();
		//print_array($post);
		$data['client_id'] = $post['client_id'];
		$data['agency_id'] = $post['agency_id'];
		$data['created_by'] = $post['agency_id'];
		$data['created_at'] = date('Y-m-d H:i:s');
		//print_array($data);
		$music_id = $this->common_model->insertGetIDQuery("client_favorite_media", $data);
		if(!empty($_FILES['file']['name'])){
			$client_music = upload_file($_FILES['file'], "client_photo_music", $music_id, $FILE_DIRECTORY="./uploads/clients/");
			$music_file = $this->common_model->insertGetIDQuery("media", $client_music);
		}
		if (!empty($music_file)) {
			$this->common_model->updateQuery("client_favorite_media", "id", $music_id,array('list_file'=>$music_file));
		}
		$data['client_music'] = $this->common_model->listingResultWhere("client_id",$post['client_id'],"client_favorite_media");
		redirect('caregiver/current_shifts/index');
	}
	public function delete_shift(){
		$post = $this->input->post();
		print_array($post);
	}

}