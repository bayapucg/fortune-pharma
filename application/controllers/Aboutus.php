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
					$this->session->set_flashdata('success',"aboutus details successfully updated");
					redirect('aboutus');
					}  		
					
				
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	/*
	public function addpost()
	{	
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
                      if($_FILES['image1']['name']!=''){
					if($detail['image1']!=''){
						unlink('assets/aboutus/'.$detail['image3']);
					}
					$image1=$_FILES['image1']['name'];
					move_uploaded_file($_FILES['image1']['tmp_name'], "assets/aboutus/" . $_FILES['image1']['name']);

					}else{
					$image1='';
					}

                     if($_FILES['image2']['name']!=''){
					if($detail['image2']!=''){
						unlink('assets/aboutus/'.$detail['image3']);
					}
					$image2=$_FILES['image2']['name'];
					move_uploaded_file($_FILES['image2']['tmp_name'], "assets/aboutus/" . $_FILES['image2']['name']);

					}else{
					$image2='';
					}

				if($_FILES['image3']['name']!=''){
					if($detail['image3']!=''){
						unlink('assets/aboutus/'.$detail['image3']);
					}
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
						
						echo '<pre>';print_r($add_data);exit;
						
		
		$save=$this->aboutus_model->save_aboutus_details($add_data);	
	
				if(count($save)>0){
					$this->session->set_flashdata('success',"aboutus details successfully added");	
					redirect('aboutus');	
					}else{
					$this->session->set_flashdata('success',"aboutus details successfully updated");
					redirect('aboutus');
					}  		
					
				
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	*/
	public function delete()
{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
	             $a_id=base64_decode($this->uri->segment(3));
							$statusdata=$this->aboutus_model->delete_aboutus($a_id);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"aboutus details  successfully deleted.");
								redirect('aboutus/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('aboutus/lists');
							}
						
		             }else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('admin');
					}	
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
}
