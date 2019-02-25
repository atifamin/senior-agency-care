<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function register(){
		$post = $this->input->post();
		$this->common_model->updateQuery("caregiver", "email", $post['email'], array("password"=>md5($post['password']), "status"=>"joined"));
		$caregiverDetail = $this->common_model->listingRow("email",$post['email'],"caregiver");
		
		$this->load->model("Auth_model");
		$this->Auth_model->caregiver_auth($caregiverDetail->email, $post['password']);
	}
	
	public function authentication(){
		$post = $this->input->post();
		$this->load->model("Auth_model");
		
		if(!$this->Auth_model->caregiver_auth($post['email'], $post['password'])){
			$this->session->set_flashdata("error", "Username doesnt exists");
			return redirect("caregiver/login");
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('isCaregiverLoggedIn');
		return redirect('caregiver/login');
	}
}