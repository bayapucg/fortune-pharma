<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Aboutus extends Back_end {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('aboutus_model');		
		
	}
	public function index()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			
			
			$this->load->view('admin/aboutus');
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
			
			$data['aboutus_list']=$this->aboutus_model->get_aboutus_list();
			
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/aboutus-list',$data);
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
			$check_ative=$this->aboutus_model->check_about_active_ornot();
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"At time only one aboutus is active. Please try again");	
			redirect('aboutus/lists');	
		}
                      if($_FILES['image1']['name']!=''){
					
					$image1=$_FILES['image1']['name'];
					move_uploaded_file($_FILES['image1']['tmp_name'], "assets/aboutus/" . $_FILES['image1']['name']);

					}else{
					$image1='';
					}

                     if($_FILES['image2']['name']!=''){
					
					$image2=$_FILES['image2']['name'];
					move_uploaded_file($_FILES['image2']['tmp_name'], "assets/aboutus/" . $_FILES['image2']['name']);

					}else{
					$image2='';
					}

				if($_FILES['image3']['name']!=''){
					
					$image3=$_FILES['image3']['name'];
					move_uploaded_file($_FILES['image3']['tmp_name'], "assets/aboutus/" . $_FILES['image3']['name']);

					}else{
					$image3='';
					}

						$add_data=array(
						'image1'=>isset($image1)?$image1:'',
						'image2'=>isset($image2)?$image2:'',
						'image3'=>isset($image3)?$image3:'',
						'parahraph'=>isset($post['parahraph'])?$post['parahraph']:'',
						'paragraph1'=>isset($post['paragraph1'])?$post['paragraph1']:'',
						'paragraph2'=>isset($post['paragraph2'])?$post['paragraph2']:'',
						'paragraph3'=>isset($post['paragraph3'])?$post['paragraph3']:'',
						'status'=>1,
						'homepage_preview'=>0,
						'created_at'=>date('Y-m-d H:i:s'),
						'updated_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
						//echo '<pre>';print_r($add_data);exit;
						
		
		$save=$this->aboutus_model->save_aboutus_details($add_data);	
	//echo '<pre>';print_r($save);exit;
				if(count($save)>0){
					$this->session->set_flashdata('success',"aboutus details successfully added");	
					redirect('aboutus/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('aboutus');
					}
					
				
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	public function edit()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$about=base64_decode($this->uri->segment(3));
			$data['edit_about']=$this->aboutus_model->edit_aboutus_details($about);	
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/edit-aboutus',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	
	
	public function editpost()
	{	
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			
			
			$edit_about=$this->aboutus_model->edit_aboutus_details($post['a_id']);	
			//echo '<pre>';print_r($edit_about);exit;
                      if($_FILES['image1']['name']!=''){
					
					$image1=$_FILES['image1']['name'];
					move_uploaded_file($_FILES['image1']['tmp_name'], "assets/aboutus/" . $_FILES['image1']['name']);

					}else{
					$image1=$edit_about['image1'];
					}

                     if($_FILES['image2']['name']!=''){
					
					$image2=$_FILES['image2']['name'];
					move_uploaded_file($_FILES['image2']['tmp_name'], "assets/aboutus/" . $_FILES['image2']['name']);

					}else{
					$image2=$edit_about['image2'];
					}

				if($_FILES['image3']['name']!=''){
					
					$image3=$_FILES['image3']['name'];
					move_uploaded_file($_FILES['image3']['tmp_name'], "assets/aboutus/" . $_FILES['image3']['name']);

					}else{
					$image3=$edit_about['image3'];
					}

						$update_data=array(
						'image1'=>isset($image1)?$image1:'',
						'image2'=>isset($image2)?$image2:'',
						'image3'=>isset($image3)?$image3:'',
						'parahraph'=>isset($post['parahraph'])?$post['parahraph']:'',
						'paragraph1'=>isset($post['paragraph1'])?$post['paragraph1']:'',
						'paragraph2'=>isset($post['paragraph2'])?$post['paragraph2']:'',
						'paragraph3'=>isset($post['paragraph3'])?$post['paragraph3']:'',
						'status'=>1,
						'homepage_preview'=>0,
						'created_at'=>date('Y-m-d H:i:s'),
						'updated_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
						//echo '<pre>';print_r($update_data);exit;
						
		
		$update=$this->aboutus_model->update_aboutus_details($post['a_id'],$update_data);	
	  //echo '<pre>';print_r($update);exit;
				if(count($update)>0){
					$this->session->set_flashdata('success',"aboutus details successfully updated");	
					redirect('aboutus/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('aboutus/lists');
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
	             $a_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($status==0){
					$check_ative=$this->aboutus_model->check_about_active_ornot();
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"At time only one aboutus is active. Please try again");	
			redirect('aboutus/lists');	
		}
					}
					if($a_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
						//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->aboutus_model->update_aboutus_details($a_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"aboutus details   successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"aboutus  details successfully Activate.");
								}
								redirect('aboutus/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('aboutus/lists');
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
	
	public function deletes()
{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
	             $a_id=base64_decode($this->uri->segment(3));
					
					if($a_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->aboutus_model->update_aboutus_details($a_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"aboutus details  successfully deleted.");
								redirect('aboutus/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('aboutus/lists');
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
