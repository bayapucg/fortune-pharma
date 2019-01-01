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
			
			
			$this->load->view('admin/services');
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
			$data['services_list']=$this->Services_model->get_services_list();
			
			
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
			
						$add_data=array(
						'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
						'paragraph1'=>isset($post['paragraph1'])?$post['paragraph1']:'',
						'paragraph2'=>isset($post['paragraph2'])?$post['paragraph2']:'',
						'paragraph3'=>isset($post['paragraph3'])?$post['paragraph3']:'',
						'title1'=>isset($post['title1'])?$post['title1']:'',
						'title2'=>isset($post['title2'])?$post['title2']:'',
						'title3'=>isset($post['title3'])?$post['title3']:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'updated_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
						//echo '<pre>';print_r($add_data);exit;
						
						$save=$this->Services_model->save_services_details($add_data);
					//echo '<pre>';print_r($save);exit;
					if(count($save)>0){
				if(isset($post['service_name1']) && count($post['service_name1'])>0){
					$cnt=0;foreach($post['service_name1'] as $list){
						  $add_data=array(
						  's_id'=>isset($save)?$save:'',
						  'service_name1'=>$list,
						  'service_name2'=>$post['service_name2'][$cnt],
						  'service_name3'=>$post['service_name3'][$cnt],
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>$admindetails['id'],
						  );
						   //echo '<pre>';print_r($add_data);
						  $this->Services_model->save_servies_data_details($add_data);	
 
				       $cnt++;
					}
					}
					//exit;
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
	public function status()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
	             $s_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($status==0){
						$check=$this->Services_model->check_services_status();
						if(count($check)>0){
							$this->session->set_flashdata('error',"Already one image is active. Please try again once");
							redirect('services/lists');
						}
					}
					
					if($s_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Services_model->update_services_details($s_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"services details details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"services details details successfully Activate.");
								}
								redirect('services/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('services/lists');
							}
						}
						else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
	
          }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }


}	
	
	public function delete()
{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
	             $s_id=base64_decode($this->uri->segment(3));
					
					if($s_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Services_model->update_services_details($s_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"services details  successfully deleted.");
								redirect('services/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('services/lists');
							}
						}
						else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
	
          }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }

		
		
	}
	
	
	
}
