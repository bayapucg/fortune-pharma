<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Instruments extends Back_end {

	public function index()
	{
		if($this->session->userdata('multi_details'))
		{
			$this->load->view('admin/instruments');
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function lists()
	{
		if($this->session->userdata('multi_details'))
		{	
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/instruments-list');
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	
}
