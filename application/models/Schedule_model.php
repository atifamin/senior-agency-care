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
		$result['agency_id'] = $this->agency_id;
		$result['created_by'] = $this->agency_id;
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
		$mediData['updated_by'] = $this->agency_id;
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
		$post['agency_id'] = $this->agency_id;
		$post['created_by'] = $this->agency_id;
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
		$data['client'] =$this->common_model->listingRow('id',$client_id,'client');
		return $data;
	}

	public function delete_appointment_calender($appointment_id){
		$this->common_model->delete("client_appointment_calender", array('id'=>$appointment_id));
	}

	public function update_appointment_calender($post){
		$appData = $post;
		unset($appData['appointment_id']);
		$appData['agency_id'] = $this->agency_id;
		$appData['updated_by'] = $this->agency_id;
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
		$dietry_needs['agency_id'] = $this->agency_id;
		$dietry_needs['created_by'] = $this->agency_id;
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

}

?>