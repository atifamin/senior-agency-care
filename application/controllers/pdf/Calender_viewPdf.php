<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calender_viewPdf extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("pdf/CalenderPdf_View_model", "pdf");
	}

	public function calender_view_pdf($client_id){
		//$as ="dsadasda";
		//print_array($client_id);
		//echo "string"; exit;
		$file_path = $this->pdf->calender_view_pdf($client_id);
		if($this->send_email($file_path))
			unlink($file_path);
	}
	
	public function send_email($file_path){
		return true;
	}
	

}