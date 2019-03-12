<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("isAgencyLoggedIn")){
			redirect("login");
		}

    	//LoggedIn User ID
		$userSession = $this->session->userdata("isAgencyLoggedIn");
		$this->agency_id = $userSession['user_id'];
		$this->load->model("Client_model");
	}
	
	public function index(){
		$data["breadcrumb"] = "Clients";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "clients";
		$data["clients"] = $this->Client_model->getAllClients();
		$this->load->view("agency/clients/index",$data);
	}

	public function add_client(){
		$data["breadcrumb"] = "Add Client";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "add_caregivers";
		$this->load->view("agency/clients/add_client",$data);
	}

	public function save_client(){
		$post = $this->input->post();
		// print_array($post);
		$post['agency_id'] = $this->agency_id;
		$this->Client_model->save_client($post);
		echo 1;
	}

	public function client_profile($id){
		$data["breadcrumb"] = "Client";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "clients";
		$data["client"] = $this->Client_model->getById($id);
		$data["client_family"] = $this->Client_model->getClientFamilyById($id);
		$this->load->view("agency/clients/client_profile",$data);
	}

	public function add_send_invite(){
		$post = $this->input->post();
		$data['client_id'] = $this->common_model->insertGetIDQuery("client_family", $post);
		
		$this->send_invite($data['client_id']);
		$this->load->view("agency/clients/append_send_invite.php",$data);
	}
	public function send_invite($client_id){
		
		$this->load->model("Email_model");
		$this->Email_model->send_invite_to_client($this->agency_id, $client_id);
		//$this->session->set_flashdata("success", "Your invitation is sent to Client successfully.");
		//return redirect("agency/client/send_invite_to_caregiver");
		//echo 1;
	}

	public function edit_client($id){
		$data["breadcrumb"] = "Client";
		$data["heading"] = "Edit Client";
		$data["url_segment"] = "clients";
		$data["client"] = $this->Client_model->getById($id);
		$this->load->view("agency/clients/edit_client",$data);
	}

	public function update_client(){
		$post = $this->input->post();
		$post['agency_id'] = $this->agency_id;
		$this->Client_model->update_client($post);
		echo 1;
	}

	public function addMoreFamilyMember(){
		$post = $this->input->post();
		$this->load->view("agency/clients/add_more_familyMember",$post);
	}

	public function editMoreFamilyMember(){
		$post = $this->input->post();
		$this->load->view("agency/clients/edit_more_family_member",$post);
	}
}