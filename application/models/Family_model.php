<?php

class Family_model extends CI_Model{

	public function getFamily($family_id){
		return $this->common_model->listingRow("id",$family_id,"client_family");
	}
	
}

?>