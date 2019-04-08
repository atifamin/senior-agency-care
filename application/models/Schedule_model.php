<?php

class Schedule_model extends CI_Model{

	public function edit_client_schedule($post){
		$data['client_id'] = $post['client_id'];
		$data['result'] = $this->common_model->listingRow("id",$post['id'],"client_appointements");
		$data['relationshipDetails'] = $this->Client_model->clientRelationshipDetailById($post['client_id']);
		$data['client'] = $this->Client_model->getById($post['client_id']);
		$data['caregivers'] = $this->Caregiver_model->getCaregiverByAgencyId($this->agency_id);
		$data['assignedCargivers'] = $this->common_model->listingResultWhere("client_id",$post['client_id'],"client_caregiver_relationship");
		$data['appointement_id'] = $post['id'];
		return $data;
	}

	public function delete_appointement($post){
		$result = $this->common_model->listingRow("id",$post["appointement_id"],"client_appointements");
		if($result->parent_id==0){
			$this->common_model->delete("client_appointements", array("parent_id"=>$post["appointement_id"]));
		}
		$this->common_model->delete("client_appointements", array("id"=>$post["appointement_id"]));
	}

	public function add_new_medication($post){
		$result = $post;
		$result['agency_id'] = $post['agency_id'];
		$result['created_by'] = $post['agency_id'];
		$result['created_at'] = date('Y-m-d H:i:s');
		if (isset($post['day_period_time'])) {
			$result['day_period_time'] = json_encode($post['day_period_time']);
		}
		$this->common_model->insertGetIDQuery("client_medication_list", $result);
		$data['medication_detail'] = $this->common_model->listingResultWhere('client_id',$post['client_id'],"client_medication_list");
		$data['client_id'] = $post['client_id'];
		return $data;
	}

	public function load_calendar($post){
		$data['events'] = $this->Client_model->load_client_appointement_events($post['client_id']);
		$data['client_id'] = $post['client_id'];
		return $data;
	}

	public function assign_caregiver($post){
		$caregivers = explode(",", $post["caregivers_id"]);
		$client_id = $post['client_id'];
		foreach($caregivers as $caregiver_id){
			$checkIfCaregiverAssigned = $this->common_model->listingMultipleWhereRow("client_caregiver_relationship", array("client_id"=>$client_id, "caregiver_id"=>$caregiver_id));
			if(count($checkIfCaregiverAssigned)<=0){
				$this->common_model->insertQuery("client_caregiver_relationship", array(
					"client_id"	=>	$client_id,
					"caregiver_id"	=>	$caregiver_id
				));
			}
		}
		$data['assignedCargivers'] = $this->common_model->listingResultWhere("client_id",$client_id,"client_caregiver_relationship");
		return $data;
	}

	public function load_assign_caregiver($post){
		$client_id = $post["client_id"];
		$assignedCargivers = $this->common_model->listingResultWhere("client_id",$client_id,"client_caregiver_relationship");
		$assigCaregiver = array();
		if(count($assignedCargivers)>0){
			foreach($assignedCargivers as $row){
				$assigCaregiver[] = $row->caregiver_id;
			}
		}
		$data["assignedCargivers"] = $assigCaregiver;
		$data['caregivers'] = $this->Caregiver_model->getCaregiverByAgencyId($this->agency_id);
		return $data;
	}

	public function delete_assigned_caregiver($post){
		$id = $post["id"];
		$relationship = $this->common_model->listingRow("id",$id,"client_caregiver_relationship");
		$whereArray = array(
			"client_id"=>$relationship->client_id,
			"caregiver_id"=>$relationship->caregiver_id,
		);
		$this->common_model->delete("client_appointements", $whereArray);
		$this->common_model->delete("client_caregiver_relationship", array("id"=>$id));
	}

	public function delete_medication($medicationId){
		$data['result'] = $this->common_model->delete("client_medication_list",array('id'=>$medicationId));
	}

	public function edit_medication($medicationId){
		$result = $this->common_model->listingRow("id",$medicationId,"client_medication_list");
		$data['result'] = $result;
		$client_id = $result->client_id;
		$data['client'] = $this->common_model->listingRow("id",$client_id,"client");
		return $data;
	}

	public function update_medication_list($post){
		$mediData = $post;
		unset($mediData['medication_id']);
		$mediData['updated_by'] = $post['agency_id'];
		$mediData['updated_at'] = date("Y-m-d H:i:s");
		if ($post['day_period_time']) {
			$mediData['day_period_time'] = json_encode($post['day_period_time']);
		}
		$this->common_model->updateQuery("client_medication_list", "id", $post['medication_id'], $mediData);
		$medication_detail = $this->common_model->listingRow("id",$post['medication_id'],"client_medication_list");
		$data['medication_detail'] = $this->common_model->listingResultWhere('client_id',$medication_detail->client_id,"client_medication_list");
		$data['client_id'] = $medication_detail->client_id;
		return $data;
	}

	public function add_appointment_calender($post){
		$post['agency_id'] = $post['agency_id'];
		$post['created_by'] = $post['agency_id'];
		$post['created_at'] = date('Y-m-d H:i:s');
		$date = $this->input->post('appointment_date');
		$post['appointment_date'] = date('Y-m-d H:i:s',strtotime($date));
		//print_array($post);
 		// 	$input_date = $this->input->post('from_date');
		// $date = explode("-", $input_date);
		// $post['from_date'] = date("Y-m-d H:i:s",strtotime($date[0]));
		// $post['to_date'] = date("Y-m-d H:i:s",strtotime($date[1]));
		$this->common_model->insertGetIDQuery("client_appointment_calender", $post);
		$data['appointment_detail'] = $this->common_model->listingResultWhere("client_id",$post['client_id'],"client_appointment_calender");
		$data['client_id'] = $post['client_id'];
		return $data;
	}

	public function edit_appointment_calender($appointment_id){
		$result = $this->common_model->listingRow("id",$appointment_id,"client_appointment_calender");
		$data['result'] = $result;
		$client_id = $result->client_id;
		$data['client'] = $this->common_model->listingRow('id',$client_id,'client');
		return $data;
	}

	public function delete_appointment_calender($appointment_id){
		$this->common_model->delete("client_appointment_calender", array('id'=>$appointment_id));
	}

	public function update_appointment_calender($post){
		$appData = $post;
		unset($appData['appointment_id']);
		$appData['agency_id'] = $post['agency_id'];
		$appData['updated_by'] = $post['agency_id'];
		$date = $this->input->post('appointment_date');
		$appData['appointment_date'] = date('Y-m-d H:i:s',strtotime($date));
		// $input_date = $this->input->post('from_date');
		// $date = explode("-", $input_date);
		// $appData['from_date'] = date("Y-m-d H:i:s",strtotime($date[0]));
		// $appData['to_date'] = date("Y-m-d H:i:s",strtotime($date[1]));
		$this->common_model->updateQuery("client_appointment_calender", "id",$post['appointment_id'], $appData);
		$appointment_detail = $this->common_model->listingRow("id",$post['appointment_id'],"client_appointment_calender");
		$data['appointment_detail'] = $this->common_model->listingResultWhere('client_id',$post['client_id'],'client_appointment_calender');
		$data['client_id'] = $appointment_detail->client_id;
		return $data;
	}

	public function add_client_dietry_needs($post){
		$dietry_needs = $post;
		$id = $this->input->post('dietry_needs_id');
		unset($dietry_needs['dietry_needs_id']);
		$dietry_needs['agency_id'] = $post['agency_id'];
		$dietry_needs['created_by'] = $post['agency_id'];
		$dietry_needs['created_at'] = date('Y-m-d H:i:s');
		if ($post['dietry_needs_id'] !=0) {
			$this->common_model->updateQuery("client_dietry_needs", "id", $post['dietry_needs_id'],$dietry_needs);
		}else{
			$this->common_model->insertGetIDQuery("client_dietry_needs", $dietry_needs);
		}
 		$data['dietry_needs_detail'] = $this->common_model->listingRow("client_id",$post['client_id'],"client_dietry_needs");
		$data['client_id'] = $post['client_id'];
		return $data;
	}

	public function add_vital_report($post){
		$data=$post;
		$input_date = $this->input->post('from_date');
		$date = explode(" - ", $input_date);
		$post['from_date'] = date("Y-m-d H:i:s", strtotime($date[0]));
		$post['to_date'] = date("Y-m-d H:i:s", strtotime($date[1]));
		//$post['agency_id'] = $post['agency_id'];
		$ddd = $this->common_model->insertGetIDQuery("client_vital_reports", $post);
		$data['vital_report_details'] = $this->common_model->listingResultWhere('client_id',$post['client_id'],"client_vital_reports");
		$data['client_id'] = $post['client_id'];
		return $data;
	}

	public function edit_vital_reports($vitalReportId){
		$result = $this->common_model->listingRow("id",$vitalReportId,"client_vital_reports");
		$data['result'] = $result;
		$client_id = $result->client_id;
		$data['client'] = $this->common_model->listingRow('id',$client_id,'client');
		return $data;
	}

	public function update_vital_reports($post){
		$reportData = $post;
		unset($reportData['report_id']);

		if (isset($reportData['is_bloodpressure'])) {
			$reportData['is_bloodpressure'] = 1;
		}else{
			$reportData['is_bloodpressure'] = 0;
		}
		if (isset($reportData['is_breathing'])) {
			$reportData['is_breathing'] = 1;
		}else{
			$reportData['is_breathing'] = 0;
		}
		if (isset($reportData['is_pulse'])) {
			$reportData['is_pulse'] = 1;
		}else{
			$reportData['is_pulse'] = 0;
		}
		if (isset($reportData['is_temprature'])) {
			$reportData['is_temprature'] = 1;
		}else{
			$reportData['is_temprature'] = 0;
		}
		$input_date = $this->input->post('from_date');
		$date = explode('-', $input_date);
		$reportData['from_date'] = date("Y-m-d H:i:s", strtotime($date[0]));
		$reportData['to_date'] = date("Y-m-d H:i:s", strtotime($date[1]));
		$reportData['updated_by'] = $this->agency_id;
		$reportData['updated_at'] = date("Y-m-d H:i:s");
		$this->common_model->updateQuery("client_vital_reports", "id", $post['report_id'], $reportData);
		$vital_report_details = $this->common_model->listingRow("id", $post['report_id'], "client_vital_reports");
		$data['vital_report_details'] = $this->common_model->listingResultWhere('client_id', $vital_report_details->client_id, "client_vital_reports");
        $data['client_id'] = $vital_report_details->client_id;
        return $data;
	}

	public function delete_vital_reports($vitalReportId){
		$data['result'] = $this->common_model->delete("client_vital_reports",array('id'=>$vitalReportId));
	}

	public function add_new_shopping($post){
		$data = array();
		$data['agency_id'] = $post['agency_id'];
		$data['created_by'] = $post['agency_id'];
		$data['created_at'] = date('Y-m-d H:i:s');
		$data['client_id'] = $post['client_id'];
		$data['status'] = $post['status'];
		$data['list_detail'] = "";
		if(isset($post['list_detail'])){
			$data['list_detail'] = json_encode($post['list_detail']);
			//$data['list_detail'] = implode(",", $post['list_detail']);
		}
		$shopping_list_id = $this->common_model->insertGetIDQuery("client_shopping_list", $data);
		if (!empty($_FILES['file']['name'])) {
			$client_shopping_file = upload_file($_FILES['file'], "client_shopping_list", $shopping_list_id, $FILE_DIRECTORY="./uploads/agency/clients/");
			$list_file = $this->common_model->insertGetIDQuery('media',$client_shopping_file);
		}
		if (!empty($list_file)) {
			$this->common_model->updateQuery("client_shopping_list", "id", $shopping_list_id,array('list_file'=>$list_file));
		}
		$detail['shopping_list_detail'] = $this->common_model->listingResultWhere('client_id',$post['client_id'],"client_shopping_list");
		$detail['client_id'] = $post['client_id'];
		return $detail;
	}

	public function edit_shopping($shopping_id){
		$result = $this->common_model->listingRow('id',$shopping_id,"client_shopping_list");
		$data["result"] = $result;
		$client_id = $result->client_id;
		$data['client'] = $this->common_model->listingRow('id',$client_id,'client');
		return $data;
	}

	public function update_shopping($post){
		$data = array();
		unset($data['shopping_id']);
		$data['updated_by'] = $post['agency_id'];
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['status'] = $post['status'];
 		$data['list_detail'] = "";
		if (isset($post['list_detail'])) {
			$data['list_detail'] = json_encode($post['list_detail']);
		}
 		$shopping_list_id = $this->common_model->updateQuery("client_shopping_list", 'id',$post['shopping_id'] , $data);
 		$shopping_list_detail = $this->common_model->listingRow("id",$post['shopping_id'],"client_shopping_list");
 		$data['shopping_list_detail'] = $this->common_model->listingResultWhere('client_id',$shopping_list_detail->client_id,"client_shopping_list");
		$client_id = $shopping_list_detail->client_id;
		
		if (!empty($_FILES['file']['name'])) {
			$client_shopping_file = upload_file($_FILES['file'], "client_shopping_list", $shopping_list_id, $FILE_DIRECTORY="./uploads/agency/clients/");
			$list_file = $this->common_model->insertGetIDQuery('media',$client_shopping_file);
		}
		return $data;
	}

	public function delete_shopping($shopping_id){
		$this->common_model->delete('client_shopping_list', array('id'=>$shopping_id));
	}

	public function client_bio_form($post){
		$bioData = $post;
		$id = $post['client_bio_id'];
		unset($bioData['client_bio_id']);
		$bioData['agency_id'] = $post['agency_id'];
		if($post['client_bio_id']!=0){
			$this->common_model->updateQuery("client_bio", "id", $post['client_bio_id'],$bioData);
		}else{
			$id = $this->common_model->insertGetIDQuery("client_bio", $bioData);
		}
		$data['client_bio'] = $this->common_model->listingRow("client_id",$post['client_id'],"client_bio");
		$data['client_id'] = $post['client_id'];
		$data['client'] = $this->Client_model->getById($post['client_id']);
		return $data;
	}

	public function delete_client_bio($id){
		$client_id = $this->input->post("client_id");
		$this->common_model->delete("client_bio", array('id'=>$id));
		$data['client_bio'] = $this->common_model->listingRow("id",$id,"client_bio");
		$data['client_id'] = $client_id;
		$data['client'] = $this->Client_model->getById($client_id);
		return $data;
	}

}

?>