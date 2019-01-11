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
			$check_ative=$this->Navigation_model->check_logo_active_ornot();
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"At time only one logo is active. Please try again");	
			redirect('navigation/lists');	
		}
			
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
						
								$temp = explode(".", $_FILES["image"]["name"]);
								$image = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/logo/" . $image);
							}else{
								$image='';
							}
							if(isset($_FILES['favicon']['name']) && $_FILES['favicon']['name']!=''){
								
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
					
						$save=$this->Navigation_model->save_logo($add_data);
					
					
						if(count($save)>0){
							$this->session->set_flashdata('success','Logo successfully added');
							redirect('navigation/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('navigation');
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
			$data['logo_list']=$this->Navigation_model->get_logo_list();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/logo-list',$data);
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
			$logo=base64_decode($this->uri->segment(3));
			$data['edit_logo']=$this->Navigation_model->get_edit_logo_list($logo);
			//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/edit-logo',$data);
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
			//echo'<pre>';print_r($post);exit;
			$logo_details=$this->Navigation_model->get_logo_details($post['id']);
			//echo'<pre>';print_r($logo_details);exit;
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
						if(isset($logo_details['image']) && $logo_details['image']!=''){
							unlink('assets/logo/'.$logo_details['image']);
						}
								$temp = explode(".", $_FILES["image"]["name"]);
								$image = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/logo/" . $image);
							}else{
								$image=$logo_details['image'];
							}
							if(isset($_FILES['favicon']['name']) && $_FILES['favicon']['name']!=''){
								if(isset($logo_details['favicon']) && $logo_details['favicon']!=''){
										unlink('assets/logo/'.$logo_details['favicon']);
									}
								$temp = explode(".", $_FILES["favicon"]["name"]);
								$favicon = '2'.round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['favicon']['tmp_name'], "assets/logo/" . $favicon);
							}else{
								$favicon=$logo_details['favicon'];
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
					//echo'<pre>';print_r($add_data);exit;
						$update=$this->Navigation_model->update_logo_details($post['id'],$add_data);
					//echo'<pre>';print_r($update);exit;
					
						if(count($update)>0){
							$this->session->set_flashdata('success','Logo successfully updated');
							redirect('navigation/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('navigation/lists');
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
	             $id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($status==0){
					$check_ative=$this->Navigation_model->check_logo_active_ornot();
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"At time only one logo is active. Please try again");	
			redirect('navigation/lists');	
		}
					}	
					if($id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'update_at'=>date('Y-m-d H:i:s')
							);
						//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Navigation_model->update_logo_details($id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"logo   successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"logo  details successfully Activate.");
								}
								redirect('navigation/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('navigation/lists');
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
	             $id=base64_decode($this->uri->segment(3));
					
					if($id!=''){
						$stusdetails=array(
							'status'=>2,
							'update_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Navigation_model->update_logo_details($id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"logo details  successfully deleted.");
								redirect('navigation/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('navigation/lists');
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
