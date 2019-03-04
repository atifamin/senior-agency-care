<?php

class Agency_model extends CI_Model{
	
	public function getAgencyById($agency_id){
		$agencyDetail = $this->common_model->listingRow("id",$agency_id,"agency");
		if(count($agencyDetail)>0){
			$agencyProfile = $this->common_model->listingRow("agency_id",$agency_id,"agency_profile");
			if(count($agencyProfile)>0){
				$agencyDetail->profile = $agencyProfile;
				if(!empty($agencyProfile->media_company_logo) || $agencyProfile->media_company_logo!=0){
					$agencyDetail->profile->media_company_logo_detail = $this->common_model->listingRow("id",$agencyProfile->media_company_logo,"media");
				}

				if(!empty($agencyProfile->media_profile_picture) || $agencyProfile->media_profile_picture!=0){
					$agencyDetail->profile->media_profile_picture_detail = $this->common_model->listingRow("id",$agencyProfile->media_profile_picture,"media");
				}
			}
			$agencyLicense = $this->common_model->listingResultWhere("agency_id",$agency_id,"agency_license");
			if(count($agencyLicense)>0){
				foreach($agencyLicense as $licenseKey=>$licenseVal){
					$agencyDetail->license[$licenseKey] = $licenseVal;
					if(!empty($licenseVal->media_license_document) || $licenseVal->media_license_document!=0){
						$agencyDetail->license[$licenseKey]->media_license_document_detail = $this->common_model->listingRow("id",$licenseVal->media_license_document,"media");
					}
				}
				
			}
		}
		return $agencyDetail;
	}
	
}

?>