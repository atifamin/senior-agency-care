<?php

class Settings_model extends CI_Model
{
    /*public function update($data){
        $settingType = $data['setting_type'];
        $module = $data['module'];
        $ci=& get_instance();
        $ci->load->database();
        foreach ($data as $key => $value) {
            if ($key != 'setting_type' && $key != 'module'){
                $ci->db->set('setting_value', $value);
                $ci->db->set('updated_by', get_ActiveUserID());
                $ci->db->set('updated_at', current_TimeStamp());
                $ci->db->where('setting_name', $key);
                $ci->db->where('setting_type', $settingType);
                $ci->db->where('module', $module);
                $ci->db->update('settings');
				//echo $ci->db->last_query().'<br>';
			}
        }
    }*/
	
    /*public function get(){
		$this->db->from('settings');
		$Query = $this->db->get();
		return $Query->result();
	}*/
	
    /*public function getByTypeAndModule($setting_type,$module){
		$this->db->from('settings');
		$this->db->where('setting_type', $setting_type); 
		$this->db->where('module', $module); 
		$Query = $this->db->get();
		return $Query->result();
    }*/
	
    public function getBySettingName($setting_type,$module,$setting_name){
		$Query = $this->db->select('setting_value')
				->from('settings')
				->where('setting_type', $setting_type)
				->where('module', $module)
				->where('setting_name', $setting_name)
				->get()->row();
		return $Query->setting_value;
	}
	
	/*public function getAllModulesForModules(){
		return $this->db->where("short_name <>", "enterprise_settings")
				->order_by("sort", "ASC")
				->get("modules")
				->result();
	}*/
	
	/*public function getAllModules(){
		return $this->db->order_by("sort", "ASC")
				->get("modules")
				->result();
	}*/
	
	public function getEmailTemplateByName($templateName){
		return $this->db->from('settings')
				->where('setting_type', 'Email Templates')
				->where('module', $templateName)
				->get()->row();
	}
	
	/*public function email_templates(){
		$this->db->from('settings');
		$this->db->where('setting_type', 'Email Templates'); 
		$template = $this->db->get();
		return $template;
	}*/
	
	/*public function sms_templates(){
		$this->db->from('settings');
		$this->db->where('setting_type', 'SMS Templates'); 
		$template = $this->db->get();
		return $template;
	}*/
	
	/*public function email_templates_post($id){
		$post = $this->input->post();
		$post["setting_value"] = htmlspecialchars($post["setting_value"]);
		unset($post["files"]);
		
		$this->db->set('setting_name', $post["setting_name"]);
		$this->db->set('setting_value', $post["setting_value"]);
		$this->db->where('id', $id);
		$this->db->update('settings');
	}*/
}

?>