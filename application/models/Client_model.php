<?php

class Client_model extends CI_Model{


    public function save_client($post){
        
        $client = array();
        $client["agency_id"] = $post["agency_id"];
        $client["first_name"] = $post["first_name"];
        $client["last_name"] = $post["last_name"];
        $client["mobile_number"] = $post["mobile_number"];
        $client["email_address"] = $post["email_address"];
        $client["client_from"] = $post["client_from"];
        $client["client_to"] = $post["client_to"];
        
        $client['gender'] = "";
        if (isset($post["gender"])) 
            $client["gender"] = $post["gender"];

        $dob = date("Y-m-d", strtotime("".$post['year']."-".$post['month']."-".$post['day'].""));
        $client["dob"] = $dob;

        $client["level_care"] = $post["level_care"];

        $client["is_pets"] = "";
        if (isset($post['is_pets']))
            $client["is_pets"] = $post["is_pets"];
        
        $client["pets_types"] = $post["pets_types"];
        $client["rate_per_hour"] = $post["rate_per_hour"];
        $client["hours_per_week"] = $post["hours_per_week"];
        $client["billing_cycle"] = $post["billing_cycle"];

        $client["dietry_requirements"] = "";
        if (isset($post["dietry_requirements"]))
            $client["dietry_requirements"] = $post["dietry_requirements"];
        
        $client["fluid_requirements"] = "";
        if (isset($post["fluid_requirements"])) 
            $client["fluid_requirements"] = $post["fluid_requirements"];

        $client["medication_list"] = $post["medication_list"];
        $client["allergies_list"] = $post["allergies_list"];

        $client["is_oxygen"] = "";
        if (isset($post["is_oxygen"]))
            $client["is_oxygen"] = $post["is_oxygen"];

        $client["oxygen_quantity"] = $post["oxygen_quantity"];
        $client["oxygen_administered"] = $post["oxygen_administered"];

        $client["is_mobilty"] = "";
        if (isset($post["is_mobilty"])) 
            $client["is_mobilty"] = $post["is_mobilty"];

        $client["mobility_needs"] = $post["mobility_needs"];
        $client["transportation_requirements"] = $post["transportation_requirements"];
        $client["transfer_needs"] = $post["transfer_needs"];

        $client["medical_history"] = "";
        if (isset($post["medical_history"]))
            $client['medical_history'] = implode(",", $post['medical_history']);
            //$client['medical_history'] = json_encode($post['medical_history']);
            
        $client["pcd_name"] = $post["pcd_name"];
        $client["pcd_contact"] = $post["pcd_contact"];
        $client["prefered_hospital"] = $post["prefered_hospital"];
        $client["special_instructions"] = $post["special_instructions"];
        $client["linked_profile"] = $post["linked_profile"];
        //print_array($post);
        $client_id = $this->common_model->insertGetIDQuery("client", $client);

        if(isset($_FILES["croppedImage"])){
            $cropped_image = upload_blob($_FILES["croppedImage"], "client", $client_id, "/uploads/profileImages/");
             $profile_image = $this->common_model->insertGetIDQuery("media",$cropped_image);
        }
        if (!empty($profile_image)){
            $client_image = array("profile_image" => $profile_image);
            $this->common_model->updateQuery("client", "id", $client_id, $client_image);
        }
        
        if(!empty($_FILES['file']['name'])){
            $client_file = upload_file($_FILES['file'], "client", $client_id, $FILE_DIRECTORY="./uploads/agency/clients/");
            $life_directive_document = $this->common_model->insertGetIDQuery("media", $client_file);
        }
        if(!empty($life_directive_document)){
                $client_document = array(
                "life_directive_document" => $life_directive_document
                );
            $this->common_model->updateQuery("client", "id", $client_id, $client_document);
        }

        if(isset($post["firstName"])){
            foreach($post["firstName"] as $famKey=>$famVal){
                $familyArray = array();
                $familyArray["client_id"] = $client_id;
                $familyArray["first_name"] = $post["firstName"][$famKey];
                $familyArray["last_name"] = $post["lastName"][$famKey];
                $familyArray["email_address"] = $post["emailAddress"][$famKey];
                $familyArray["mobile_number"] = $post["mobileNumber"][$famKey];
                $familyArray["created_by"] = $post["agency_id"];
                $familyArray["created_at"] = date("Y-m-d H:i:s");
                $client_family_id = $this->common_model->insertGetIDQuery("client_family", $familyArray);
                $this->load->model("Email_model");
                //$this->Email_model->send_invite_to_client($post['agency_id'], $client_family_id);
            }
        }
        
        return $client_id;
    }
    

    public function update_client($post){
        $client_update = array();
        $client_update["agency_id"] = $post["agency_id"];
        $dob = $post['month'].'-'.$post['day'].'-'.$post['year'];
        $dob = DateTime::createFromFormat('M-d-Y', $dob);
        $dob = $dob->format('Y-m-d');
        $post['dob'] = $dob;
        $client_id = $post['client_id'];
        //print_array($client_id);
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
            $profile_image = $this->common_model->listingRow("id",$data->profile_image,"media");
            if (count($profile_image)>0) {
                $data->client_profile_image = $profile_image;
            }
            return $data;
        }
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
            $profile_image = $this->common_model->listingRow("id",$data->profile_image,"media");
		      if(count($profile_image)>0){
                $data->client_profile_image = $profile_image;
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