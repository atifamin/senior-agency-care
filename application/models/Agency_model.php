<?php

class Agency_model extends CI_Model{
	
	public function getAgencyById($agency_id){
		$agencyDetail = $this->common_model->listingRow("id",$agency_id,"agency");
		if(count($agencyDetail)>0){
			$agencyProfile = $this->common_model->listingRow("agency_id",$agency_id,"agency_profile");
			if(count($agencyProfile)>0){
				$agencyDetail->profile = $agencyProfile;
			}
			$agencyLicense = $this->common_model->listingResultWhere("agency_id",$agency_id,"agency_license");
			if(count($agencyLicense)>0){
				$agencyDetail->license = $agencyLicense;
			}
		}
		return $agencyDetail;
	}
	
}

?>