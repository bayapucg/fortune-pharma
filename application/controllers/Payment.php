<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Payment extends Back_end {

	public function index(){
		
		$this->load->view('admin/payment');
		$this->load->view('admin/footer');
		
	}
	
}
