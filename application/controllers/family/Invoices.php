<?php defined ('BASEPATH') or exit('No direct script access allowed');

class Invoices extends CI_controller{

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isFamilyLoggedIn")){
			redirect("login");
		}
		$this->load->model("Family_model");
		$userSession = $this->session->userdata('isFamilyLoggedIn');
		$this->family_id = $userSession['user_id'];
	}

	public function index() {
		$data["breadcrumb"] = "Invoices";
		$data["heading"] = "Invoices";
		$data["url_segment"] = "invoices";
		$this->load->view("family/invoices/index",$data);
	}

	public function archive() {
		$data['breadcrumb'] = "Invoices / Archive";
		$data['heading'] = "Archive";
		$data['url_segment'] = "archive";
		$this->load->view("family/invoices/archive",$data);
	}

	public function statistics() {
		$data["breadcrumb"] = "Invoices / Statistics";
		$data["heading"] = "Statistics";
		$data["url_segment"] = "statistics";
		$this->load->view("family/invoices/statistics",$data);
	}
}