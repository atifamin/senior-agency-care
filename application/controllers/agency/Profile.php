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
			$this->common_model->insertQuery("media", $data);
		}
		//echo 1;
		$this->load->view('agency/profile/append_license',$post);
	}
	public function edit_license(){
		$id = $this->input->post("id");
		$data['result'] = $this->common_model->listingRow("id",$id,"agency_license");
		// $data['countries'] = load_table("countries");
		$this->load->view("agency/profile/edit_license", $data);
	}
	
	public function update_license_form($id){
		echo $id;
	}
	public function delete_license(){
		$id = $this->input->post();
		//print_array($id);
		//$whereArray = array('id' => $post );
		$data['delete_result'] = $this->common_model->delete("agency_license", $id);
		redirect("agency/profile");
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

}
?>
