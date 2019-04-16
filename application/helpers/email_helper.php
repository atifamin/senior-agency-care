<?php

function sendEmail($to,$subject,$message,$cc=null,$bcc=null,$attachment=null,$reply_to=null,$from=null,$unsub=null){
	$ci=& get_instance();
	$ci->load->database();
	$ci->load->model('settings_model');
	$ci->load->model('common_model');
	$smtp_server_name 		= $ci->settings_model->getBySettingName('Enterprise Settings','Email Settings','smtp_server_name');
	$smtp_port_number 		= $ci->settings_model->getBySettingName('Enterprise Settings','Email Settings','smtp_port_number');
	$smtp_username   		= $ci->settings_model->getBySettingName('Enterprise Settings','Email Settings','smtp_username');
	$smtp_password    		= $ci->settings_model->getBySettingName('Enterprise Settings','Email Settings','smtp_password');
	$smtp_security    		= $ci->settings_model->getBySettingName('Enterprise Settings','Email Settings','smtp_security');
	$email_signature  	  	= $ci->settings_model->getBySettingName('Enterprise Settings','Email Settings','email_signature');
	$disclaimer  	  		= $ci->settings_model->getBySettingName('Enterprise Settings','Email Settings','disclaimer');
	//$unsubscribe  	  		= $ci->settings_model->getBySettingName('Enterprise Settings','Email Settings','unsubscribe');
	
	//error_reporting(0);
	$email_obj=& get_instance();
	$email_obj->load->library('Email');
	$config['protocol']     = 'mail';
	/*$config['smtp_host']    = $smtp_server_name;
	$config['smtp_port']    = $smtp_port_number;
	$config['smtp_user']    = $smtp_username;
	$config['smtp_pass']    = $smtp_password;*/
	$config['charset']      = 'utf-8';
	$config['newline']      = "\r\n";
	$config['mailtype']     = 'html'; // or html
	$config['validation']   =  TRUE; // bool whether to validate email or not 

	//setup SSL if have
	if ($smtp_security!='none')
		$config['smtp_crypto']  = $smtp_security;
	$email_obj->email->initialize($config);
	if($from != null){
	$email_obj->email->from($from, 'Senior Care Agency');
	}else{
	$email_obj->email->from("info@seniorcare.com", 'Senior Care Agency');
	}
	$email_obj->email->to($to); //send email to active user
	$email_obj->email->subject($subject);
	if($reply_to!=null){
		$email_obj->email->reply_to($reply_to, 'Senior Care Agency');
	}
	$message = $message;
	/*$message .= $email_signature.'<br><br>';
	$message .= $disclaimer;
	$unsubscribe = str_replace("[@unsubscribe_link]", site_url("unsubscribe"), $unsubscribe);
	$message .= $unsubscribe;*/
	
	$email_obj->email->message($message);

	if(is_array($attachment)){
		
		foreach($attachment as $atach){
			$email_obj->email->attach($atach);
		}
	}else
	if($attachment!=null){
		$email_obj->email->attach($attachment);
	}
	
	$emailSent = $email_obj->email->send();  // if 1 means email sent
	
	if($emailSent){
		$response = 'Sent';
	}else{
		$response = implode('<br>',$email_obj->email->_debug_msg);
	}
	/* 
		insert into email_logs
	*/
	$isLoggedIn = $ci->session->userdata('isLoggedIn');
	$user_id = $isLoggedIn["user_id"];
	$data["to"] = $to;
	$data["cc"] = $cc;
	$data["bcc"] = $bcc;
	$data["subject"] = $subject;
	$data["body"] = $message;
	$data["response"] = $response;
	$data["created_by"] = $user_id;
	$data["created_at"] = date("Y-m-d H:i:s");

	$ci->common_model->insertQuery("email_logs", $data);
	
	if ($emailSent==1)
		return 1;
	else{
		$errorMessage = "I am sorry but intupro couldn't send an email out using the SMTP settings you have entered. Please check your SMTP settings and try again.";
		$ci->session->set_flashdata("error", $errorMessage);
		return 0;	
	}
}

?>