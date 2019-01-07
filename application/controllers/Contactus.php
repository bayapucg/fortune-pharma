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
		
		$data['details']=$this->Users_model->get_contact_form_details();
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
		'phone_number'=>isset($post['phone_number'])?$post['phone_number']:'',
		'phone_no'=>isset($post['phone_no'])?$post['phone_no']:'',
		'email'=>isset($post['email'])?$post['email']:'',
		'forturn_lab'=>isset($post['forturn_lab'])?$post['forturn_lab']:'',
		'address'=>isset($post['address'])?$post['address']:'',
		'twitter_link'=>isset($post['twitter_link'])?$post['twitter_link']:'',
		'facebook_link'=>isset($post['facebook_link'])?$post['facebook_link']:'',
		'instagram_link'=>isset($post['instagram_link'])?$post['instagram_link']:'',
		'google_plus'=>isset($post['google_plus'])?$post['google_plus']:'',
		'linkedIn_link'=>isset($post['linkedIn_link'])?$post['linkedIn_link']:'',
		'updated_at'=>date('Y-m-d H:i:s'),
		'status'=>1,
		);
		$contact=$this->Users_model->get_contact_form_details();
		if(count($contact)>0){
		$upadte=$this->Users_model->update_contact_form_details($addcontact);
		}else{
		$save=$this->Users_model->save_contactus_form_details($addcontact);	
	}
		
		if(count($save)>0){
					$this->session->set_flashdata('success',"contactus details successfully added");	
					redirect('contactus');	
					}else{
					$this->session->set_flashdata('success',"contactus details successfully updated");
					redirect('contactus');
					}  
		//echo 
		
	}
	
}
