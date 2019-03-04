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
	}

	public function index() {
		$data["breadcrumb"] = "Current Shifts";
		$data["heading"] = "Current Shifts";
		//$data["url_segment"] = "current shifts";
		$this->load->view('agency/currentshifts/index',$data);
	}

}
?>