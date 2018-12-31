<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Raise_ticket extends Back_end {

	public function index(){
		
		$this->load->view('admin/raise_ticket');
		$this->load->view('admin/footer');
		
	}
	
}
