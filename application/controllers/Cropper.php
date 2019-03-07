<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cropper extends CI_Controller {
	public function index(){
		$this->load->view("plugins/ImageCropper/image_cropper");
	}
}