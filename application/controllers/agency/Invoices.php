<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

    	//LoggedIn User ID
		$userSession = $this->session->userdata("isAgencyLoggedIn");
		$this->agency_id = $userSession['user_id'];
	}
	
	public function index(){
		$data["breadcrumb"] = "Invoices";
		$data["heading"] = "Invoices";
		$data["url_segment"] = "invoices";
		$this->load->view("agency/invoices/index",$data);
	}

	public function archive(){
		$data["breadcrumb"] = "Invoices  /  Archive";
		$data["heading"] = "Archive";
		$data["url_segment"] = "archive";
		$this->load->view("agency/invoices/archive",$data);
	}
}