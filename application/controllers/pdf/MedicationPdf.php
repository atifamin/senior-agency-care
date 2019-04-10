<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MedicationPdf extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("pdf/MedicationPdf_model", "pdf");
	}

	public function export_medication_to_pdf($id){
		$file_path = $this->pdf->export_medication_to_pdf($id);
		if($this->send_email($file_path))
			unlink($file_path);
	}
	
	public function send_email($file_path){
		return true;
	}
}