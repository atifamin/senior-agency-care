<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calender_viewPdf extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("pdf/CalenderPdf_View_model", "pdf");
	}

	public function calender_view_pdf(){
		$post = $this->input->post();
		if($post["calendar_pdf_view"]=="download")
			$this->download_pdf_view($post);

		if($post["calendar_pdf_view"]=="email")
			$this->email_pdf_view($post);

		if($post["calendar_pdf_view"]=="print")
			$this->print_pdf_view($post);



		//print_array($post);
		//$as ="dsadasda";
		//print_array($client_id);
		//echo "string"; exit;
		// $file_path = $this->pdf->calender_view_pdf($client_id);
		// if($this->send_email($file_path))
		// 	unlink($file_path);
	}

	public function calendar_pdf_view(){
		$post = $this->input->post();
		$file_path = $this->pdf->calendar_pdf_view($post);
	}

	// public function send_email($file_path){
	// 	return true;
	// }
	

}