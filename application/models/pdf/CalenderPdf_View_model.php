<?php 
/**
 * 
 */
class CalenderPdf_View_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		require_once 'vendor/autoload.php';
		$this->mpdf = new \Mpdf\Mpdf([
			'default_font_size' => 10,
			'default_font' => 'chelvetica',
			'format' => 'A4-L',
          	'orientation' => 'L'
		]);
		$this->load->model(array("Client_model", "Schedule_model"));
		$this->load->model("Email_model");
	}

	public function calendar_pdf_view($post){
		$date = date("Y-m-d", strtotime($post["date"]));
		$firstDateOfWeek = date("Y-m-d", strtotime('monday this week', strtotime($date)));
		$lastDateOfWeek = date("Y-m-d", strtotime('sunday this week', strtotime($date)));
		$data['client'] = $this->Client_model->getById($post['client_id']);
		$data["client_appointements"] = $this->Schedule_model->client_app_by_daterange($firstDateOfWeek, $lastDateOfWeek, $post['client_id']);
		$data["rawDates"] = $this->common_model->getDatesFromRange($firstDateOfWeek, $lastDateOfWeek);
		$data["caregivers"] = $this->Client_model->gettingAssignedCaregivers($post['client_id']);
		$data["client_detail"] = $this->common_model->listingRow("id", $post["client_id"], "client");
		$data['first_date'] = $firstDateOfWeek;
		$data['last_date'] = $lastDateOfWeek;
		$mpdf = $this->mpdf;
		$mpdf->setBasePath(site_url());
		$html = $this->load->view("pdf/download_pdf_view.php", $data, true);
		//$html = "somthing";
		$mpdf->SetHTMLHeader('
		<div style="text-align: right;margin:15px;">
			<hr style="padding:0px;margin:0px;"/>
		</div>');
		$mpdf->SetHTMLFooter('
		<hr/>');
		
		
		$file_name = "Appointments.pdf";
		$file_path = DOC_PATH."/uploads/pdf/".$file_name."";
		$mpdf->WriteHTML($html);
		
		if($post["calendar_pdf_view"]=="download"){
			$mpdf->Output();
			exit;
			fopen($file_path, "w");
			$mpdf->Output($file_path, \Mpdf\Output\Destination::FILE);
			$mpdf->Output($file_name, 'D');
		}
		
		if($post["calendar_pdf_view"]=="email"){
			$this->Email_model->send_calendar_view_pdf($post, $data, $file_path);
			echo "<script>window.close();</script>";
		}

		if($post["calendar_pdf_view"]=="print"){
			$mpdf->SetJS('this.print();');
			$mpdf->Output();
		}
		
		return $file_path;
	}

}


?>