<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {
	public function index(){

		$data["breadcrumb"] = "Schedule";
		$data["heading"] = "Schedule";
		$data["url_segment"] = "schedule";
	}
}