<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back_end extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->library('zend');
		$this->load->model('Admin_model');
	
			if($this->session->userdata('multi_details'))
			{
				$multi_details=$this->session->userdata('multi_details');
				$data['details']=$this->Admin_model->get_admin_details($multi_details['id']);
				$data['logo_details']=$this->Admin_model->get_website_logo_details();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar');
			}
		}
	
}
