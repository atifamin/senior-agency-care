<?php

class Auth_model extends CI_Model{
	
	public function authentication($email_address, $Password){
		$WhereArray = array(
			"email_address" => $email_address,
			"password" =>	md5($Password),
		);
		$result = $this->common_model->listingMultipleWhereRow("agency", $WhereArray);
		if(count($result)>0){
			$data['user_id'] = $result->id;
			$this->session->set_userdata('isAgencyLoggedIn', $data);
			if($this->session->userdata("isAgencyLoggedIn")){
				return redirect("agency/dashboard");
			}
		}else{
			return false;
		}
	}
	
	public function caregiver_auth($email_address, $Password){
		$WhereArray = array(
			"email" => $email_address,
			"password" =>	md5($Password),
		);
		$result = $this->common_model->listingMultipleWhereRow("caregiver", $WhereArray);
		if(count($result)>0){
			$data['user_id'] = $result->id;
			$this->session->set_userdata('isCaregiverLoggedIn', $data);
			if($this->session->userdata("isCaregiverLoggedIn")){
				return redirect("caregiver/dashboard");
			}
		}else{
			return false;
		}
	}
	
	public function family_auth($email_address, $Password) {
		//print_array($email_address);
		$WhereArray = array(
			"email_address" => $email_address,
			"password" =>   md5($Password),
		);
		$result = $this->common_model->listingMultipleWhereRow("client_family", $WhereArray);
		//print_array($result);
		if(count($result)>0){
			$data['user_id'] = $result->id;
			$this->session->set_userdata('isFamilyLoggedIn', $data);
			if($this->session->userdata("isFamilyLoggedIn")){
				return redirect("family/dashboard");
			}
		}else{
			return false;
		}
	}
}

?>