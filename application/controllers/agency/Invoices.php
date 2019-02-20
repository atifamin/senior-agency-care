<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices extends CI_Controller {
	
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