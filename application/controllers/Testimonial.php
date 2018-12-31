<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Testimonial extends Back_end {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('testimonial_model');		
		
	}
	public function index()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			
			$this->load->view('admin/testimonial');
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
			
			$data['testimonial_list']=$this->testimonial_model->get_testimonial_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/testimonial-list',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function edit()
	{	
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$g_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->testimonial_model->get_testimonial_details($g_id);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/testimonial/edit',$data);
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
					
						$profilepicrenam2 = microtime().basename($_FILES["image"]["name"]);
						$image1= str_replace(" ", "", $profilepicrenam2);
						move_uploaded_file($_FILES['image']['tmp_name'], "assets/testimonial/" . $image1);
						$add_data=array(
						'image'=>$image1,
						'name'=>isset($post['name'])?$post['name']:'',
						'designation'=>isset($post['designation'])?$post['designation']:'',
						'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
						'org_image'=>isset($_FILES['image']['name'])?$_FILES['image']['name']:'',
						'status'=>1,
						'create_at'=>date('Y-m-d H:i:s'),
						'update_at'=>date('Y-m-d H:i:s'),
						'create_by'=>$admindetails['id'],
						);
						//echo '<pre>';print_r($add_data);
						
						$save=$this->testimonial_model->save_testimonial($add_data);
					
					if(count($save)>0){
							$this->session->set_flashdata('success','Testimonial successfully added');
							redirect('testimonial/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('testimonial');
						}
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
					$details=$this->testimonial_model->get_testimonial_details($post['g_id']);
					if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							unlink('assets/testimonial/'.$details['image']);

								$temp = explode(".", $_FILES["image"]["name"]);
								$image = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/testimonial/" . $image);
								$org_name=$_FILES["image"]["name"];
							}else{
								$image=$details['image'];
								$org_name=$details['org_image'];
							}
					$update_data=array(
					'image'=>$image,
					'org_image'=>$org_name,
					'update_at'=>date('Y-m-d H:i:s'),
					);
						$update=$this->testimonial_model->update_testimonial_details($post['g_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','Testimonial successfully Updated');
							redirect('testimonial/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('testimonial/edit/'.base64_encode($post['g_id']));
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
			$g_id=base64_decode($this->uri->segment(3));
			$status=base64_decode($this->uri->segment(4));
			if($status==1){
				$stat=0;
			}else{
				$stat=1;
			}
			$update_data=array(
					'status'=>$stat,
					'update_at'=>date('Y-m-d H:i:s'),
					);
					$update=$this->testimonial_model->update_testimonial_details($g_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Testimonial successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Testimonial successfully activated');
							}
							redirect('testimonial/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('testimonial/lists');
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
			$g_id=base64_decode($this->uri->segment(3));
			$details=$this->testimonial_model->get_testimonial_details($g_id);
			
					$delete=$this->testimonial_model->delete_testimonial($g_id);
					if(count($delete)>0){
						unlink('assets/testimonial/'.$details['image']);
						$this->session->set_flashdata('success','Testimonial successfully deleted');
						redirect('testimonial/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('testimonial/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
	
}
