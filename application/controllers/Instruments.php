<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Instruments extends Back_end {

	public function index()
	{
		if($this->session->userdata('multi_details'))
		{
			$this->load->view('admin/instruments');
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
			//echo'<pre>';print_r($post);exit;
		$check_ative=$this->Admin_model->check_instruments_active_ornot();
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"At time only one Instruments is active. Please try again");	
			redirect('instruments/lists');	
		}
			
			
			$save_data=array(
			'title'=>isset($post['title'])?$post['title']:'',
			'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>$admindetails['id'],
			);
			//echo'<pre>';print_r($save_data);exit;
			 $save=$this->Admin_model->save_instruments($save_data);
			//echo'<pre>';print_r($save);exit;
			if(count($save)>0){
				if(isset($post['description']) && count($post['description'])>0){
					foreach($post['description'] as $list){ 
						  $add_data=array(
						  'i_id'=>isset($save)?$save:'',
						  'description'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>$admindetails['id'],
						  );
						   //echo '<pre>';print_r($add_data);
						  $this->Admin_model->save_instruments_details($add_data);	
 
				       }
					}
					//exit;
			$this->session->set_flashdata('success',"Instruments details successfully added");	
			redirect('instruments/lists');	
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('instruments');
		}
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
	         $data['instruments_list']= $this->Admin_model->get_instruments_list();
			 //echo '<pre>';print_r($data);exit;
			$this->load->view('admin/instruments-list',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function instrumentsdelete()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
				$i_d_id=base64_decode ($this->uri->segment(3));
				 $delete_details =$this->Admin_model->delete_instrument_data_details($i_d_id);
				 //echo'<pre>';print_r($delete_details);exit;  			
					if(count($delete_details)>0){
					$this->session->set_flashdata('success',"Instrument Description details successfully deleted.");
					redirect('instruments/lists');
					}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('instruments/lists');
				  }	  					  
	                        
		     }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }


}	
	
	
	
	
	
	public function edit()
	{
		if($this->session->userdata('multi_details'))
		{	
	     $admindetails=$this->session->userdata('multi_details');
	         $instruments=base64_decode($this->uri->segment(3));
		 $data['edit_instruments']=$this->Admin_model->edit_instruments_details($instruments);
		//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/edit-instruments',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public  function remove_pragraph(){
	$post=$this->input->post();
	//echo'<pre>';print_r($post);exit;				
		$delete_data=$this->Admin_model->delete_instrument_details($post['p_id']);
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
			//echo'<pre>';print_r($post);exit;
			$update_data=array(
			'title'=>isset($post['title'])?$post['title']:'',
			'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
			'updated_at'=>date('Y-m-d H:i:s'),
			'homepage_preview'=>0,

			);
			//echo'<pre>';print_r($update_data);exit;
			 $update=$this->Admin_model->update_instruments($post['i_id'],$update_data);
			//echo'<pre>';print_r($update);exit;
			 if(count($update)>0){
				  $details=$this->Admin_model->get_edit_instrument_list($post['i_id']);
				  if(count( $details)>0){
					  foreach($details as $lis){
						 $this->Admin_model->delete_instrument_data_details($lis['i_d_id']); 
					  }
					}
					if(isset($post['description']) && count($post['description'])>0){
					foreach($post['description'] as $list){ 
						  $add_data=array(
						  'i_id'=>isset($post['i_id'])?$post['i_id']:'',
						  'description'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  );
						   //echo '<pre>';print_r($add_data);exit;
						  $this->Admin_model->save_instrument_list_data_details($add_data);	

				       }
					}
					$this->session->set_flashdata('success',"Instruments details  successfully updated");	
					redirect('instruments/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('instruments/lists');
					}
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	
	public function status()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
	             $i_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($status==0){
					$check_ative=$this->Admin_model->check_instruments_active_ornot();
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"At time only one Instruments is active. Please try again");	
			redirect('instruments/lists');	
		}
					}
					
					if($i_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Admin_model->update_instruments($i_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Instruments details  successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Instruments details  successfully Activate.");
								}
								redirect('instruments/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('instruments/lists');
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
	             $i_id=base64_decode($this->uri->segment(3));
					
					if($i_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Admin_model->update_instruments($i_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Instruments details  successfully deleted.");
								redirect('instruments/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('instruments/lists');
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
