<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function register(){
		
		$post = $this->input->post();
		//print_array($post);
		$this->common_model->updateQuery("client_family", "email_address", $post['email_address'], array("password"=>md5($post['password']), "status"=>"joined"));
		$familyDetail = $this->common_model->listingRow("email_address",$post['email_address'],"client_family");
		//print_array($familyDetail);
		$this->load->model("Auth_model");
		$this->Auth_model->family_auth($familyDetail->email_address, $post['password']);
	}

	public function authentication(){
		$post = $this->input->post();
		$this->load->model("Auth_model");

		if(!$this->Auth_model->family_auth($post['email_address'], $post['password'])){
			$this->session->set_flashdata("error", "Username doesnt exist");
			return redirect("family/login");
		}
	}

	public function logout(){
		$this->session->unset_userdata('isFamilyLoggedIn');
		return redirect("family/login");
	}
}