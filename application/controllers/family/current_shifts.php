<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Current_shifts extends CI_Controller {
	
	public function index()
	{
		$data["breadcrumb"] = "Notice Board";
		$data["heading"] = "Notice Board";
		$data["url_segment"] = "notice board";
		$this->load->view("family/currentshifts/index",$data);
	}
}