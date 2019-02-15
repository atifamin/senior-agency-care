<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caregiver extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

    	//LoggedIn User ID
		$userSession = $this->session->userdata("isAgencyLoggedIn");
		$this->user_id = $userSession['user_id'];
	}
	
	public function index(){
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$this->load->view("agency/caregiver/index",$data);
	}

	public function add_caregiver(){
		$data["breadcrumb"] = "Add Caregiver";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "add_caregivers";
		$data['countries'] = load_table("countries");
		$this->load->view("agency/caregiver/add_caregiver",$data);
	}
	
	public function load_states(){
		$id = $this->input->post("id");
		$data['result'] = $this->common_model->listingResultWhere("country_id",$id,"states");
		$this->load->view("agency/caregiver/load_states_cities", $data);
	}
	
	public function load_cities(){
		$id = $this->input->post("id");
		$data['result'] = $this->common_model->listingResultWhere("state_id",$id,"cities");
		$this->load->view("agency/caregiver/load_states_cities", $data);
	}
	
	public function add_new_license_form(){
		$data['post'] = $this->input->post();
		$data['file'] = 0;
		if(isset($_FILES["media_license_document"])){
			$data['file'] = $this->upload_license_file($_FILES["media_license_document"]);
		}
		$fromDate = date("Y-m-d");
		$toDate = date("".$data['post']["valid_to_year"]."-".$data['post']["valid_to_month"]."-d");
		$expiry = $this->common_model->dateDifferanceTwoDates($fromDate, $toDate);
		$data['expiryDays'] = $expiry["days"];
		$this->load->view("agency/caregiver/add_new_license_form", $data);
	}
	
	public function upload_license_file($FILE){
		$name = $FILE["name"];
		$media_id = 0;
		$fname=time().'_'.basename($FILE["name"]);
		$fname = str_replace(" ","_",$fname);
		$fname = str_replace("%","_",$fname);
		$name_ext = explode(".", basename($FILE["name"]));
		$name_ext = end($name_ext);
		$uploaddir = "./uploads/caregiver/";
		if (!file_exists($uploaddir)) {
			mkdir($uploaddir, 0777, true);
		}
		$uploadfile = $uploaddir.$fname;
		if (move_uploaded_file($FILE['tmp_name'], $uploadfile)){
			$type = $FILE["type"];
			$size = $FILE["size"];
			$data["name"] = $name;
			$data["file_name"] = $fname;
			$data["file_type"] = $type;
			$data["file_path"] = str_replace(".", "", $uploaddir);
			$data["full_path"] = str_replace(".", "", $uploaddir).$fname;
			$data["file_extension"] = pathinfo($uploadfile, PATHINFO_EXTENSION);
			$data["file_size"] = $size;
			$data["created_at"] = date('Y-m-d H:i:s');
		}
		return $data;
	}
	
	public function delete_license_doc(){
		$post = $this->input->post();
		$imgData = $post["imageD"];
		$path = DOC_PATH."/uploads/caregiver/".$imgData['file_name'];
		if(file_exists($path)){
			unlink($path);
		}
	}

	public function caregiver_profile(){
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$this->load->view("agency/caregiver/caregiver_profile",$data);
	}

	public function send_invite_to_caregiver(){
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$this->load->view("agency/caregiver/send_invite_to_caregiver",$data);
	}
}