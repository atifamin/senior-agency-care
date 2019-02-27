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
		//sendEmail($caregiverDetail->email,$subject,$message);
		
		$this->common_model->updateQuery("caregiver", "id", $caregiver_id, array("status"=>"pending", "register_code"=>$random));
	}
    
}

?>