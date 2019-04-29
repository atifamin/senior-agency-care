<?php

function load_table($table){
	$ci=& get_instance();
	return $ci->common_model->listingResult($table);
}
function profile_completion_percentage($caregiver_id){
	$ci=& get_instance();
	$ci->load->model("Caregiver_model");
	$caregiverDetail = $ci->Caregiver_model->getCaregiverById($caregiver_id);
	$total = 0;
	if(!empty($caregiverDetail->first_name))
		$total += 4;
	if(!empty($caregiverDetail->last_name))
		$total += 4;
	
	if(!empty($caregiverDetail->gender))
		$total += 4;
	if(!empty($caregiverDetail->position))
		$total += 4;
	if(!empty($caregiverDetail->from_month))
		$total += 4;
	if(!empty($caregiverDetail->from_year))
		$total += 4;
	if(!empty($caregiverDetail->to_month))
		$total += 4;
	if(!empty($caregiverDetail->to_year))
		$total += 4;
	if(!empty($caregiverDetail->phone_number) && $caregiverDetail->phone_number!="+__-__-____-____")
		$total += 4;
	if(!empty($caregiverDetail->email))
		$total += 4;
	if(!empty($caregiverDetail->address))
		$total += 4;
	if(!empty($caregiverDetail->gender))
		$total += 4;
	if(!empty($caregiverDetail->country_id) && $caregiverDetail->country_id!=0)
		$total += 4;
	if(!empty($caregiverDetail->state_id) && $caregiverDetail->state_id!=0)
		$total += 4;
	if(!empty($caregiverDetail->city_id) && $caregiverDetail->city_id!=0)
		$total += 4;
	if(!empty($caregiverDetail->zipcode))
		$total += 4;
	if(!empty($caregiverDetail->emergency_contact_name))
		$total += 4;
	if(!empty($caregiverDetail->emergency_contact_number))
		$total += 4;
	if(!empty($caregiverDetail->caregiver_certifications))
		$total += 4;
	if(!empty($caregiverDetail->profile_pic))
		$total += 8;
	if(isset($caregiverDetail->license) && count($caregiverDetail->license)>0)
		$total += 20;
	
	return $total;
}

function checkIfProfileNotCompleted($caregiver_id){
	$ci=& get_instance();
	$percent = profile_completion_percentage($caregiver_id);
	if($percent<73)
		redirect("caregiver/profile/wizard/".$caregiver_id."");
}

function upload_file($FILE, $MODULE, $MODULE_ID, $FILE_DIRECTORY="./uploads/caregiver/"){
	$name = $FILE["name"];
	$media_id = 0;
	$fname=time().'_'.basename($FILE["name"]);
	$fname = str_replace(" ","_",$fname);
	$fname = str_replace("%","_",$fname);
	$name_ext = explode(".", basename($FILE["name"]));
	$name_ext = end($name_ext);
	$uploaddir = $FILE_DIRECTORY;
	if (!file_exists($uploaddir)) {
		mkdir($uploaddir, 0777, true);
	}
	$uploadfile = $uploaddir.$fname;
	if (move_uploaded_file($FILE['tmp_name'], $uploadfile)){
		$type = $FILE["type"];
		$size = $FILE["size"];
		$data["module"] = $MODULE;
		$data["module_id"] = $MODULE_ID;
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

function upload_blob($FILE, $MODULE, $MODULE_ID, $FILE_DIRECTORY){
	$to_be_upload =  $FILE['tmp_name'];
	$targetPath = getcwd(). $FILE_DIRECTORY;
	$name = 'profile_image_'.strtotime(date("Y-m-d H:i:s")).'.png';
	$targetFile = $targetPath . $name ;
	$data = array();
	if(move_uploaded_file($to_be_upload, $targetFile)){
		$data["module"] = $MODULE;
		$data["module_id"] = $MODULE_ID;
		$data["name"] = $name;
		$data["file_name"] = $name;
		$data["file_type"] = $FILE['type'];
		$data["file_path"] = $FILE_DIRECTORY;
		$data["full_path"] = $FILE_DIRECTORY.$name;
		$data["file_extension"] = $FILE['type'];
		$data["file_size"] = $FILE['size'];
		$data["created_at"] = date('Y-m-d H:i:s');
	}
	return $data;
}

/*function housekeeping_services(){
	$ci=& get_instance();
	return $ci->common_model->listingResult("housekeeping_services");
}

function sunrise_sunset_services(){
	$ci=& get_instance();
	return $ci->common_model->listingResult("sunrise_sunset_services");
}

function dementia_alzheimer_assistance(){
	$ci=& get_instance();
	return $ci->common_model->listingResult("dementia_alzheimer_assistance");
}

function personal_assistance_services(){
	$ci=& get_instance();
	return $ci->common_model->listingResult("personal_assistance_services");
}

function post_surgery_maternity_services(){
	$ci=& get_instance();
	return $ci->common_model->listingResult("post_surgery_maternity_services");
}

function respite_services(){
	$ci=& get_instance();
	return $ci->common_model->listingResult("respite_services");
}

function personal_care_services(){
	$ci=& get_instance();
	return $ci->common_model->listingResult("personal_care_services");
}*/

function print_array($arr,$exit=1){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	if ($exit==1)
		exit;
}

function caregiver_image($user_id){
	$ci =& get_instance();
	$userDetail = $ci->db->where("id", $user_id)->get("caregiver")->row();
	$image_url = base_url("assets/images/placeholders/avatar.png");
	if($userDetail->profile_pic!=0){
		$media = $ci->db->where("id", $userDetail->profile_pic)->get("media")->row();
		if(count($media)>0){
			if(file_exists(DOC_PATH.$media->full_path)){
				$image_url = base_url().$media->full_path;
			}
		}
	}
	return $image_url;
}

function agency_image($agency_id){
	$ci =& get_instance();
	$agencyDetail = $ci->db->where("id", $agency_id)->get("agency_profile")->row();
	$image_url = base_url("assets/images/placeholders/avatar.png");
	if($agencyDetail->media_profile_picture!=0){
		$media = $ci->db->where("id", $agencyDetail->media_profile_picture)->get("media")->row();
		if(count($media)>0 && file_exists(DOC_PATH.$media->full_path)){
			$image_url = base_url().$media->full_path;
		}
	}
	return $image_url;
}

function client_image($user_id){
	$ci =& get_instance();
	$userDetail = $ci->db->where("id", $user_id)->get("client")->row();
	$image_url = base_url("assets/images/placeholders/avatar.png");
	if($userDetail->profile_image!=0){
		$media = $ci->db->where("id", $userDetail->profile_image)->get("media")->row();
		if(count($media)>0){
			if(file_exists(DOC_PATH.$media->full_path)){
				$image_url = base_url().$media->full_path;
			}
		}
	}
	return $image_url;
}
function family_image($user_id){
	$ci =& get_instance();
	$userDetail = $ci->db->where("id", $user_id)->get("client_family")->row();
	$image_url = base_url("assets/images/placeholders/avatar.png");
	if($userDetail->profile_image!=0){
		$media = $ci->db->where("id", $userDetail->profile_image)->get("media")->row();
		if(count($media)>0){
			if(file_exists(DOC_PATH.$media->full_path)){
				$image_url = base_url().$media->full_path;
			}
		}
	}
	return $image_url;
}
function family_Detail($family_id){
	$ci =& get_instance();
	$ci->load->model("Family_model");
	return $ci->Family_model->getFamilyById($family_id);
}

function caregiver_Detail($caregiver_id){
	$ci =& get_instance();
	$ci->load->model("Caregiver_model");
	return $ci->Caregiver_model->getCaregiverById($caregiver_id);
}
function agency_Detail($agency_id){
	$ci =& get_instance();
	$ci->load->model("Agency_model");
	return $ci->Agency_model->getAgencyById($agency_id);
}
function randomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>