<?php

class Family_model extends CI_Model{

	// public function getFamily($family_id){
	// 	return $this->common_model->listingRow("id",$family_id,"client_family");
	// }
	public function getFamilyById($family_id){
		$familyDetail = $this->common_model->listingRow("id",$family_id,"client_family");
		if (count($familyDetail) > 0) {
			$familyDetail->image_detail = $this->common_model->listingRow("id",$familyDetail->profile_image,"media");
		}
		return $familyDetail;
	}


}
?>