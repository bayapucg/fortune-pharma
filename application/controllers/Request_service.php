<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Request_service extends Back_end {

	public function index(){
		
		$this->load->view('admin/request_service');
		$this->load->view('admin/footer');
		
	}
	
}
