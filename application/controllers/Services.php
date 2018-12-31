<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Services extends Back_end {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Services_model');		
		
	}
	public function index()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$data['detail']=$this->Services_model->get_services_details(1);
			
			$this->load->view('admin/services',$data);
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
			$admindetails=$this->session->userdata('multi_details');
			
			$data['services_list']=$this->Services_model->get_services_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/services-list',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	
	public function addpost()
	{	
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$detail=$this->Services_model->get_services_details(1);
						$add_data=array(
						'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
						'paragraph1'=>isset($post['paragraph1'])?$post['paragraph1']:'',
						'paragraph2'=>isset($post['paragraph2'])?$post['paragraph2']:'',
						'paragraph3'=>isset($post['paragraph3'])?$post['paragraph3']:'',
						'paragraph4'=>isset($post['paragraph4'])?$post['paragraph4']:'',
						'paragraph5'=>isset($post['paragraph5'])?$post['paragraph5']:'',
						'paragraph6'=>isset($post['paragraph6'])?$post['paragraph6']:'',
						'title1'=>isset($post['title1'])?$post['title1']:'',
						'title2'=>isset($post['title2'])?$post['title2']:'',
						'title3'=>isset($post['title3'])?$post['title3']:'',
						'title4'=>isset($post['title4'])?$post['title4']:'',
						'title5'=>isset($post['title5'])?$post['title5']:'',
						'title6'=>isset($post['title6'])?$post['title6']:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'updated_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
						//echo '<pre>';print_r($add_data);
						
						$save=$this->Services_model->update_services_details(1,$add_data);
					
					if(count($save)>0){
							$this->session->set_flashdata('success','Services successfully updated');
							redirect('services/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('services');
						}
			
				
					
						
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	public function delete()
	{	
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$post=$this->input->post();
			$s_id=base64_decode($this->uri->segment(3));
			if($s_id==1){
				$up_dat=array('paragraph1'=>'','title1'=>'');	
			}else if($s_id==2){
				$up_dat=array('paragraph2'=>'','title2'=>'');	
			}else if($s_id==3){
				$up_dat=array('paragraph3'=>'','title3'=>'');	
			}else if($s_id==4){
				$up_dat=array('paragraph4'=>'','title4'=>'');	
			}else if($s_id==5){
				$up_dat=array('paragraph5'=>'','title5'=>'');	
			}else if($s_id==6){
				$up_dat=array('paragraph6'=>'','title6'=>'');	
			}
					
					$delete=$this->Services_model->update_services_details(1,$up_dat);
					if(count($delete)>0){
						$this->session->set_flashdata('success','Service successfully deleted');
						redirect('services/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('services/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
	
}
