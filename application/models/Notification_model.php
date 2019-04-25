<?php

class Notification_model extends CI_Model {
	
	public function add_new_medication($post){	
		$agency_detail = $this->common_model->listingRow("id",$post['agency_id'],"agency");	
		$result['module'] = "medication_list";
		$result['module_id'] = $post['client_id'];
		$result['module_type'] = "add_new_medication";
		$result['effected_table'] = "client_medication_list";
		$result['effected_row'] = $post['medication_id'];
		$result['notification_by'] = $post['agency_id'];
		$result['notification_to'] = $post['client_id'];
		$result['description'] = '<a href="<?php echo site_url("agency/profile"); ?>">'.$agency_detail->full_name.' </a> Create new Medication to <a href="<?php echo site_url("agency/profile"); ?>">'.$agency_detail->full_name.'</a>';
		$result['created_at'] = date('Y-m-d H:i:s');
		$data = $this->common_model->insertGetIDQuery("notifications", $result);
		return $data;
	}
	public function update_medication_list($post){
		$agency_detail = $this->common_model->listingRow("id",$post['agency_id'],"agency");	
		$result['module'] = "medication_list";
		$result['module_id'] = $post['client_id'];
		$result['module_type'] = "Update_medication_list";
		$result['effected_table'] = "client_medication_list";
		$result['effected_row'] = $post['medication_id'];
		$result['notification_by'] = $post['agency_id'];
		$result['notification_to'] = $post['client_id'];
		$result['description'] = $agency_detail->full_name." update Medication list";
		$result['created_at'] = date('Y-m-d H:i:s');
		$data = $this->common_model->insertGetIDQuery("notifications", $result);
		return $data;
	}
	public function add_new_shopping($post){
		$agency_detail = $this->common_model->listingRow("id",$post['agency_id'],"agency");	
		$result['module'] = "shopping_list";
		$result['module_id'] = $post['client_id'];
		$result['module_type'] = "add_new_Shopping";
		$result['effected_table'] = "client_shopping_list";
		$result['effected_row'] = $post['shopping_list_id'];
		$result['notification_by'] = $post['agency_id'];
		$result['notification_to'] = $post['client_id'];
		$result['description'] = $agency_detail->full_name." Create new Shopping List ";
		$result['created_at'] = date('Y-m-d H:i:s');

		$data = $this->common_model->insertGetIDQuery("notifications", $result);
		return $data;
	}
	public function update_shopping($post){
		$agency_detail = $this->common_model->listingRow("id",$post['agency_id'],"agency");	
		$result['module'] = "shopping_list";
		$result['module_id'] = $post['client_id'];
		$result['module_type'] = "update_Shopping_list";
		$result['effected_table'] = "client_shopping_list";
		$result['effected_row'] = $post['shopping_id'];
		$result['notification_by'] = $post['agency_id'];
		$result['notification_to'] = $post['client_id'];
		$result['description'] = $agency_detail->full_name." update Shopping List ";
		$result['created_at'] = date('Y-m-d H:i:s');
		$data = $this->common_model->insertGetIDQuery("notifications", $result);
		return $data;
	}
	public function add_vital_report($post){
		$agency_detail = $this->common_model->listingRow("id",$post['agency_id'],"agency");	
		$result['module'] = "vital_report";
		$result['module_id'] = $post['client_id'];
		$result['module_type'] = "add_new_vital_report";
		$result['effected_table'] = "client_vital_reports";
		$result['effected_row'] = $post['vital_report_id'];
		$result['notification_by'] = $post['agency_id'];
		$result['notification_to'] = $post['client_id'];
		$result['description'] = $agency_detail->full_name." Create new Vital Report ";
		$result['created_at'] = date('Y-m-d H:i:s');

		$data = $this->common_model->insertGetIDQuery("notifications", $result);
		return $data;
	}
	public function update_vital_reports($post){
		$agency_detail = $this->common_model->listingRow("id",$post['agency_id'],"agency");	
		$result['module'] = "vital_report";
		$result['module_id'] = $post['client_id'];
		$result['module_type'] = "update_vital_report";
		$result['effected_table'] = "client_vital_reports";
		$result['effected_row'] = $post['report_id'];
		$result['notification_by'] = $post['agency_id'];
		$result['notification_to'] = $post['client_id'];
		$result['description'] = $agency_detail->full_name." update Vital Report ";
		$result['created_at'] = date('Y-m-d H:i:s');

		$data = $this->common_model->insertGetIDQuery("notifications", $result);
		return $data;
	}
	public function add_appointment_calender($post){
		$agency_detail = $this->common_model->listingRow("id",$post['agency_id'],"agency");	
		$result['module'] = "appointment_calender";
		$result['module_id'] = $post['client_id'];
		$result['module_type'] = "add_new_appointment_calender";
		$result['effected_table'] = "client_appointment_calender";
		$result['effected_row'] = $post['appointment_calender_id'];
		$result['notification_by'] = $post['agency_id'];
		$result['notification_to'] = $post['client_id'];
		$result['description'] = $agency_detail->full_name." Create new client appointment calender ";
		$result['created_at'] = date('Y-m-d H:i:s');

		$data = $this->common_model->insertGetIDQuery("notifications", $result);
		return $data;
	}
	public function update_appointment_calender($post){
		$agency_detail = $this->common_model->listingRow("id",$post['agency_id'],"agency");	
		$result['module'] = "appointment_calender";
		$result['module_id'] = $post['client_id'];
		$result['module_type'] = "update_appointment_calender";
		$result['effected_table'] = "client_appointment_calender";
		$result['effected_row'] = $post['appointment_id'];
		$result['notification_by'] = $post['agency_id'];
		$result['notification_to'] = $post['client_id'];
		$result['description'] = $agency_detail->full_name." update client appointment calender ";
		$result['created_at'] = date('Y-m-d H:i:s');

		$data = $this->common_model->insertGetIDQuery("notifications", $result);
		return $data;
	}
	public function client_bio_form($post){
		$agency_detail = $this->common_model->listingRow("id",$post['agency_id'],"agency");	
		$result['module'] = "client_bio";
		$result['module_id'] = $post['client_id'];
		$result['module_type'] = "add_new_client_bio";
		$result['effected_table'] = "client_bio";
		$result['effected_row'] = $post['client_bio_id'];
		$result['notification_by'] = $post['agency_id'];
		$result['notification_to'] = $post['client_id'];
		$result['description'] = $agency_detail->full_name." add new client bio ";
		$result['created_at'] = date('Y-m-d H:i:s');

		$data = $this->common_model->insertGetIDQuery("notifications", $result);
		return $data;
	}
	public function add_client_dietry_needs($post){
		$agency_detail = $this->common_model->listingRow("id",$post['agency_id'],"agency");	
		$result['module'] = "dietry_needs";
		$result['module_id'] = $post['client_id'];
		$result['module_type'] = "add_new_dietry_needs";
		$result['effected_table'] = "client_dietry_needs";
		$result['effected_row'] = $post['dietry_needs_id'];
		$result['notification_by'] = $post['agency_id'];
		$result['notification_to'] = $post['client_id'];
		$result['description'] = $agency_detail->full_name." add new client Dietry Needs ";
		$result['created_at'] = date('Y-m-d H:i:s');

		$data = $this->common_model->insertGetIDQuery("notifications", $result);
		return $data;
	}
	public function add_client_appointement($post){
		$agency_detail = $this->common_model->listingRow("id",$post['agency_id'],"agency");	
		$result['module'] = "schedule";
		$result['module_id'] = $post['client_id'];
		$result['module_type'] = "add_new_appointment";
		$result['effected_table'] = "client_appointements";
		//$result['effected_row'] = $post[''];
		$result['notification_by'] = $post['agency_id'];
		$result['notification_to'] = $post['caregiver_id'];
		$result['description'] = $agency_detail->full_name." Create new appointment schedule";
		$result['created_at'] = date('Y-m-d H:i:s');

		$data = $this->common_model->insertGetIDQuery("notifications", $result);
		return $data;
	}
	public function switch_appointment_shift($post){

	}
	
}
