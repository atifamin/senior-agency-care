<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_sheets extends CI_controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

		//LoggedIn User ID
		$userSession = $this->session->userdata('isAgencyLoggedIn');
		$this->agency_id = $userSession['user_id'];
		$this->load->model('Client_model', "client");
	}


	public function index() {
		$data["breadcrumb"] = "Time Sheets";
		$data["heading"] = "Time Sheets";
		$data["url_segment"] = "time sheets";
		$data['clients'] = $this->client->client_timesheet_detail($this->agency_id);
		$this->load->view('agency/timesheets/index',$data);
	}

	public function view_timesheets($client_id){
		$data["breadcrumb"] = "Time Sheets";
		$data["heading"] = "Time Sheets";
		$data["url_segment"] = "time sheets";
		$data['clients'] = $this->common_model->listingResultWhere("id",$client_id,"client");
        if (count($data['clients']) > 0) {
            foreach ($data['clients'] as $key => $value) {
                $data['clients'][$key]->caregivers = $this->client->gettingAssignedCaregivers($value->id);
            }
        }
        //print_array($data['clients']);
		$this->load->view('agency/timesheets/view_timesheets',$data);
	}

	public function invoice(){
		$data["breadcrumb"] = "Time Sheets / Invoice";
		$data["heading"] = "Time Sheets";
		$data["url_segment"] = "time sheets";

		$this->load->view('agency/timesheets/invoice',$data);
	}
}

?>