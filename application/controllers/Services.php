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
			$check_ative=$this->Services_model->check_servies_active_ornot();
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"At time only one Services is active. Please try again");	
			redirect('services/lists');	
		}
			
						$add_data=array(
						'title'=>isset($post['title'])?$post['title']:'',
						'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
						//echo '<pre>';print_r($add_data);exit;
						
						$save=$this->Services_model->save_services_details($add_data);
					//echo '<pre>';print_r($save);exit;
					if($save!=0){
						
						  $add_data=array(
						  's_id'=>$save,
						  'title'=>isset($post['title1'])?$post['title1']:'',
						'paragraph'=>isset($post['paragraph1'])?$post['paragraph1']:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
					
						$id=$this->Services_model->save_servies_name_details($add_data);
						   if($id!=0){
				if(isset($post['service_name1']) && count($post['service_name1'])>0){
					$cnt=0;
					foreach($post['service_name1'] as $list){
						  $data[]=array(
						  's_id'=>$save,
						  's_n_id'=>$id,
						  'service_name'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>$admindetails['id'],
						  );
						   //echo '<pre>';print_r($add_data);
						 
                      
				      
					}
					 
					}
				 $this->Services_model->save_servies_one_data_details($data);	
					
					}
										
			//second loop
			
						
						  $add_data=array(
						  's_id'=>$save,
						  'title'=>isset($post['title2'])?$post['title2']:'',
						'paragraph'=>isset($post['paragraph2'])?$post['paragraph2']:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
					
						$id=$this->Services_model->save_servies_name_details($add_data);
						   if($id!=0){
				if(isset($post['service_name2']) && count($post['service_name2'])>0){
					$cnt=0;
					foreach($post['service_name2'] as $list){
						  $data1[]=array(
						  's_id'=>$save,
						  's_n_id'=>$id,
						  'service_name'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>$admindetails['id'],
						  );
						   //echo '<pre>';print_r($add_data);
						 
                     
				      
					}
					 	
					}
				$this->Services_model->save_servies_one_data_details($data1);
					
					}
							
			//end
					
						
						  $add_data=array(
						  's_id'=>$save,
						  'title'=>isset($post['title3'])?$post['title3']:'',
						'paragraph'=>isset($post['paragraph3'])?$post['paragraph3']:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
					
						$id=$this->Services_model->save_servies_name_details($add_data);
						   if($id!=0){
				if(isset($post['service_name3']) && count($post['service_name3'])>0){
					$cnt=0;
					foreach($post['service_name3'] as $list){
						  $data2[]=array(
						  's_id'=>$save,
						  's_n_id'=>$id,
						  'service_name'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>$admindetails['id'],
						  );
						   //echo '<pre>';print_r($add_data);
						 
                     
				      
					}
						
					}
				
					 $this->Services_model->save_servies_one_data_details($data2);
					}
			}					
			//end
					
					
							$this->session->set_flashdata('success','Services details successfully added');
							redirect('services/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('services');
						}
			
				
					
						
		
		}
		
	
	
	public function edit()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$servies=base64_decode($this->uri->segment(3));
		 $data['edit_servies']=$this->Services_model->edit_servies_details($servies);
		//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/edit-services',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	
	public  function remove_pragraph(){
	$post=$this->input->post();
	//echo'<pre>';print_r($post);exit;				
		$delete_data=$this->Services_model->delete_servies_details($post['p_id']);
		//echo $this->db->last_query();exit;
		if(count($delete_data)>0){
			$data['msg']=1;
			echo json_encode($data);exit;
		}else{
			$data['msg']=0;
			echo json_encode($data);exit;
		}
}	
	
	public function editpost()
	{	
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			
			
						$add_data=array(
						'title'=>isset($post['title'])?$post['title']:'',
						'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
						//echo '<pre>';print_r($add_data);exit;
						
						$save=$this->Services_model->update_services_details($post['s_id'],$add_data);
					//echo '<pre>';print_r($save);exit;
					if($save!=0){
						
						  $update_data=array(
						  's_id'=>$save,
						  'title'=>isset($post['title'])?$post['title']:'',
						'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						//echo '<pre>';print_r($update_data);exit;
					
						$id=$this->Services_model->update_servies_name_details($update_data);
						   echo '<pre>';print_r($id);exit;
						   if($id!=0){
					
							   
							   
				if(isset($post['service_name']) && count($post['service_name'])>0){
					$cnt=0;
					foreach($post['service_name'] as $list){
						  $data[]=array(
						  's_id'=>$save,
						  's_n_id'=>$id,
						  'service_name'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>$admindetails['id'],
						  );
						   //echo '<pre>';print_r($add_data);
						 
                      
				      
					}
					 
					}
				 $details=$this->Services_model->update_servies_one_data_details($post['s_id'],$data);
							  	
					
					}
										
			//second loop
			
						
						 
					}	
						
						 
					
					
							$this->session->set_flashdata('success','Services details successfully added');
							redirect('services/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('services');
						}
			
				
					
						
		
		}
	
	
	
	
	
	
	/*
	public function editpost()
	{	
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$post=$this->input->post();
			echo '<pre>';print_r($post);exit;
			
						  $update_data=array(
						  's_id'=>$save,
						  'title'=>isset($post['title1'])?$post['title1']:'',
						'paragraph'=>isset($post['paragraph1'])?$post['paragraph1']:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						//echo '<pre>';print_r($update_data);exit;
					
						$id=$this->Services_model->update_servies_name_details($post['s_id'],$update_data);
						   //echo '<pre>';print_r($id);exit;
				
						   
						   if($id!=0){
							$details=$this->Services_model->get_edit_servies_name_list($id);
							echo '<pre>';print_r($details);exit;
                        if(count( $details)>0){
					  foreach($details as $lis){
						 $this->Services_model->delete_servies_details($lis['s_b_d_id']); 
					  }
					}  
						
							   
				if(isset($post['service_name1']) && count($post['service_name1'])>0){
					$cnt=0;
					foreach($post['service_name1'] as $list){
						  $data[]=array(
						  's_id'=>$save,
						  's_n_id'=>$id,
						  'service_name'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>$admindetails['id'],
						  );
						   //echo '<pre>';print_r($data);
						 
                      
				      
					}
					 
					}
				 $this->Services_model->save_servies_one_data_details($data);	
					
					}
						//exit;				
			//second loop
			
						
						  $update_data=array(
						  's_id'=>$save,
						  'title'=>isset($post['title2'])?$post['title2']:'',
						'paragraph'=>isset($post['paragraph2'])?$post['paragraph2']:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
					
						$id=$this->Services_model->update_servies_name_details($post['s_id'],$update_data);
						   //echo '<pre>';print_r($id);exit;
						   
						   if($id!=0){
							 $details=$this->Services_model->get_edit_servies_name_list($id);	   
						//echo '<pre>';print_r($details);exit;   
                        if(count( $details)>0){
					  foreach($details as $lis){
						 $this->Services_model->delete_servies_details($lis['s_b_d_id']); 
					  }
					}    
							   
				if(isset($post['service_name2']) && count($post['service_name2'])>0){
					$cnt=0;
					foreach($post['service_name2'] as $list){
						  $data1[]=array(
						  's_id'=>$save,
						  's_n_id'=>$id,
						  'service_name'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>$admindetails['id'],
						  );
						   echo '<pre>';print_r($data1);exit;
						 
                     
				      
					}
					 	
					}
				$this->Services_model->save_servies_one_data_details($data1);
					
					}
							
			//end
					
						
						  $update_data=array(
						  's_id'=>$save,
						  'title'=>isset($post['title3'])?$post['title3']:'',
						'paragraph'=>isset($post['paragraph3'])?$post['paragraph3']:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
					
						$id=$this->Services_model->update_servies_name_details($post['s_id'],$update_data);
						   //echo '<pre>';print_r($id);exit;
						   if($id!=0){
						$details=$this->Services_model->get_edit_servies_name_list($id);	   
						echo '<pre>';print_r($details);exit;   
                        if(count( $details)>0){
					  foreach($details as $lis){
						 $this->Services_model->delete_servies_details($lis['s_b_d_id']); 
					  }
					}    	   
							   
				if(isset($post['service_name3']) && count($post['service_name3'])>0){
					$cnt=0;
					foreach($post['service_name3'] as $list){
						  $data2[]=array(
						  's_id'=>$save,
						  's_n_id'=>$id,
						  'service_name'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>$admindetails['id'],
						  );
						   //echo '<pre>';print_r($add_data);
						 
                     
				      
					}
						
					}
				
					 $this->Services_model->save_servies_one_data_details($data2);
					}
							
			//end
					
					
							$this->session->set_flashdata('success','Services details successfully updated');
							redirect('services/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('services');
						}
			
				
					
						
		
		}
		
	*/
	
	
	
public function servicenamedelete()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
				$s_b_d_id=base64_decode ($this->uri->segment(3));
				 $delete_details =$this->Services_model->delete_services_name_details_data($s_b_d_id);
				 //echo'<pre>';print_r($delete_details);exit;  			
					if(count($delete_details)>0){
					$this->session->set_flashdata('success',"services name details successfully deleted.");
					redirect('services/lists');
					}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('services/lists');
				  }	  					  
	                        
		     }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }


}	





	
	public function deletes()
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
