<?php

class Client_model extends CI_Model{


    public function save_client($post){
        //print_array($post);
        //$dob = $post['month'].'-'.$post['day'].'-'.$post['year'];
        //$dob = DateTime::createFromFormat('M-d-Y', $dob);
        //$dob = $dob->format('Y-m-d');
        $post['dob'] = "".$post['year'].'-'.$post['month'].'-'.$post['day']."";
        if(!empty($post['firstName'])){
        $family_first_name = $post['firstName'];
        $family_first_name = explode(',', $family_first_name);
        unset($post['firstName']);
        }
        if(!empty($post['lastName'])){
        $family_last_name = $post['lastName'];
        $family_last_name = explode(',', $family_last_name);
        unset($post['lastName']);
        }
        if(!empty($post['emailAddress'])){
        $family_email_address = $post['emailAddress'];
        $family_email_address = explode(',', $family_email_address);
        unset($post['emailAddress']);
        }
        if(!empty($post['mobileNumber'])){
        $family_mobile_number = $post['mobileNumber'];
        $family_mobile_number = explode(',', $family_mobile_number);
        unset($post['mobileNumber']);
        }
        unset($post['firstName']);
        unset($post['lastName']);
        unset($post['emailAddress']);
        unset($post['mobileNumber']);

        unset($post['month']);
        unset($post['day']);
        unset($post['year']);
        unset($post['linked_profile']);
        unset($post['linked_id']);
        unset($post['is_directive_document']);
        $client_id = $this->common_model->insertGetIDQuery("client", $post);
        if(!empty($_FILES)){
        $data = upload_file($_FILES['file'], "client", $client_id, $FILE_DIRECTORY="./uploads/agency/clients/");
        }
        if(!empty($data)){
            $life_directive_document = $this->common_model->insertGetIDQuery("media", $data);
        }
        if(!empty($family_first_name)){
            for($i = 0;$i < count($family_first_name);$i++){
                $addFamily = array(
                    "client_id" => $client_id,
                    "first_name" => $family_first_name[$i],
                    "last_name" => $family_last_name[$i],
                    "email_address" => $family_email_address[$i],
                    "mobile_number" => $family_mobile_number[$i]
                );
                $client_family_id = $this->common_model->insertGetIDQuery("client_family", $addFamily);
                $this->load->model("Email_model");
                $this->Email_model->send_invite_to_client($post['agency_id'], $client_family_id);
            }
        }
        if(!empty($life_directive_document)){
                $client_document = array(
                "life_directive_document" => $life_directive_document
                );
            $this->common_model->updateQuery("client", "id", $client_id, $client_document);                                                                 
        }
        return $client_id;
    }

    public function update_client($post){
        $dob = $post['month'].'-'.$post['day'].'-'.$post['year'];
        $dob = DateTime::createFromFormat('M-d-Y', $dob);
        $dob = $dob->format('Y-m-d');
        $post['dob'] = $dob;
        $client_id = $post['client_id'];
        unset($post['month']);
        unset($post['day']);
        unset($post['year']);
        unset($post['client_id']);
        $this->common_model->updateQuery("client", "id", $client_id, $post);
        if(!empty($_FILES)){
        $data = upload_file($_FILES['file'], "client", $client_id, $FILE_DIRECTORY="./uploads/agency/clients/");
        }
        if(!empty($data)){
            $WhereArray = array(
                "module" => "client",
                "module_id" => $client_id
            );
        $this->common_model->updateMultipleWhereQuery("media", $WhereArray, $data);
        }
        // if(!empty($media_id)){
        //         $client_document = array(
        //         "media_id" => $media_id
        //         );
        //     $this->common_model->updateQuery("client", "id", $client_id, $client_document);                                                                 
        // }
    }
    public function getAllClients(){
		$data = $this->db->select("c.*")
						->from("client c")
						->join("client_relationship AS cr", "cr.linked_id = c.id", "LEFT")
						->where("cr.linked_id IS NULL")
						->order_by("c.id", "ASC")
						->get()->result();
        foreach($data as $key=>$val){
			//client life directive document
			$clientMedia = $this->common_model->listingRow("id",$val->life_directive_document,"media");
			if(count($clientMedia)>0){
				$data[$key]->life_directive_document_detail = $clientMedia;
			}
			$checkIfRelationExist = $this->common_model->listingRow("client_id",$val->id,"client_relationship");
			if(count($checkIfRelationExist)>0){
				$getLinkedProfile = $this->common_model->listingRow("id",$checkIfRelationExist->linked_id,"client");
				$data[$key]->linked_profile_detail = $getLinkedProfile;
				//client life directive document
				$linkedMedia = $this->common_model->listingRow("id",$getLinkedProfile->life_directive_document,"media");
				if(count($linkedMedia)>0){
					$data[$key]->linked_profile_detail->life_directive_document_detail = $linkedMedia;
				}
			}
        }
        return $data;
    }
    public function getById($client_id){
        $data = $this->common_model->listingRow("id",$client_id,"client");
        if (count($data)>0){
            $clientDocument  = $this->common_model->listingRow("id",$data->life_directive_document,"media");
            if (count($clientDocument)>0) {
                $data->client_document_detail = $clientDocument;
            }
        }
        return $data;
    }
	
	public function clientRelationshipDetailById($client_id){
		$query = $this->db->where("client_id", $client_id)
				->or_where("linked_id", $client_id)
				->get("client_relationship")->row();
		
		$data = $this->common_model->listingRow("id",$client_id,"client");
		if(count($query)>0){
			$data = $this->common_model->listingRow("id",$query->client_id,"client");
			$getLinkedProfile = $this->common_model->listingRow("id",$query->linked_id,"client");
            if(count($getLinkedProfile)>0){
                $data->linked_profile_detail = $getLinkedProfile;
				$clientDocument1 = $this->common_model->listingRow("id",$getLinkedProfile->life_directive_document,"media");
				if (count($clientDocument1)>0) {
					$data->linked_profile_detail->client_document_detail = $clientDocument1;
				}
            }
		}
		
		
		if (count($data)>0){
            $clientDocument2 = $this->common_model->listingRow("id",$data->life_directive_document,"media");
            if (count($clientDocument2)>0) {
                $data->client_document_detail = $clientDocument2;
            }
		}
		return $data;
	}

    public function getClientFamilyById($id){
        return $this->common_model->listingResultWhere("client_id",$id,"client_family");
    }
	
	public function load_client_appointments($client_id){
		$this->load->model("Caregiver_model");
		$client_appoitements = $this->common_model->listingResultWhere("client_id",$client_id,"client_appointements");
		foreach($client_appoitements as $key=>$val){
			$client_appoitements[$key]->caregiver_detail = $this->Caregiver_model->getCaregiverById($val->caregiver_id);
		}
		return $client_appoitements;
	}
	
	public function load_client_appointement_events($client_id){
		$client_appoitements = $this->load_client_appointments($client_id);
		$eventsArray = array();
		if(count($client_appoitements)>0){
			foreach($client_appoitements as $CPK=>$CPV){
				$is_recurring_html = "";
				if($CPV->is_recurring==1){
					$is_recurring_html = "checked";
				}
				$obj = new stdClass();
				$obj->title = $CPV->title;
				$obj->start = date("c", strtotime($CPV->date." ".$CPV->in_time));
				$obj->end = date("c", strtotime($CPV->date." ".$CPV->out_time));
				$obj->color = "#546E7A";
				$obj->client_data = '<div class="media" style="padding:0px;"><div class="mr-3"><img src="'.caregiver_image($CPV->caregiver_detail->id).'" class="rounded-circle" width="30" height="30" alt=""></div><div class="media-body"><div class="media-title" style="padding:1% 0;">'.$CPV->caregiver_detail->first_name." ".$CPV->caregiver_detail->last_name.' &nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="edit_client_schedule('.$CPV->id.')"><i class="icon-pencil7"></i></a></div></div></div>';
				$obj->is_recurring = '<td style="border-bottom:1px solid #ddd;"><div class="form-check form-check-switchery"><label class="form-check-label"><input type="checkbox" class="form-check-input-switchery" '.$is_recurring_html.' data-fouc></label></div></td>';
				$obj->description = $CPV->title.": Start: ".date("Y-m-d h:i A", strtotime($CPV->date." ".$CPV->in_time)).", End: ".date("Y-m-d h:i A", strtotime($CPV->date." ".$CPV->out_time))."";
				
				$eventsArray[] = $obj;
				/*if(!empty($CPV->dates)){
					$CPD = explode(",", $CPV->dates);
					foreach($CPD as $key=>$val){
						$obj = new stdClass();
						$obj->title = $CPV->title;
						$obj->start = date("c", strtotime($CPD[$key]." ".$CPV->in_time));
						$obj->end = date("c", strtotime($CPD[$key]." ".$CPV->out_time));
						$obj->color = "#546E7A";
						$obj->client_data = '<div class="media" style="padding:0px;"><div class="mr-3"><img src="'.caregiver_image($CPV->caregiver_detail->id).'" class="rounded-circle" width="30" height="30" alt=""></div><div class="media-body"><div class="media-title" style="padding:1% 0;">'.$CPV->caregiver_detail->first_name." ".$CPV->caregiver_detail->last_name.' &nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="edit_client_schedule('.$CPV->id.')"><i class="icon-pencil7"></i></a></div></div></div>';
						$obj->is_recurring = '<td style="border-bottom:1px solid #ddd;"><div class="form-check form-check-switchery"><label class="form-check-label"><input type="checkbox" class="form-check-input-switchery" '.$is_recurring_html.' data-fouc></label></div></td>';
						$obj->description = $CPV->title.": Start: ".date("Y-m-d h:i A", strtotime($CPD[$key]." ".$CPV->in_time)).", End: ".date("Y-m-d h:i A", strtotime($CPD[$key]." ".$CPV->out_time))."";
						
						$eventsArray[] = $obj;
					}
				}*/
			}
		}
		return json_encode($eventsArray);
	}
}

?>