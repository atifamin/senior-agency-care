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

		$data["client_appointements"] = $this->Schedule_model->client_app_by_daterange($firstDateOfWeek, $lastDateOfWeek, $post['client_id']);
		$data["rawDates"] = $this->common_model->getDatesFromRange($firstDateOfWeek, $lastDateOfWeek);
		$data["caregivers"] = $this->Client_model->gettingAssignedCaregivers($post['client_id']);
		$data["client_detail"] = $this->common_model->listingRow("id", $post["client_id"], "client");
		
		$mpdf = $this->mpdf;
		$mpdf->setBasePath(site_url());
		$html = $this->load->view("pdf/download_pdf_view.php", $data, true);
		//$html = "somthing";
		$mpdf->SetHTMLHeader('
		<div style="text-align: right;margin:15px;">
			<hr style="padding:0px;margin:0px;"/>
			<p style="text-align: right;padding:0px;margin:0px;">Reproduced on:&nbsp;&nbsp;&nbsp;&nbsp;'.date("F d, Y H:i").' hrs GMT</p>
		</div>');
		$mpdf->SetHTMLFooter('
		<hr/>
		<table width="100%">
			<tr>
				<td width="33%">{DATE F d, Y H:i}</td>
				<td width="33%" align="center">Page {PAGENO}/{nbpg}</td>
				<td width="33%" style="text-align: right;">Project Meeting Agenda- </td>
			</tr>
		</table>');

		$file_name = $data["client_detail"]->first_name." ".$data["client_detail"]->first_name."'s Appointments - (".$firstDateOfWeek." to ".$lastDateOfWeek.").pdf";
		$file_path = DOC_PATH."/uploads/pdf/".$file_name."";


		if($post["calendar_pdf_view"]=="download"){
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
			$mpdf->WriteHTML($html);
			$mpdf->Output();
		}
		return $file_path;
	}

}


?>