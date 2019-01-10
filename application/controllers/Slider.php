<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Slider extends Back_end {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Slider_model');		
		
	}
	public function index()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			
			$this->load->view('admin/slider');
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('error','Please login to continue');
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
                      if($_FILES['image_slider1']['name']!=''){
					
					$image1=$_FILES['image_slider1']['name'];
					move_uploaded_file($_FILES['image_slider1']['tmp_name'], "assets/slider/" . $_FILES['image_slider1']['name']);

					}else{
					$image1='';
					}

                     if($_FILES['image_slider2']['name']!=''){
					
					$image2=$_FILES['image_slider2']['name'];
					move_uploaded_file($_FILES['image_slider2']['tmp_name'], "assets/slider/" . $_FILES['image_slider2']['name']);

					}else{
					$image2='';
					}

				if($_FILES['image_slider3']['name']!=''){
					
					$image3=$_FILES['image_slider3']['name'];
					move_uploaded_file($_FILES['image_slider3']['tmp_name'], "assets/slider/" . $_FILES['image_slider3']['name']);

					}else{
					$image3='';
					}
                   
				   if($_FILES['image_slider4']['name']!=''){
					
					$image4=$_FILES['image_slider4']['name'];
					move_uploaded_file($_FILES['image_slider4']['tmp_name'], "assets/slider/" . $_FILES['image_slider4']['name']);

					}else{
					$image4='';
					}
				   
				   
						$add_data=array(
						'image_slider1'=>isset($image1)?$image1:'',
						'image_slider2'=>isset($image2)?$image2:'',
						'image_slider3'=>isset($image3)?$image3:'',
						'image_slider4'=>isset($image4)?$image4:'',
						'slider1'=>isset($post['slider1'])?$post['slider1']:'',
						'slider2'=>isset($post['slider2'])?$post['slider2']:'',
						'slider3'=>isset($post['slider3'])?$post['slider3']:'',
						'slider4'=>isset($post['slider4'])?$post['slider4']:'',
						'status'=>1,
						'homepage_preview'=>0,
						'created_at'=>date('Y-m-d H:i:s'),
						'updated_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
						//echo '<pre>';print_r($add_data);exit;
		$save=$this->Slider_model->save_slider_details($add_data);	
	
				if(count($save)>0){
					$this->session->set_flashdata('success',"Slider details successfully added");	
					redirect('slider');	
					}else{
					$this->session->set_flashdata('success',"Slider details successfully updated");
					redirect('slider');
					}  		
					
				
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function lists()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$data['slider_list']=$this->Slider_model->get_slider_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/slider-list',$data);
			$this->load->view('admin/footer');

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
			 $slider=base64_decode($this->uri->segment(3));
			$data['edit_slider']=$this->Slider_model->get_edit_slider_list($slider);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/edit-slider',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('error','Please login to continue');
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
			$edit_slider=$this->Slider_model->get_edit_slider_list($post['s_id']);
			//echo '<pre>';print_r($edit_slider);exit;
                      if($_FILES['image_slider1']['name']!=''){
					
					$image1=$_FILES['image_slider1']['name'];
					move_uploaded_file($_FILES['image_slider1']['tmp_name'], "assets/slider/" . $_FILES['image_slider1']['name']);

					}else{
					$image1=$edit_slider['image_slider1'];
					}

                     if($_FILES['image_slider2']['name']!=''){
					
					$image2=$_FILES['image_slider2']['name'];
					move_uploaded_file($_FILES['image_slider2']['tmp_name'], "assets/slider/" . $_FILES['image_slider2']['name']);

					}else{
					$image2=$edit_slider['image_slider2'];
					}

				if($_FILES['image_slider3']['name']!=''){
					
					$image3=$_FILES['image_slider3']['name'];
					move_uploaded_file($_FILES['image_slider3']['tmp_name'], "assets/slider/" . $_FILES['image_slider3']['name']);

					}else{
					$image3=$edit_slider['image_slider3'];
					}
                   
				   if($_FILES['image_slider4']['name']!=''){
					
					$image4=$_FILES['image_slider4']['name'];
					move_uploaded_file($_FILES['image_slider4']['tmp_name'], "assets/slider/" . $_FILES['image_slider4']['name']);

					}else{
					$image4=$edit_slider['image_slider4'];
					}
				   
				   
						$update_data=array(
						'image_slider1'=>isset($image1)?$image1:'',
						'image_slider2'=>isset($image2)?$image2:'',
						'image_slider3'=>isset($image3)?$image3:'',
						'image_slider4'=>isset($image4)?$image4:'',
						'slider1'=>isset($post['slider1'])?$post['slider1']:'',
						'slider2'=>isset($post['slider2'])?$post['slider2']:'',
						'slider3'=>isset($post['slider3'])?$post['slider3']:'',
						'slider4'=>isset($post['slider4'])?$post['slider4']:'',
						'status'=>1,
						'homepage_preview'=>0,
						'created_at'=>date('Y-m-d H:i:s'),
						'updated_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
						//echo '<pre>';print_r($update_data);exit;
		$update=$this->Slider_model->update_slider_details($post['s_id'],$update_data);	
	//echo '<pre>';print_r($update);exit;
				if(count($update)>0){
					$this->session->set_flashdata('success',"Slider details successfully updated");	
					redirect('slider/lists');	
					}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('slider/lists');
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
			$post=$this->input->post();
			$s_id=base64_decode($this->uri->segment(3));
			$status=base64_decode($this->uri->segment(4));
			if($status==1){
				$stat=0;
			}else{
				$stat=1;
			}
			$update_data=array(
					'status'=>$stat,
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					$update=$this->Slider_model->update_slider_details($s_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Slider image successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Slider image successfully activated');
							}
							redirect('slider/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('slider/lists');
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
			$status=base64_decode($this->uri->segment(4));
			
			$update_data=array(
					'status'=>2,
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					$update=$this->Slider_model->update_slider_details($s_id,$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('sucess',"Slider image successfully deleted.");
							redirect('slider/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('slider/lists');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
	
    public function search_sliders(){
        
		$this->load->view('admin/search_sliders');
		$this->load->view('admin/footer');
		
	}
	
	
}
