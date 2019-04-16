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
	}

	public function calender_view_pdf($client_id){
		//print_array($client_id);
		$data['result'] = $this->common_model->listingRow("id", $client_id, "client_appointements");
		$mpdf = $this->mpdf;
		$mpdf->setBasePath(site_url());
		$html = $this->load->view("pdf/pdf_calender_view.php", $data, true);
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
		
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		exit;
		$file_name = "Calender_view.pdf";
		$file_path = DOC_PATH."/uploads/pdf/".$file_name."";
		fopen($file_path, "w");
		$mpdf->Output($file_path, \Mpdf\Output\Destination::FILE);
		$mpdf->Output($file_name, 'D');
		return $file_path;
	}

}


?>