<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isCaregiverLoggedIn")){
			redirect("caregiver");
		}

		//LoggedIn Caregiver ID
		$sessionData = $this->session->userdata("isCaregiverLoggedIn");
		$this->caregiver_id = $sessionData['user_id'];
	}

	public function notifications() {
		$data["breadcrumb"] = "My Notifications";
		$data["heading"] = "My Notifications";
		$data["url_segment"] = "mynotifications";
		$this->load->view('caregiver/account/notifications',$data);
	}

}
?>
