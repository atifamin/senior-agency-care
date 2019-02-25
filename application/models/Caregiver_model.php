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
	
}

?>