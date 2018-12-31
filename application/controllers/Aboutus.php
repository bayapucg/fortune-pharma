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
			$data['detail']=$this->aboutus_model->get_aboutus_details(1);
			
			$this->load->view('admin/aboutus',$data);
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
			
			$data['aboutus_list']=$this->aboutus_model->get_aboutus_list($admindetails['id']);
			
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
			$detail=$this->aboutus_model->get_aboutus_details(1);
						
						if(isset($_FILES['image1']['name']) && $_FILES['image1']['name']!=''){
							unlink('assets/aboutus/'.$detail['image1']);
							$image1 =  microtime().basename($_FILES["image"]["name"]);
							move_uploaded_file($_FILES['image1']['tmp_name'], "assets/aboutus/" . $image1);
						}else{
							$image1=$detail['image1'];
						}
						if(isset($_FILES['image2']['name']) && $_FILES['image2']['name']!=''){
							unlink('assets/aboutus/'.$detail['image2']);
							$image2 =  microtime().basename($_FILES["image"]["name"]);
							move_uploaded_file($_FILES['image2']['tmp_name'], "assets/aboutus/" . $image2);
						}else{
							$image2=$detail['image2'];
						}
						if(isset($_FILES['image3']['name']) && $_FILES['image3']['name']!=''){
							unlink('assets/aboutus/'.$detail['image3']);
							$image3 =  microtime().basename($_FILES["image"]["name"]);
							move_uploaded_file($_FILES['image3']['tmp_name'], "assets/aboutus/" . $image3);
						}else{
							$image3=$detail['image3'];
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
						'created_at'=>date('Y-m-d H:i:s'),
						'updated_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['id'],
						);
						
						//echo '<pre>';print_r($add_data);
						
						$save=$this->aboutus_model->update_aboutus_details(1,$add_data);
					
					if(count($save)>0){
							$this->session->set_flashdata('success','About us successfully updated');
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
	
	public function delete()
	{	
		if($this->session->userdata('multi_details'))
		{
			$admindetails=$this->session->userdata('multi_details');
			$post=$this->input->post();
			$a_id=base64_decode($this->uri->segment(3));
			$type=base64_decode($this->uri->segment(4));
			$details=$this->aboutus_model->get_aboutus_details($a_id);
			if($type==1){
				$up_dat=array('paragraph1'=>'','image1'=>'');	
			}else if($type==2){
				$up_dat=array('paragraph2'=>'','image2'=>'');	
			}else if($type==3){
				$up_dat=array('paragraph3'=>'','image3'=>'');	
			}
					
					$delete=$this->aboutus_model->update_aboutus_details($a_id,$up_dat);
					if(count($delete)>0){
						if($type=1){
								unlink('assets/aboutus/'.$details['image1']);	
							}else if($type=2){
								unlink('assets/aboutus/'.$details['image2']);	
							}else if($type=3){
								unlink('assets/aboutus/'.$details['image3']);	
							}
						$this->session->set_flashdata('success','About us successfully deleted');
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
	
	
	
	
}
