<?php

class Schedule_model extends CI_Model{

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
	
}

?>