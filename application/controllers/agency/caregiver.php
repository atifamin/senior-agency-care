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
		$this->load->model("Caregiver_model");
	}
	
	public function index(){
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$data['result'] = $this->Caregiver_model->getAll();
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
			$data['file'] = upload_file($_FILES["media_license_document"], "caregiver_license", 0);
		}
		$fromDate = date("Y-m-d");
		$toDate = date("".$data['post']["valid_to_year"]."-".$data['post']["valid_to_month"]."-d");
		$expiry = $this->common_model->dateDifferanceTwoDates($fromDate, $toDate);
		$data['expiryDays'] = $expiry["days"];
		$this->load->view("agency/caregiver/add_new_license_form", $data);
	}
	
	public function register_caregiver(){
		$post = $this->input->post();
		$result = 'success';
		//checking if user email is already exists
		$checkUserExists = $this->common_model->listingRow("email", $post['email'], "caregiver");
		if(count($checkUserExists)>0){
			$result = 'email_exists';
			echo $result;
			return false;
		}
		
		//Adding agency basic data into agency table
		$caregiver['first_name'] = $post['first_name'];
		$caregiver['last_name'] = $post['last_name'];
		$caregiver['gender'] = $post['gender'];
		$caregiver['position'] = $post['position'];
		$caregiver['from_month'] = $post['from_month'];
		$caregiver['from_year'] = $post['from_year'];
		$caregiver['to_month'] = $post['to_month'];
		$caregiver['to_year'] = $post['to_year'];
		$caregiver['phone_number'] = $post['phone_number'];
		$caregiver['email'] = $post['email'];
		$caregiver['address'] = $post['address'];
		$caregiver['country_id'] = $post['country_id'];
		$caregiver['state_id'] = 0;
		if(isset($post['state_id']))
			$caregiver['state_id'] = $post['state_id'];
		$caregiver['city_id'] = 0;
		if(isset($post['city_id']))
			$caregiver['city_id'] = $post['city_id'];
		$caregiver['zipcode'] = $post['zipcode'];
		$caregiver['emergency_contact_name'] = $post['emergency_contact_name'];
		$caregiver['emergency_contact_number'] = $post['emergency_contact_number'];
		$caregiver['caregiver_certifications'] = "";
		if(isset($post['caregiver_certifications']))
			$caregiver['caregiver_certifications'] = json_encode($post['caregiver_certifications']);
		$caregiver['password'] = "";
		$caregiver['status'] = "added";
		$caregiver['created_at'] = date("Y-m-d H:i:s");
		$caregiver['updated_at'] = date("Y-m-d H:i:s");
		$caregiver_id = $this->common_model->insertGetIDQuery("caregiver", $caregiver);
		
		//uploading and updating profile picture of caregiver
		if(isset($_FILES["profile_pic"]) && $_FILES["profile_pic"]['name']!=''){
			$profilePicData = upload_file($_FILES["profile_pic"], "caregiver", $caregiver_id);
			$profile['profile_pic'] = $this->common_model->insertGetIDQuery("media", $profilePicData);
			$this->common_model->updateQuery("caregiver", "id", $caregiver_id, $profile);
		}		
		
		//Adding caregiver license
		if(isset($post['state_license'])){
			foreach($post['state_license'] as $key=>$val){
				$caregiver_license['caregiver_id'] = $caregiver_id;
				$caregiver_license['state_license'] = $post['state_license'][$key];
				$caregiver_license['valid_from_month'] = $post['valid_from_month'][$key];
				$caregiver_license['valid_from_year'] = $post['valid_from_year'][$key];
				$caregiver_license['valid_to_month'] = $post['valid_to_month'][$key];
				$caregiver_license['valid_to_year'] = $post['valid_to_year'][$key];
				$caregiver_license['created_at'] = date('Y-m-d H:i:s');
				$caregiver_license['updated_at'] = date('Y-m-d H:i:s');
				$caregiver_license_id = $this->common_model->insertGetIDQuery("caregiver_license", $caregiver_license);
				//Adding caregiver license media
				if(!empty($post['media_license_document'])){
					$licence_media = (array)json_decode($post['media_license_document'][$key]);
					$licence_media['module_id'] = $caregiver_license_id;
					$licence_media['created_at'] = date("Y-m-d H:i:s");
					$this->common_model->insertGetIDQuery("media", $licence_media);
				}
			}
		}
		$this->session->set_flashdata("success", "You have added a new caregiver successfully.");
		echo $result;
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
		$data['result'] = $this->Caregiver_model->getAll();
		$this->load->view("agency/caregiver/send_invite_to_caregiver",$data);
	}
	
	public function send_invite($caregiver_id){
		$this->load->model("Settings_model");
		$this->load->model("Agency_model");
		$this->load->model("Caregiver_model");

		$agencyDetail = $this->Agency_model->getAgencyById($this->user_id);
		$caregiverDetail = $this->Caregiver_model->getCaregiverById($caregiver_id);
		
		$template = $this->Settings_model->getEmailTemplateByName("Caregiver - Invitation");    
		$subject = $template->setting_name;
		$message = $template->setting_value;
		$subject = str_replace("[@AgencyName]",$agencyDetail->full_name,$subject);
		$message = str_replace("[@CaregiverFirstName]",$caregiverDetail->first_name,$message);
		$message = str_replace("[@CaregiverLastName]",$caregiverDetail->last_name,$message);
		$message = str_replace("[@AgencyName]",$agencyDetail->full_name,$message);
		$message = str_replace("[@JoinUrl]",$agencyDetail->full_name,$message);
		sendEmail("addi.ahmad9@gmail.com",$subject,$message);
	}
}