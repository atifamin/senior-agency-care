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
	
}

?>