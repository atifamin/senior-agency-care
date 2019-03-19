<?php

class Client_model extends CI_Model{


    public function save_client($post){
        
        $client = array();
        $client["agency_id"] = $post["agency_id"];
        //print_array($post);
        $client_id = $this->common_model->insertGetIDQuery("client", $client);

        if(isset($_FILES["croppedImage"])){
            $cropped_image = upload_blob($_FILES["croppedImage"], "client", $client_id, "/uploads/profileImages/");
             $profile_image = $this->common_model->insertGetIDQuery("media",$cropped_image);
        }
        if (!empty($profile_image)){
            $client_image = array('profile_image' => $profile_image);
            $this->common_model->update_query("client", "id", $client_id, $client_image);
        }
        
        if(isset($_FILES['file'])){
            $data = upload_file($_FILES['file'], "client", $client_id, $FILE_DIRECTORY="./uploads/agency/clients/");
            $life_directive_document = $this->common_model->insertGetIDQuery("media", $data);
        }
        if(!empty($life_directive_document)){
                $client_document = array(
                "life_directive_document" => $life_directive_document
                );
            $this->common_model->updateQuery("client", "id", $client_id, $client_document);                                                                 
        }
        print_array($post);


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
}

?>