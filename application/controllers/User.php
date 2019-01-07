<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
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
	
		}
	
	
	public function index(){
		
				$data['logo_details']=$this->Users_model->home_get_logo_details();
				$data['slider_details']=$this->Users_model->home_get_slider_details();
				$data['aboutus_details']=$this->Users_model->home_get_aboutus_details();
				$data['services_details']=$this->Users_model->home_get_services_list();
				$data['instrument_details']=$this->Users_model->home_get_instrument_details();
				//echo '<pre>';print_r($data['services_details']);exit;
				
				$data['gallery_details']=$this->Users_model->home_get_gallery_details();
				$data['testimonials_details']=$this->Users_model->home_get_testimonials_details();
				$data['contactus_details']=$this->Users_model->home_get_contactus_details();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('html/home',$data);
		        
	}
	
	
	
	public  function contactpost(){
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$addcontact=array(
		'name'=>isset($post['name'])?$post['name']:'',
		'subject'=>isset($post['subject'])?$post['subject']:'',
		'email_id'=>isset($post['email'])?$post['email']:'',
		'message'=>isset($post['message'])?$post['message']:'',
		'create_at'=>date('Y-m-d H:i:s'),
		);
		$save=$this->Users_model->save_contactus($addcontact);
		if(count($save)>0){
			$contactus_details=$this->Users_model->get_contactus_details();
				$data['details']=$post;
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->from($post['email']);
				$this->email->to($contactus_details['contact_email']);
				$this->email->subject('Contact us - Request');

				$msg='Name:'.$post['name'].'<br> Email :'.$post['email'].'<br> Subject :'.$post['subject'].'<br> Message :'.$post['message'];
				$this->email->message($msg);
				$this->email->send();
				$this->session->set_flashdata('success',"Your message was successfully sent.");
				redirect('');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('');
			}
		//echo 
		
	}
	
	
	
	
	
	
	
	
	
	
}
