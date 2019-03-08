<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}
		$this->load->model("Agency_model");
		//LoggedIn User ID
		$userSession = $this->session->userdata('isAgencyLoggedIn');
		$this->agency_id = $userSession['user_id'];
	}

	public function index() {
		$data["breadcrumb"] = "My Profile";
		$data["heading"] = "My Profile";
		$data["url_segment"] = "profile";
		$data["profile_detail"] = $this->Agency_model->getAgencyById($this->agency_id);
		$whereArray = array('agency_id' => $this->agency_id);
		$data["totalCaregivers"] = $this->common_model->countRows("caregiver", $whereArray);
		$data['totalClients'] = $this->common_model->countRows("client",$whereArray);
		//print_array($data["totalCaregivers"]);
		$data['countries'] = $this->common_model->listingResult("countries");
		//print_array($data['countries']);
		$this->load->view('agency/profile/index',$data);
	}
	public function wizard($agency_id){
		//$data['post'] = $this->input->post();
		$data["breadcrumb"] = "Edit Profile";
		$data["heading"] = "Edit Profile";
		$data["url_segment"] = "wizard";
		$data["profile_detail"] = $this->Agency_model->getAgencyById($this->agency_id);
		$data['countries'] = $this->common_model->listingResult("countries");
		$data["states"] = $this->common_model->listingResultWhere("country_id",$data["profile_detail"]->profile->country_id,"states");
		//$data["states"] = $this->Agency_model->loadStatesByCountryId($data["profile_detail"]->profile->country_id);
		$data["cities"] = $this->common_model->listingResultWhere("state_id",$data["profile_detail"]->profile->state_id,"cities");
		$this->load->view("agency/profile/wizard",$data);
	}
	public function add_new_license_form(){
		$post = $this->input->post();
		//print_array($_FILES);
		$agency_lisence_id = $this->common_model->insertGetIDQuery("agency_license", $post);
		if(isset($_FILES["media_license_document"])){
			$data = upload_file($_FILES["media_license_document"], "agency_license", $agency_lisence_id, $FILE_DIRECTORY="./uploads/agency/");
			$media['media_license_document'] = $this->common_model->insertGetIDQuery("media", $data);
			$this->common_model->updateQuery("agency_license", "id", $agency_lisence_id, $media);
		}
		$data['result'] = $this->common_model->listingRow("id",$agency_lisence_id,"agency_license");
		$this->load->view('agency/profile/license_view',$data);
	}
	public function edit_license(){
		$id = $this->input->post("id");
		$data['result'] = $this->common_model->listingRow("id",$id,"agency_license");
		$data['countries'] = load_table("countries");
		$this->load->view("agency/profile/edit_license", $data);
	}
	
	public function update_license_form(){
		$post = $this->input->post();
		$id = $post['agency_license_id'];
		unset($post['agency_license_id']);
		$this->common_model->update_query("agency_license", $post, "id", $id);
		$data['result'] = $this->common_model->listingRow("id",$id,"agency_license");
		if(isset($_FILES["media_license_document"])){
			$previousMedia = $this->common_model->listingRow("id",$data['result']->media_license_document,"media");
			$mediaData = upload_file($_FILES["media_license_document"], "agency_license", $agency_lisence_id, $FILE_DIRECTORY="./uploads/agency/");
			if(count($previousMedia)>0){
				if(file_exists(DOC_PATH.$previousMedia->full_path)){
					unlink(DOC_PATH.$previousMedia->full_path);
				}
				$this->common_model->updateQuery("media", "id", $data['result']->media_license_document, $mediaData);
			}else{
				$newMedia["media_license_document"] = $this->common_model->insertGetIDQuery("media", $mediaData);
				$this->common_model->updateQuery("agency_license", "id", $agency_lisence_id, $newMedia);
			}
		}
		$this->load->view('agency/profile/license_view',$data);
	}

	public function delete_license(){
		$id = $this->input->post("id");
		$licenseDetail = $this->common_model->listingRow("id",$id,"agency_license");
		$mediaDetail = $this->common_model->listingRow("id",$licenseDetail->media_license_document,"media");
		if(count($mediaDetail)>0){
			if(file_exists(DOC_PATH.$mediaDetail->full_path)){
				unlink(DOC_PATH.$mediaDetail->full_path);
			}
		}
		$this->common_model->delete("media", array("id"=>$licenseDetail->media_license_document));
		$this->common_model->delete("agency_license", array("id"=>$id));
	}

	public function upload_license_file($FILE){
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
	public function loadStatesByCountryId(){

	}
	
	public function update_agency_profile(){
		$post = $this->input->post();
		$agency_id = $post['agency_id'];
		$agencyDetail = $this->common_model->listingRow("id",$agency_id,"agency");
		$agencyProfileDetail = $this->common_model->listingRow("agency_id",$agency_id,"agency_profile");
		//Adding agency basic data into agency table
		$agency['company_name'] = $post['company_name'];
		$agency['position'] = $post['position'];
		$agency['full_name'] = $post['full_name'];
		$agency['email_address'] = $post['email_address'];
		$agency['phone_number'] = $post['phone_number'];
		$agency['created_at'] = date('Y-m-d H:i:s');
		$agency['updated_at'] = date('Y-m-d H:i:s');
		$agency_id = $this->common_model->updateQuery("agency", "id", $agency_id, $agency);
		
		//Adding advance data into agency profile table
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
		
		$this->common_model->updateQuery("agency_profile", "agency_id", $agency_id, $agency_profile);
		
		//uploading and updating media company logo
		if(!empty($_FILES["media_company_logo"]['name'])){
			$logoDetail = $this->common_model->listingRow("id",$agencyProfileDetail->media_company_logo,"media");
			$mediaData = upload_file($_FILES["media_company_logo"], "agency_profile", $agencyProfileDetail->id, $FILE_DIRECTORY="./uploads/agency/");
			if(count($logoDetail)>0){
				if(file_exists(DOC_PATH.$logoDetail->full_path)){
					unlink(DOC_PATH.$logoDetail->full_path);
				}
				$this->common_model->updateQuery("media", "id", $agencyProfileDetail->media_company_logo, $mediaData);
			}else{
				$newLogoId["media_company_logo"] = $this->common_model->insertGetIDQuery("media", $mediaData);
				$this->common_model->updateQuery("agency_profile", "id", $agencyProfileDetail->id, $newLogoId);
			}
		}
		
		if(isset($_FILES["croppedImage"])){
			$profileImageDetail = $this->common_model->listingRow("id",$agencyProfileDetail->media_profile_picture,"media");
			$profilemediaData = upload_blob($_FILES["croppedImage"], "agency_profile", $agencyProfileDetail->id, "/uploads/profileImages/");
			if(count($profileImageDetail)>0){
				if(file_exists(DOC_PATH.$profileImageDetail->full_path)){
					unlink(DOC_PATH.$profileImageDetail->full_path);
				}
				$this->common_model->updateQuery("media", "id", $agencyProfileDetail->media_profile_picture, $profilemediaData);
			}else{
				$newLogoId["media_profile_picture"] = $this->common_model->insertGetIDQuery("media", $profilemediaData);
				$this->common_model->updateQuery("agency_profile", "id", $agencyProfileDetail->id, $newLogoId);
			}
		}
		$this->session->set_flashdata("success", "You have updated your profile successfully.");
	}

}
?>
