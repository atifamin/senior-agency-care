<?php

function load_table($table){
	$ci=& get_instance();
	return $ci->common_model->listingResult($table);
}
function upload_file($FILE, $MODULE, $MODULE_ID){
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
		if(file_exists(DOC_PATH.$media->full_path)){
			$image_url = base_url().$media->full_path;
		}
	}
	return $image_url;
}

function caregiver_Detail($caregiver_id){
	$ci =& get_instance();
	$ci->load->model("Caregiver_model");
	return $ci->Caregiver_model->getCaregiverById($caregiver_id);
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