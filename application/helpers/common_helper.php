<?php

function load_table($table){
	$ci=& get_instance();
	return $ci->common_model->listingResult($table);
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

?>