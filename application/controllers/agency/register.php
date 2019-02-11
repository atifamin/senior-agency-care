<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index(){
		$data['countries'] = load_table("countries");
		//print_array(load_table("personal_care_services"));
		/*$data['personal_care_services'] = $this->common_model->listingResult("personal_care_services");
		$data['housekeeping_services'] = $this->common_model->listingResult("housekeeping_services");
		$data['sunrise_sunset_services'] = $this->common_model->listingResult("sunrise_sunset_services");
		$data['dementia_alzheimer_assistance'] = $this->common_model->listingResult("dementia_alzheimer_assistance");
		$data['personal_assistance_services'] = $this->common_model->listingResult("personal_assistance_services");
		$data['post_surgery_maternity_services'] = $this->common_model->listingResult("post_surgery_maternity_services");
		$data['respite_services'] = $this->common_model->listingResult("respite_services");
		$data['other_services'] = $this->common_model->listingResult("other_services");*/
		$this->load->view("agency/register/index", $data);
	}
	
	public function load_states(){
		$id = $this->input->post("id");
		$data['result'] = $this->common_model->listingResultWhere("country_id",$id,"states");
		$this->load->view("agency/register/load_states_cities", $data);
	}
	
	public function load_cities(){
		$id = $this->input->post("id");
		$data['result'] = $this->common_model->listingResultWhere("state_id",$id,"cities");
		$this->load->view("agency/register/load_states_cities", $data);
	}
	
	public function add_new_license_form(){
		$data['post'] = $this->input->post();
		$data['file'] = $_FILES["media_license_document"];
		$fromDate = date("Y-m-d");
		//$fromDate = date("30/".$data['post']["valid_to_month"]."/".$data['post']["valid_to_year"]."");
		$toDate = date("".$data['post']["valid_to_year"]."-".$data['post']["valid_to_month"]."-d");
		$expiry = $this->common_model->dateDifferanceTwoDates($fromDate, $toDate);
		$data['expiryDays'] = $expiry["days"];
		$this->load->view("agency/register/add_new_license_form", $data);
	}
	
	public function register_agency(){
		$post = $this->input->post();
		//print_array($post);
		//Adding agency basic data into agency table
		$agency['company_name'] = $post['company_name'];
		$agency['position'] = $post['position'];
		$agency['full_name'] = $post['full_name'];
		$agency['email_address'] = $post['email_address'];
		$agency['phone_number'] = $post['phone_number'];
		$agency['password'] = "";
		$agency['created_at'] = date('Y-m-d H:i:s');
		$agency['updated_at'] = date('Y-m-d H:i:s');
		$agency_id = $this->common_model->insertGetIDQuery("agency", $agency);
		
		//Adding advance data into agency profile table
		$agency_profile['agency_id'] = $agency_id;
		$agency_profile['company_formed_month'] = $post['company_formed_month'];
		$agency_profile['company_formed_year'] = $post['company_formed_year'];
		$agency_profile['company_formed_month'] = $post['company_formed_month'];
		$agency_profile['story'] = $post['story'];
		$agency_profile['country_id'] = $post['country_id'];
		$agency_profile['state_id'] = $post['state_id'];
		$agency_profile['city_id'] = $post['city_id'];
		$agency_profile['zipcode'] = $post['zipcode'];
		$agency_profile['personal_care_services'] = "";
		if(isset($post['personal_care_services']))
			$agency_profile['personal_care_services'] = json_encode($post['personal_care_services']);
		
		$agency_profile['housekeeping_services'] = "";
		if(isset($post['housekeeping_services']))
			$agency_profile['housekeeping_services'] = json_encode($post['housekeeping_services']);
		
		$agency_profile['sunrise_sunset_services'] = "";
		if(isset($post['sunrise_sunset_services']))
			$agency_profile['sunrise_sunset_services'] = json_encode($post['sunrise_sunset_services']);
		
		$agency_profile['dementia_alzheimer_assistance'] = "";
		if(isset($post['dementia_alzheimer_assistance']))
			$agency_profile['dementia_alzheimer_assistance'] = json_encode($post['dementia_alzheimer_assistance']);
		
		$agency_profile['personal_assistance_services'] = "";
		if(isset($post['personal_assistance_services']))
			$agency_profile['personal_assistance_services'] = json_encode($post['personal_assistance_services']);
		
		$agency_profile['post_surgery_maternity_services'] = "";
		if(isset($post['post_surgery_maternity_services']))
			$agency_profile['post_surgery_maternity_services'] = json_encode($post['post_surgery_maternity_services']);
		
		$agency_profile['respite_services'] = "";
		if(isset($post['respite_services']))
			$agency_profile['respite_services'] = json_encode($post['respite_services']);
		
		$agency_profile['other_services'] = "";
		if(isset($post['other_services']))
			$agency_profile['other_services'] = json_encode($post['other_services']);
		
		$agency_profile_id = $this->common_model->insertGetIDQuery("agency_profile", $agency_profile);
		
		//uploading and updating media company logo
		if($_FILES["media_company_logo"])
			$this->updating_media_company_logo($_FILES["media_company_logo"], "agency_profile", $agency_profile_id);
		
		//uploading and updating media profile picture
		if($_FILES["media_profile_picture"])
			$this->updating_media_profile_picture($_FILES["media_profile_picture"], "agency_profile", $agency_profile_id);
		
		
		//Adding agency license
		if(isset($post['state_license'])){
			foreach($post['state_license'] as $key=>$val){
				$agency_license['agency_id'] = $agency_id;
				$agency_license['state_license'] = $post['state_license'][$key];
				$agency_license['license_recieved_country'] = $post['license_recieved_country'][$key];
				$agency_license['valid_from_month'] = $post['valid_from_month'][$key];
				$agency_license['valid_from_year'] = $post['valid_from_year'][$key];
				$agency_license['valid_to_month'] = $post['valid_to_month'][$key];
				$agency_license['valid_to_year'] = $post['valid_to_year'][$key];
				$agency_license['created_at'] = date('Y-m-d H:i:s');
				$agency_license['updated_at'] = date('Y-m-d H:i:s');
				$this->common_model->insertGetIDQuery("agency_license", $agency_license);
			}
		}
		
		
		
		/*$agency_profile['media_company_logo'] = 0;
		if($_FILES["media_company_logo"])
			$agency_profile['media_company_logo'] = $this->upload_files($_FILES["media_company_logo"], "");
			
		$agency_profile['media_license_document'] = 0;
		if($_FILES["media_license_document"])
			$agency_profile['media_license_document'] = $this->upload_files($_FILES["media_license_document"]);
			
			
		$media_company_logo = $_FILES["media_company_logo"];
		$media_license_document = $_FILES["media_license_document"];
		print_array($post);*/
	}
	
	public function updating_media_company_logo($FILE, $module, $module_id){
		$data['media_company_logo'] = $this->upload_files($FILE, $module, $module_id);
		$this->common_model->updateQuery("agency_profile", "id", $module_id, $data);
	}
	
	public function updating_media_profile_picture($FILE, $module, $module_id){
		$data['media_profile_picture'] = $this->upload_files($FILE, $module, $module_id);
		$this->common_model->updateQuery("agency_profile", "id", $module_id, $data);
	}
	
	public function upload_files($FILE, $module, $module_id){
		$name = $FILE["name"];
		$media_id = 0;
		$fname=time().'_'.basename($FILE["name"]);
		$fname = str_replace(" ","_",$fname);
		$fname = str_replace("%","_",$fname);
		$name_ext = explode(".", basename($FILE["name"]));
		$name_ext = end($name_ext);
		$uploaddir = "./uploads/agency/";
		if (!file_exists($uploaddir)) {
			mkdir($uploaddir, 0777, true);
		}
		$uploadfile = $uploaddir.$fname;
		if (move_uploaded_file($FILE['tmp_name'], $uploadfile)){
			$type = $FILE["type"];
			$size = $FILE["size"];
			$data["module"] = $module;
			$data["module_id"] = $module_id;
			$data["name"] = $name;
			$data["file_name"] = $fname;
			$data["file_type"] = $type;
			$data["file_path"] = str_replace(".", "", $uploaddir);
			$data["full_path"] = str_replace(".", "", $uploaddir).$fname;
			$data["file_extension"] = pathinfo($uploadfile, PATHINFO_EXTENSION);
			$data["file_size"] = $size;
			$data["created_at"] = date('Y-m-d H:i:s');
			$media_id = $this->common_model->insertGetIDQuery("media", $data);
		}
		return $media_id;
	}
}
