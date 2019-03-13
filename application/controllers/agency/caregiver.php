<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Caregiver extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

    	//LoggedIn User ID
		$userSession = $this->session->userdata("isAgencyLoggedIn");
		$this->agency_id = $userSession['user_id'];
		$this->load->model("Caregiver_model");
	}
	
	public function index(){
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$data['result'] = $this->Caregiver_model->getCaregiverByAgencyId($this->agency_id);
		$this->load->view("agency/caregiver/index",$data);
	}

	public function add_caregiver(){
		$data["breadcrumb"] = "Add Caregiver";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "add_caregivers";
		$data['countries'] = load_table("countries");
		$data['total_added_profiles'] = $this->Caregiver_model->totalCaregiverProfileByStatus($this->agency_id, "added");
		$data['total_pending_profiles'] = $this->Caregiver_model->totalCaregiverProfileByStatus($this->agency_id, "pending");
		$this->load->view("agency/caregiver/add_caregiver",$data);
	}

	public function edit($caregiver_id){
		//echo $caregiver_id;exit;
		$data["breadcrumb"] = "Edit Caregiver";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "edit_caregiver";
		$data['detail'] = $this->Caregiver_model->getCaregiverById($caregiver_id);
		$data['caregiver_license'] = $this->common_model->listingRow("caregiver_id",$caregiver_id,"caregiver_license");
		$data['countries'] = $this->common_model->listingResult("countries");
		$data["states"] = $this->common_model->listingResultWhere("country_id",$data["detail"]->country_id,"states");
		$data["cities"] = $this->common_model->listingResultWhere("state_id",$data["detail"]->state_id,"cities");
		//print_array($data['detail']);
		$this->load->view("agency/caregiver/profile/edit_caregiver",$data);
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
	public function add_new_license() {
		$post = $this->input->post();
		//print_array($_FILES);
		// $fromDate = date("Y-m-d");
		// $toDate = date("".$post["valid_to_year"]."-".$post["valid_to_month"]."-d");
		// $expiry = $this->common_model->dateDifferanceTwoDates($fromDate, $toDate);
		//$data['expiryDays'] = $expiry["days"];
		$caregiver_license_id = $this->common_model->insertGetIDQuery("caregiver_license", $post);
		if (isset($_FILES['media_license_document'])) {
			$data = upload_file($_FILES['media_license_document'],"caregiver_license" , $caregiver_license_id, $FILE_DIRECTORY="./uploads/caregiver/");
			$this->common_model->insertQuery("media", $data);
		}
		//echo 1;
		$this->load->view("agency/caregiver/profile/append_license",$post);
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
		$caregiver['agency_id'] = $this->agency_id;
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
	public function delete_license()
	{
		$post = $this->input->post();
		//print_array($post);
		$this->common_model->delete("caregiver_license", $post);
	}

	public function edit_license() {
		$post = $this->input->post();
		$data['result'] = $this->common_model->listingRow("id",$post['id'],"caregiver_license");
		$data['license_doc'] = $this->common_model->listingRow("id",$data['result']->media_license_document,"media");
		$this->load->view("agency/caregiver/profile/edit_license", $data);
	}

	public function delete_license_doc(){
		$post = $this->input->post();
		$imgData = $post["imageD"];
		$path = DOC_PATH."/uploads/caregiver/".$imgData['file_name'];
		if(file_exists($path)){
			unlink($path);
		}
	}

	public function profile($caregiver_id){
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$data['detail'] = $this->Caregiver_model->getCaregiverById($caregiver_id);
		//$data['caregive_id'] = $caregiver_id;
		//print_array($caregiver_id);
		//$data['img_detail'] = $this->Caregiver_model->
		$this->load->view("agency/caregiver/profile/index",$data);
	}

	public function send_invite_to_caregiver(){
		$data["breadcrumb"] = "Caregivers";
		$data["heading"] = "Caregivers";
		$data["url_segment"] = "caregivers";
		$data['result'] = $this->Caregiver_model->getAll();
		$this->load->view("agency/caregiver/send_invite_to_caregiver",$data);
	}
	
	public function send_invite($caregiver_id){
		$this->load->model("Email_model");
		$this->Email_model->send_invite_to_caregiver($this->agency_id, $caregiver_id);
		$this->session->set_flashdata("success", "Your invitation is sent to caregiver successfully.");
		return redirect("agency/caregiver/send_invite_to_caregiver");
	}
	
	public function add_send_invite(){
		$post = $this->input->post();
		//checking if user email is already exists
		$checkUserExists = $this->common_model->listingRow("email", $post['email'], "caregiver");
		if(count($checkUserExists)>0){
			$this->session->set_flashdata("error", "This email is already taken, please try another one.");
			return redirect("agency/caregiver/send_invite_to_caregiver");
		}
		$post = $this->input->post();
		$caregiver['agency_id'] = $this->agency_id;
		$caregiver['first_name'] = $post['first_name'];
		$caregiver['last_name'] = $post['last_name'];
		$caregiver['email'] = $post['email'];
		$caregiver['status'] = "added";
		$caregiver['created_at'] = date("Y-m-d H:i:s");
		$caregiver['updated_at'] = date("Y-m-d H:i:s");
		$caregiver_id = $this->common_model->insertGetIDQuery("caregiver", $caregiver);
		$this->send_invite($caregiver_id);
		$this->session->set_flashdata("success", "Your invitation is sent to caregiver successfully.");
		return redirect("agency/caregiver/send_invite_to_caregiver");
	}
}