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
	public function lists()
	{
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			
			$data['slider_list']=$this->Slider_model->get_slider_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/slider-list',$data);
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
			//print_r($_FILES['image']['tmp_name']);exit;
			$cnt='';if(isset($_FILES['image']['tmp_name']) && count($_FILES['image']['tmp_name'])>0){
				$cnt=1;foreach ($_FILES['image']['tmp_name'] as $key => $val ) {
					if($_FILES["image"]["name"][$key]!=''){
						$profilepicrenam2[$cnt] = microtime().basename($_FILES["image"]["name"][$key]);
						$image1[$cnt]= str_replace(" ", "", $profilepicrenam2[$cnt]);
						move_uploaded_file($_FILES['image']['tmp_name'][$key], "assets/slider/" . $image1[$cnt]);
						$add_data=array(
						'image'=>$image1[$cnt],
						'text'=>isset($post['text'][$key])?$post['text'][$key]:'',
						'org_image'=>isset($_FILES['image']['name'][$key])?$_FILES['image']['name'][$key]:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'updated_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
						//echo '<pre>';print_r($add_data);
						
						$save=$this->Slider_model->save_slider($add_data);
					}
						// here your insert query
					$cnt++;}
					if(count($save)>0){
							$this->session->set_flashdata('success','Slider Image successfully added');
							redirect('slider/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('slider');
						}
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('slider');
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
			$details=$this->Slider_model->get_slider_details($s_id);
			
					$delete=$this->Slider_model->delete_slider($s_id);
					if(count($delete)>0){
						unlink('assets/slider/'.$details['image']);
						$this->session->set_flashdata('success','Slider image successfully deleted');
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
