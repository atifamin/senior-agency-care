<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_controller{

	public function register(){
		$post = $this->input->post();
		$this->common_model->updateQuery("family", "email", $post['email'], array("password"=>md5($post['password']), "status"=>"joined"));
		$familyDetail = $this->common_model->listingRow("email",$post['email'],"family");

		$this->load->model("Auth_model");
		$this->Auth_model->family_auth($familyDetail->email, $post['password']);
	}

	public function authentication(){
		$post = $this->input->post();
		$this->load->model("Auth_model");

		if(!$this->Auth_model->family_auth($post['email'], $post['password'])){
			$this->session->set_flashdata("error", "Username doesnt exist");
			return redirect("family/login");
		}
	}

	public function logout(){
		$this->session->unset_userdata('isFamilyLoggedIn');
		return redirect("family/login");
	}
}