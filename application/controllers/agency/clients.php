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
		$data["clients"] = $this->Client_model->getAllClients($this->agency_id);
		$this->load->view("agency/clients/index",$data);
	}

	public function add_client(){
		$data["breadcrumb"] = "Add Client";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "add_caregivers";
		$data['linked_id'] = 0;
		if($this->input->get("linked")){
			$data['linked_id'] = $this->input->get("linked");
		}
		$this->load->view("agency/clients/add_client",$data);
	}

	public function save_client(){
		$post = $this->input->post();
		//print_array($post);
		$post['agency_id'] = $this->agency_id;
		$client_id = $this->Client_model->save_client($post);
		$data = array(
					"status"=>"success",
					"is_linked_profile"=>$post["linked_profile"],
					"linked_with_id"=>$client_id
		);
		$message = "You have added client succesfully.";
		if($post["linked_profile"]==1){
			$message = "Please Enter Second Client Detail";
			$this->session->set_flashdata("success", $message);
		}

		if($post['linked_id']!=0){
			$first_client_id = $post['linked_id'];
			$second_client_id = $client_id;
			//$this->common_model->updateQuery("client", "id", $first_client_id, array("linked_profile"=>$second_client_id));
			//$this->common_model->updateQuery("client", "id", $second_client_id, array("linked_profile"=>$first_client_id));
			$this->common_model->insertQuery("client_relationship", array("client_id"=>$first_client_id, "linked_id"=>$second_client_id));
		}
		echo json_encode($data);
	}


	public function profile($id){
		$data["breadcrumb"] = "Client";
		$data["heading"] = "Our Clients";
		$data["url_segment"] = "clients";

		$data["client_detail"] = $this->Client_model->clientRelationshipDetailById($id);
		$data["client_family"] = $this->Client_model->getClientFamilyById($id);
		$this->load->view("agency/clients/profile",$data);
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
		$data["client_family"] = $this->Client_model->getClientFamilyById($id);
		$this->load->view("agency/clients/edit_client",$data);
	}

	public function update_client(){
		$post = $this->input->post();
		//print_array($post);
		$post['agency_id'] = $this->agency_id;
		$this->Client_model->update_client($post);
		echo 1;
	}
	public function add_client_family(){
		$post = $this->input->post();
		print_array($post);
	}
	
	public function addFamilyMember(){
		$post = $this->input->post();
		//print_array($post);
		$family_id = $this->common_model->insertGetIDQuery("client_family", $post);
		//$this->common_model->updateQuery("client", "id", $family_id, $post);
		$post['family_id'] = $family_id;
		$this->load->view('agency/clients/append_new_family_member',$post);
	}
	public function edit_family_member(){
		$id = $this->input->post("id");
		$data['result'] = $this->common_model->listingRow("id",$id,"client_family");
		//print_array($data['result']);
		$this->load->view('agency/clients/edit_family_member',$data);
	}
	public function updateFamilyMember(){
		$post = $this->input->post();
		//print_array($post);
		$id = $post['id'];
		//print_array($id);
		$this->common_model->update_query("client_family", $post, "id", $id);
		$data['result'] = $this->common_model->listingRow("id",$id,"client_family");
		$this->load->view('agency/clients/family_member_view',$data);
	}	
	public function delete_family_member(){
		$id = $this->input->post("id");
		$this->common_model->delete("client_family", array("id"=>$id));
	}
	public function addMoreFamilyMember(){
		$post = $this->input->post();
		$this->load->view("agency/clients/add_more_familyMember",$post);
	}

	public function editMoreFamilyMember(){
		$post = $this->input->post();
		$this->load->view("agency/clients/edit_more_family_member",$post);
	}

	public function checkEmailAddress(){
		$post = $this->input->post();

		$result = $this->common_model->listingRow("email_address",$post['email_address'],$post['tableName']);
		if(count($result) > 0){
			echo 0;
		}else{
		 echo	1;
		}
	}
}