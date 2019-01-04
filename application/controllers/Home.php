<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
		public function __construct() 
		{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('Users_model');
	    $this->load->model('Home_model');
		}
	
	
	public function index(){
		
		
				$data['logo_details']=$this->Users_model->get_logo_details();
				$data['slider_details']=$this->Users_model->get_slider_details();
				$data['aboutus_details']=$this->Users_model->get_aboutus_details();
				$data['services_details']=$this->Users_model->get_services_list();
				$data['instrument_details']=$this->Users_model->get_instrument_details();
				//echo '<pre>';print_r($data['services_details']);exit;
				
				$data['gallery_details']=$this->Users_model->get_gallery_details();
				$data['testimonials_details']=$this->Users_model->get_testimonials_details();
				$data['contactus_details']=$this->Users_model->get_contactus_details();
				
				$this->load->view('html/home',$data);
		
		
	}
	public function instrument(){
		
		
				$data['logo_details']=$this->Users_model->get_logo_details();
				$data['slider_details']=$this->Users_model->get_slider_details();
				$data['instrument_details']=$this->Users_model->get_instrument_details();
				//echo '<pre>';print_r($data['services_details']);exit;
				
				
				$this->load->view('html/instrument',$data);
		
		
	}
	public function services(){
		
		
				$data['logo_details']=$this->Users_model->get_logo_details();
				$data['slider_details']=$this->Users_model->get_slider_details();
				$data['services_details']=$this->Users_model->get_services_list();
				//echo '<pre>';print_r($data['services_details']);exit;
				$this->load->view('html/services',$data);
		
		
	}
	public function aboutus(){
		
		
				$data['logo_details']=$this->Users_model->get_logo_details();
				$data['slider_details']=$this->Users_model->get_slider_details();
				$data['aboutus_details']=$this->Users_model->get_aboutus_details();
				$this->load->view('html/aboutus',$data);
		
		
	}
	public function contactus(){
		
		
				$data['logo_details']=$this->Users_model->get_logo_details();
				$data['slider_details']=$this->Users_model->get_slider_details();
				$data['contactus_details']=$this->Users_model->get_contactus_details();
				$this->load->view('html/contactus',$data);
		
		
	}
	public function gallery(){
		$data['logo_details']=$this->Users_model->get_logo_details();
				$data['slider_details']=$this->Users_model->get_slider_details();
				$data['gallery_details']=$this->Users_model->get_gallery_details();
				$this->load->view('html/gallery',$data);
		
		
	}
	
	
	
	
}

