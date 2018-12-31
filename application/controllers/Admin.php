<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->model('Admin_model');
		$this->load->model('Users_model');
	}
	
	public function index(){
		
		if(!$this->session->userdata('multi_details'))
		{
			$this->load->view('admin/login');
		}else{
			redirect('dashboard');
		}
	}
	public function post()
	{
		if(!$this->session->userdata('multi_details'))
		{
			$post=$this->input->post();
			
			$login_deta=array('email'=>$post['email'],'password'=>md5($post['password']));
			$check_login=$this->Admin_model->login_details($login_deta);
			if(count($check_login)>0){
				$login_details=$this->Admin_model->get_admin_details($check_login['id']);
				$this->session->set_userdata('multi_details',$login_details);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('error',"Invalid Email Address or Password!");
				redirect('admin');
			}
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public  function forgotpassword(){
			if(!$this->session->userdata('multi_details'))
			{
				//echo "xcxzc";exit;
				$data['logo_details']=$this->Users_model->get_logo_details();
				$this->load->view('admin/forgot_pasword',$data);
			}else{
				redirect('dashboard');
			}	
	}
	public function forgotpost(){
		$post=$this->input->post();
		$check_email=$this->Admin_model->check_email_exits($post['email']);
		$contactus_details=$this->Users_model->get_contactus_details();
		$logo_details=$this->Users_model->get_logo_details();

			if(count($check_email)>0){
				
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->to($check_email['a_email_id']);
				$this->email->from($contactus_details['contact_email'], $logo_details['title']); 
				$this->email->subject('Forgot Password'); 
				$body = "<b> Your Account login Password is </b> : ".$check_email['org_password'];
				$this->email->message($body);
				if ($this->email->send())
				{
					$this->session->set_flashdata('success',"Password sent to your registered email address. Please Check your registered email address");
					redirect('admin');
				}else{
					$this->session->set_flashdata('error'," In Localhost mail  didn't sent");
					redirect('admin');
				}
				

			}else{
				$this->session->set_flashdata('error','The email you entered is not a registered email. Please try again. ');
				redirect('admin');	
			}
		
	}
}
