<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preview extends CI_Controller {
	
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
		
		
				$data['logo_details']=$this->Users_model->get_logo_details();
				$data['slider_details']=$this->Users_model->get_slider_details();
				$data['aboutus_details']=$this->Users_model->get_aboutus_details();
				$data['services_details']=$this->Users_model->get_services_details();
				$data['gallery_details']=$this->Users_model->get_gallery_details();
				$data['testimonials_details']=$this->Users_model->get_testimonials_details();
				$data['contactus_details']=$this->Users_model->get_contactus_details();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('html/preview',$data);
		
		
	}
	public  function okpost(){
		if($this->session->userdata('multi_details'))
		{
			$post=$this->input->post();
			$slider_details=$this->Users_model->get_slider_details();
			if(count($slider_details)>0){
				foreach($slider_details as $li){
			
				$l_ids[]=$li['s_id'];
				}
			}else{
				$l_ids[]=array();
			}
			
			foreach($post['slider_id'] as $list){
			
				if (in_array($list, $l_ids))
				  {
				  $update=array('homepage_preview'=>1);
				  $this->Users_model->update_home_page_preview_status($list,$update);
				  }
				else
				  {
				  $update=array('homepage_preview'=>0);
				  $this->Users_model->update_home_page_preview_status($list,$update);
				  }
				
			}
			$gallery_details=$this->Users_model->get_gallery_details();
			if(count($gallery_details)>0){
				foreach($gallery_details as $li){
			
				$g_l_ids[]=$li['g_id'];
				}
			}else{
				$g_l_ids[]=array();
			}
			
			foreach($post['gallery_id'] as $list){
			
				if (in_array($list, $g_l_ids))
				  {
				  $update=array('homepage_preview'=>1);
				  $this->Users_model->update_home_page_gallery_preview_status($list,$update);
				  }
				else
				  {
				  $update=array('homepage_preview'=>0);
				  $this->Users_model->update_home_page_gallery_preview_status($list,$update);
				  }
				
			}
			$testimonials_details=$this->Users_model->get_testimonials_details();
			if(count($testimonials_details)>0){
				foreach($testimonials_details as $li){
			
				$t_l_ids[]=$li['t_id'];
				}
			}else{
				$t_l_ids[]=array();
			}
			
			foreach($post['testimonials_id'] as $list){
			
				if (in_array($list, $t_l_ids))
				  {
				  $update=array('homepage_preview'=>1);
				  $this->Users_model->update_home_page_estimonials_preview_status($list,$update);
				  }
				else
				  {
				  $update=array('homepage_preview'=>0);
				  $this->Users_model->update_home_page_estimonials_preview_status($list,$update);
				  }
				
			}
			$update=array('homepage_preview'=>1);
			$this->Users_model->update_home_page_about_us_preview_status($post['about_us_a_id'],$update);
			$this->Users_model->update_home_page_services_preview_status($post['services_id'],$update);
			$this->Users_model->update_home_page_contactus_details_preview_status($post['contactus_details_id'],$update);
			$this->session->set_flashdata('success',"Home page successfully updated.");
			redirect('preview');
			//echo '<pre>';print_r($post);exit;

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
		
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

