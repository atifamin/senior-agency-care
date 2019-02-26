<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications extends CI_controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

		//LoggedIn User ID
		$userSession = $this->session->userdata('isAgencyLoggedIn');
		$this->user_id = $userSession['user_id'];
	}

	public function index() {
		$data["breadcrumb"] = "My Notifications";
		$data["heading"] = "My Notifications";
		$data["url_segment"] = "mynotifications";
		$this->load->view('caregiver/myaccount/index',$data);
	}

}
?>
