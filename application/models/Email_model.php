<?php

class Email_model extends CI_Model{
	
	public function send_invite_to_caregiver($agency_id, $caregiver_id){
		$random = randomString(75);
		$this->load->model("Settings_model");
		$this->load->model("Agency_model");
		$this->load->model("Caregiver_model");

		$agencyDetail = $this->Agency_model->getAgencyById($agency_id);
		$caregiverDetail = $this->Caregiver_model->getCaregiverById($caregiver_id);
		
		$template = $this->Settings_model->getEmailTemplateByName("Caregiver - Invitation");    
		$subject = $template->setting_name;
		$message = $template->setting_value;
		$subject = str_replace("[@AgencyName]",$agencyDetail->full_name,$subject);
		$message = str_replace("[@CaregiverFirstName]",$caregiverDetail->first_name,$message);
		$message = str_replace("[@CaregiverLastName]",$caregiverDetail->last_name,$message);
		$message = str_replace("[@AgencyName]",$agencyDetail->full_name,$message);
		$message = str_replace("[@JoinUrl]",site_url()."caregiver/register?id=".$random."",$message);
		sendEmail($caregiverDetail->email,$subject,$message);
		
		$this->common_model->updateQuery("caregiver", "id", $caregiver_id, array("status"=>"pending", "register_code"=>$random));
	}

	public function send_invite_to_client($agency_id, $client_family_member_id){
		
		$random = randomString(75);
		$this->load->model("Settings_model");
		$this->load->model("client_model");
		$this->load->model("Agency_model");
		$agencyDetail = $this->Agency_model->getAgencyById($agency_id);
		$clientDetail = $this->common_model->listingRow("id",$client_family_member_id,"client_family");
		$template = $this->Settings_model->getEmailTemplateByName("Client - Invitation");    
		$subject = $template->setting_name;
		$message = $template->setting_value;
		$subject = str_replace("[@AgencyName]",$agencyDetail->full_name,$subject);
		$message = str_replace("[@ClientFirstName]",$clientDetail->first_name,$message);
		$message = str_replace("[@ClientLastName]",$clientDetail->last_name,$message);
		$message = str_replace("[@AgencyName]",$agencyDetail->full_name,$message);
		$message = str_replace("[@JoinUrl]",site_url()."family/register?id=".$random."",$message);
		sendEmail($clientDetail->email_address,$subject,$message);
		
		$this->common_model->updateQuery("client_family", "id", $client_family_member_id, array("status"=>"pending", "register_code"=>$random));
	}

	public function send_calendar_view_pdf($post, $data, $file_path){
		
		$emailArray = array();
		if(count($data["caregivers"])>0){
			foreach($data["caregivers"] as $caregiver){
				$emailArray[] = $caregiver->email;
			}
		}
		$emailArray[] = $data["client_detail"]->email_address;
		$emailArray = array_filter($emailArray);
		if(count($emailArray)>0){
			foreach($emailArray as $email){
				$this->load->model("Settings_model");
				$template = $this->Settings_model->getEmailTemplateByName("Client - Appointments");
				$subject = $template->setting_name;
				$message = $template->setting_value;
				$subject = str_replace("[@RecipientName]","Adeel Ahmad",$subject);
				$message = str_replace("[@CaregiverName]","Caregiver Name Here",$message);
				sendEmail("addi.ahmad9@gmail.com",$subject,$message,$cc=null,$bcc=null,$file_path);
			}
		}
	}
    
}

?>