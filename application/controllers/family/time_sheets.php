<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_sheets extends CI_Controller {
	
	public function index()
	{
		$data["breadcrumb"] = "Notice Board";
		$data["heading"] = "Notice Board";
		$data["url_segment"] = "notice board";
		$this->load->view("family/timesheets/index",$data);
	}
	public function view_invoice()
	{
		$data["breadcrumb"] = "Notice Board";
		$data["heading"] = "Notice Board";
		$data["url_segment"] = "notice board";
		$this->load->view("family/timesheets/view_invoice",$data);

	}
}