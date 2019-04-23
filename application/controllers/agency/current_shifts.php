<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Current_shifts extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

    	//LoggedIn User ID
		$userSession = $this->session->userdata("isAgencyLoggedIn");
		$this->agency_id = $userSession['user_id'];
		$this->load->model('Client_model');
	}

	public function index() {
		//print_array(date("Y-m-d h:i A"));
		$data["breadcrumb"] = "Current Shifts";
		$data["heading"] = "Current Shifts";
		//$data["url_segment"] = "current shifts";
		$data['client_current_shifts'] = $this->Client_model->client_current_shifts($this->agency_id);
		$data['client_upcomming_shifts'] = $this->Client_model->client_upcomming_shifts($this->agency_id);
		//print_array($data);
		$this->load->view('agency/currentshifts/index',$data);
	}
	public function delete_shift(){
		$post = $this->input->post();
		$this->common_model->delete("client_appointements", array("id"=>$post["id"]));
	}

}
?>