<?php

class Notification_model extends CI_Model {
	
	protected $table = 'notifications';
	
	public function not(){
		echo $this->table;
	}
	
}
