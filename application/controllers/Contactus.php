<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Contactus extends Back_end {

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
		
		$data['details']=$this->Users_model->get_contact_details(1);
		//echo '<pre>';print_r($data);exit;
		$this->load->view('admin/contactus',$data);
		$this->load->view('admin/footer');
		
	}
	
	public  function post(){
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$addcontact=array(
		'contact_email'=>isset($post['contact_email'])?$post['contact_email']:'',
		'phone'=>isset($post['phone'])?$post['phone']:'',
		'email'=>isset($post['email'])?$post['email']:'',
		'address'=>isset($post['address'])?$post['address']:'',
		'twitter_link'=>isset($post['twitter_link'])?$post['twitter_link']:'',
		'facebook_link'=>isset($post['facebook_link'])?$post['facebook_link']:'',
		'instagram_link'=>isset($post['instagram_link'])?$post['instagram_link']:'',
		'google_plus'=>isset($post['google_plus'])?$post['google_plus']:'',
		'linkedIn_link'=>isset($post['linkedIn_link'])?$post['linkedIn_link']:'',
		'updated_at'=>date('Y-m-d H:i:s'),
		);
		$save=$this->Users_model->update_contact_details(1,$addcontact);
		//echo $this->db->last_query();exit;
		if(count($save)>0){
				
				$this->session->set_flashdata('success',"Contactus details successfully updated.");
				redirect('contactus');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('contactus');
			}
		//echo 
		
	}
	
}
