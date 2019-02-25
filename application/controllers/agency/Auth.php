<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function authentication(){
		$post = $this->input->post();
		$this->load->model("Auth_model");
		if(!$this->Auth_model->authentication($post['email_address'], $post['password'])){
			$this->session->set_flashdata("error", "Username doesnt exists");
			return redirect("login");
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('isAgencyLoggedIn');
		return redirect();
	}
}