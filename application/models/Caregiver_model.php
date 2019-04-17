<?php

class Caregiver_model extends CI_Model{
	
	public function getAll(){
		$result = $this->common_model->listingResult("caregiver");
		if(count($result)>0){
			foreach($result as $key=>$val){
				//getting caregiver profile picture
				if($val->profile_pic!=0 && !empty($val->profile_pic)){
					$result[$key]->profile_pic_image = $this->common_model->listingRow("id",$val->profile_pic,"media");
				}
				
				$country = $this->common_model->listingRow("id",$val->country_id,"countries");
				if(count($country)>0){
					$result[$key]->country = $country->name;
				}
				
				$state = $this->common_model->listingRow("id",$val->state_id,"states");
				if(count($state)>0){
					$result[$key]->state = $state->name;
				}
				
				$city = $this->common_model->listingRow("id",$val->city_id,"cities");
				if(count($city)>0){
					$result[$key]->city = $city->name;
				}
				
				//getting caregiver license detail
				$WhereArray1 = array(
					'caregiver_id'	=>	$val->id,
				);
				$result[$key]->license = $this->common_model->listingMultipleWhereResult("caregiver_license", $WhereArray1);
				//getting caregiver license image detail
				if(count($result[$key]->license)>0){
					foreach($result[$key]->license as $key1=>$val1){
						$WhereArray2 = array(
							'module'	=>	'caregiver_license',
							'module_id'	=>	$val1->id,
						);
						$result[$key]->license[$key1]->license_image = $this->common_model->listingMultipleWhereRow("media", $WhereArray2);
					}
				}
			}
		}
		return $result;
	}
	
	public function getCaregiverByAgencyId($agency_id){
		$result = $this->common_model->listingResultWhere("agency_id",$agency_id,"caregiver");
		if(count($result)>0){
			foreach($result as $key=>$val){
				//getting caregiver profile picture
				if($val->profile_pic!=0 && !empty($val->profile_pic)){
					$result[$key]->profile_pic_image = $this->common_model->listingRow("id",$val->profile_pic,"media");
				}
				
				$country = $this->common_model->listingRow("id",$val->country_id,"countries");
				if(count($country)>0){
					$result[$key]->country = $country->name;
				}
				
				$state = $this->common_model->listingRow("id",$val->state_id,"states");
				if(count($state)>0){
					$result[$key]->state = $state->name;
				}
				
				$city = $this->common_model->listingRow("id",$val->city_id,"cities");
				if(count($city)>0){
					$result[$key]->city = $city->name;
				}
				
				//getting caregiver license detail
				$WhereArray1 = array(
					'caregiver_id'	=>	$val->id,
				);
				$result[$key]->license = $this->common_model->listingMultipleWhereResult("caregiver_license", $WhereArray1);
				//getting caregiver license image detail
				if(count($result[$key]->license)>0){
					foreach($result[$key]->license as $key1=>$val1){
						$WhereArray2 = array(
							'module'	=>	'caregiver_license',
							'module_id'	=>	$val1->id,
						);
						$result[$key]->license[$key1]->license_image = $this->common_model->listingMultipleWhereRow("media", $WhereArray2);
					}
				}
			}
		}
		return $result;
	}
	
	public function getCaregiverById($caregiver_id){
		$caregiverDetail = $this->common_model->listingRow("id",$caregiver_id,"caregiver");
		if(count($caregiverDetail)>0){
			$country = $this->common_model->listingRow("id",$caregiverDetail->country_id,"countries");
			if(count($country)>0){
				$caregiverDetail->country = $country->name;
			}
			
			$state = $this->common_model->listingRow("id",$caregiverDetail->state_id,"states");
			if(count($state)>0){
				$caregiverDetail->state = $state->name;
			}
			
			$city = $this->common_model->listingRow("id",$caregiverDetail->city_id,"cities");
			if(count($city)>0){
				$caregiverDetail->city = $city->name;
			}
			
			$profile_pic_image = $this->common_model->listingRow("id",$caregiver_id,"media");
			if(count($profile_pic_image)>0){
				$caregiverDetail->profile_pic_image = $profile_pic_image;
			}
			
			$caregiverLicense = $this->common_model->listingResultWhere("caregiver_id",$caregiver_id,"caregiver_license");
			if(count($caregiverLicense)>0){
				$caregiverDetail->license = $caregiverLicense;
			}
			
			//getting caregiver license document detail
			if(isset($caregiverDetail->license) && count($caregiverDetail->license)>0){
				foreach($caregiverDetail->license as $key=>$val){
					$WhereArray = array(
						'module'	=>	'caregiver_license',
						'module_id'	=>	$val->id,
					);
					$caregiverDetail->license[$key]->license_document = $this->common_model->listingMultipleWhereRow("media", $WhereArray);
				}
			}
		}
		return $caregiverDetail;
	}
	
	public function totalCaregiverProfileByStatus($agency_id, $status){
		$QUERY = $this->common_model->listingMultipleWhereResult("caregiver", array("agency_id"=>$agency_id, "status"=>$status));
		return count($QUERY);
	}
	public function caregiver_shift_detail($caregiver_id){
		$data = $this->db->select('*')
						->from("client_appointements AS ca")
						->where("ca.caregiver_id", $caregiver_id)
						->where("ca.`from` > NOW()")
						->order_by("ca.id", "ASC")
						->get()->result();
		return $data;
	}

	
	
}

?>