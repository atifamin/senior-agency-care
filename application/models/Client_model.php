<?php

class Client_model extends CI_Model{


    public function save_client($post){
        $dob = $post['month'].'-'.$post['day'].'-'.$post['year'];
        $dob = DateTime::createFromFormat('M-d-Y', $dob);
        $dob = $dob->format('Y-m-d');
        $post['dob'] = $dob;
        unset($post['month']);
        unset($post['day']);
        unset($post['year']);
        $client_id = $this->common_model->insertGetIDQuery("client", $post);
        if(!empty($_FILES)){
        $data = upload_file($_FILES['file'], "client", $client_id, $FILE_DIRECTORY="./uploads/agency/clients/");
        }
        if(!empty($data)){
        $this->common_model->insertGetIDQuery("media", $data);
        }
    }

    public function getAllClients(){
        return $this->common_model->listingResult("client");
    }
    public function getById($id){
        return $this->common_model->listingRow("id",$id,"client");
    }
}

?>