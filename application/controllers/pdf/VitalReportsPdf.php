<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VitalReportsPdf extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("pdf/VitalReportsPdf_model", "pdf");
	}

	public function export_vital_reports_to_pdf($id){
		//print_array($id);
		$file_path = $this->pdf->export_vital_reports_to_pdf($id);
		if($this->send_email($file_path))
			unlink($file_path);
	}
	
	public function send_email($file_path){
		return true;
	}
}