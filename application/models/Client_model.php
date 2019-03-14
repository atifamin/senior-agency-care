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
        $data = $this->common_model->listingResultWhere("linked_profile",0,"client");
        foreach($data as $key=>$val){
            $getLinkedProfile = $this->common_model->listingRow("linked_profile",$val->id,"client");
            if(count($getLinkedProfile)>0){
                $data[$key]->linked_profile_detail = $getLinkedProfile;
            }
        }
        //print_array($data);
        return $data;
    }
    public function getById($id){
        $data = $this->common_model->listingRow("id",$id,"client");
        if (count($data)>0){
            $clientDocument  = $this->common_model->listingRow("id",$data->life_directive_document,"media");
            if (count($clientDocument)>0) {
                $data->client_document_detail = $clientDocument;
            }
            $getLinkedProfile = $this->common_model->listingRow("linked_profile",$data->id,"client");
            if(count($getLinkedProfile)>0){
                $data->linked_profile_detail = $getLinkedProfile;
            }
        }
        return $data;
    }

    public function getClientFamilyById($id){
        return $this->common_model->listingResultWhere("client_id",$id,"client_family");
    }
}

?>