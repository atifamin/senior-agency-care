<?php defined ('BASEPATH') or exit('No direct script access allowed');

class Messaging extends CI_controller {

	public function index() {
		$data["breadcrumb"] = "Messaging";
		$data["heading"] = "Messaging";
		$data["url_segment"] = "messaging";
		$this->load->view('family/messaging/index',$data);
	}
}