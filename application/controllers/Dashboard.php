<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Dashboard extends Back_end {

	public function __construct() 
	{
		parent::__construct();	
		
	}
	public function index()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			redirect('navigation');
			//echo '<pre>';print_r($data);exit;
			//$this->load->view('admin/dashboard');
			//$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function changepassword()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
				$this->load->view('html/changepassword');
				$this->load->view('html/footer');
			
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function changepasswordpost(){
	 
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$post=$this->input->post();
			$admin_details = $this->Admin_model->get_adminpassword_details($admindetails['a_id']);
			if($admin_details['a_password']== md5($post['oldpassword'])){
				if(md5($post['password'])==md5($post['confirmpassword'])){
						$updateuserdata=array(
						'a_password'=>md5($post['confirmpassword']),
						'a_org_password'=>$post['confirmpassword'],
						'a_updated_at'=>date('Y-m-d H:i:s'),
						);
						//echo '<pre>';print_r($updateuserdata);exit;
						$upddateuser = $this->Admin_model->update_admin_details($admindetails['a_id'],$updateuserdata);
						if(count($upddateuser)>0){
							$this->session->set_flashdata('success',"password successfully updated");
							redirect('dashboard/changepassword');
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('dashboard/changepassword');
						}
					
				}else{
					$this->session->set_flashdata('error',"Password and Confirm password are not matched");
					redirect('dashboard/changepassword');
				}
				
			}else{
				$this->session->set_flashdata('error',"Old password are not matched");
				redirect('dashboard/changepassword');
			}
				
			
		}else{
			 $this->session->set_flashdata('error','Please login to continue');
			 redirect('');
		} 
	 
	}
	public function logout(){
		$userinfo = $this->session->userdata('multi_details');
        $this->session->unset_userdata($userinfo);
		$this->session->sess_destroy('multi_details');
		$this->session->unset_userdata('multi_details');
        redirect('');
	}
	
	
	
	
	
}
