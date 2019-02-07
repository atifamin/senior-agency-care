<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	public function index()
	{
		$data["breadcrumb"] = "Clients";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "clients";
		$this->load->view("agency/clients/index",$data);
	}

	public function add_client(){
		$data["breadcrumb"] = "Add Client";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "add_caregivers";
		$this->load->view("agency/clients/add_client",$data);
	}
}