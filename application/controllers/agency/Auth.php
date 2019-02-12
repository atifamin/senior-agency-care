<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function authentication(){
		$post = $this->input->post();
		$email_address = $this->input->post('email_address');
		$Password = $this->input->post('password');
		$this->load->model("Auth_model");
		if(!$this->Auth_model->authentication($email_address, $Password)){
			$this->session->set_flashdata("error", "Username doesnt exists");
			return redirect("login");
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('isAgencyLoggedIn');
		return redirect();
	}
}