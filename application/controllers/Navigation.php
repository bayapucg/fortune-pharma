<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');

class Navigation extends Back_end {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Navigation_model');		
		
	}
	public function index()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$data['details']=$this->Navigation_model->get_logo_details(1);
			$this->load->view('admin/index',$data);
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
			$logo_details=$this->Navigation_model->get_logo_details(1);
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
						if(isset($logo_details['image']) && $logo_details['image']!=''){
							unlink('assets/logo/'.$logo_details['image']);
						}
								$temp = explode(".", $_FILES["image"]["name"]);
								$image = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/logo/" . $image);
							}else{
								$image='';
							}
							if(isset($_FILES['favicon']['name']) && $_FILES['favicon']['name']!=''){
								if(isset($logo_details['favicon']) && $logo_details['favicon']!=''){
										unlink('assets/logo/'.$logo_details['favicon']);
									}
								$temp = explode(".", $_FILES["favicon"]["name"]);
								$favicon = '2'.round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['favicon']['tmp_name'], "assets/logo/" . $favicon);
							}else{
								$favicon='';
							}
					$add_data=array(
					'favicon'=>$favicon,
					'image'=>$image,
					'org_image'=>isset($_FILES['image']['name'])?$_FILES['image']['name']:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'keywords'=>isset($post['keywords'])?$post['keywords']:'',
					'description'=>isset($post['description'])?$post['description']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'update_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					if(count($logo_details)>0){
						$save=$this->Navigation_model->update_logo_details(1,$add_data);
					}else{
						$save=$this->Navigation_model->save_logo($add_data);
					}
					
						if(count($save)>0){
							$this->session->set_flashdata('success','Logo successfully updated');
							redirect('navigation');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('navigation');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
	
	
}
