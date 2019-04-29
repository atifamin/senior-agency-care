<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isFamilyLoggedIn")){
			redirect("login");
		}
		$this->load->model("Family_model");
		$userSession = $this->session->userdata('isFamilyLoggedIn');
		$this->family_id = $userSession['user_id'];
	}

	public function index() {
		$data["breadcrumb"] = "My Profile";
		$data["heading"] = "My Profile";
		$data["url_segment"] = "profile";
		$data['result'] = $this->Family_model->getFamilyById($this->family_id);
		$this->load->view('family/profile/index',$data);
	}
	public function Edit_Profile($family_id){
		//$data['post'] = $this->input->post();
		$data["brezadcrumb"] = "Edit Profile";
		$data["heading"] = "Edit Profile";
		$data["url_segment"] = "wizard";
		$data["profile_detail"] = $this->Family_model->getFamilyById($this->family_id);
		$this->load->view("family/profile/wizard",$data);
	}
	public function update_family_profile(){

	 	$post = $this->input->post();
		$family_id = $post['family_id'];
		//print_array($family_id);
		$familyDetail = $this->common_model->listingRow("id",$family_id,"client_family");
		//print_array($familyDetail);
		$family['First_name'] = $post['First_name'];
		$family['Last_name'] = $post['Last_name'];
		$family['email_address'] = $post['email_address'];
		$family['mobile_number'] = $post['mobile_number'];
		$family_profile_id = $this->common_model->updateQuery("client_family", "id", $familyDetail->id,$family);
		// print_array($family_profile_id);
		//upload image folder
		if (!empty($_FILES['croppedImageShow'])) {
			$family_profile_image = upload_blob($_FILES['croppedImageShow'], "family_profile_image", $family_id, "/uploads/profileImages/");
		//insert image db
			$profile_image = $this->common_model->insertGetIDQuery("media", $family_profile_image);
		}
		//update id-> col=listfile
		if (!empty($profile_image)) {
			$this->common_model->updateQuery("client_family", "id", $family_id, array('profile_image' =>  $profile_image));
		}
		}
	
		

}
?>
