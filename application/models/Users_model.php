<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_contactus($data){
		$this->db->insert('contactus',$data);
		return $this->db->insert_id();
	}
	public function get_contact_list_data(){
	$this->db->select('*')->from('contactus');
		return $this->db->get()->result_array();
	}
	
	
	
	public  function update_contact_details($c_id,$data){
		$this->db->where('c_id',$c_id);
		return $this->db->update('contactform',$data);
	}
	
	public  function get_contact_details($c_id){
		$this->db->select('*')->from('contactform');
		$this->db->where('c_id',$c_id);
		return $this->db->get()->row_array();
	}
	
	/* prview  purpose*/
	public  function get_logo_details(){
		$this->db->select('*')->from('logo');
		$this->db->where('status',1);
		return $this->db->get()->row_array();
	}
	public  function get_slider_details(){
		$this->db->select('s_id,text,image')->from('slider');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function get_aboutus_details(){
		$this->db->select('*')->from('aboutus');
		$this->db->where('status',1);
		return $this->db->get()->row_array();
	}
	public  function get_gallery_details(){
		$this->db->select('*')->from('gallery');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function get_testimonials_details(){
		$this->db->select('*')->from('testimonial');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function get_contactus_details(){
		$this->db->select('*')->from('contactform');
		return $this->db->get()->row_array();
	}
	public  function get_servies_details(){
		$this->db->select('*')->from('s_id');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	
		/* home  purpose*/
	public  function get_home_logo_details(){
		$this->db->select('*')->from('logo');
		$this->db->where('status',1);
		$this->db->where('homepage_preview',1);
		return $this->db->get()->row_array();
	}
	public  function get_home_slider_details(){
		$this->db->select('s_id,text,image')->from('slider');
		$this->db->where('status',1);
		$this->db->where('homepage_preview',1);
		return $this->db->get()->result_array();
	}
	public  function get_home_aboutus_details(){
		$this->db->select('*')->from('aboutus');
		$this->db->where('homepage_preview',1);
		$this->db->where('status',1);
		return $this->db->get()->row_array();
	}
	public  function get_home_services_details(){
		$this->db->select('*')->from('services');
		$this->db->where('homepage_preview',1);
		$this->db->where('status',1);
		return $this->db->get()->row_array();
	}
	public  function get_home_gallery_details(){
		$this->db->select('*')->from('gallery');
		$this->db->where('homepage_preview',1);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function get_home_testimonials_details(){
		$this->db->select('*')->from('testimonial');
		$this->db->where('status',1);
		$this->db->where('homepage_preview',1);
		return $this->db->get()->result_array();
	}
	public  function get_home_contactus_details(){
		$this->db->select('*')->from('contactform');
		$this->db->where('homepage_preview',1);
		return $this->db->get()->row_array();
	}
	
	/* update home  page  preview  status*/
	public  function update_home_page_preview_status($s_id,$data){
		$this->db->where('s_id',$s_id);
		return $this->db->update('slider',$data);
		
	}
	public  function update_home_page_gallery_preview_status($g_id,$data){
		$this->db->where('g_id',$g_id);
		return $this->db->update('gallery',$data);
	}
	public  function update_home_page_estimonials_preview_status($g_id,$data){
		$this->db->where('t_id',$g_id);
		return $this->db->update('testimonial',$data);
	}
	public  function update_home_page_about_us_preview_status($a_id,$data){
		$this->db->where('a_id',$a_id);
		return $this->db->update('aboutus',$data);
	}
	public  function update_home_page_services_preview_status($s_id,$data){
		$this->db->where('s_id',$s_id);
		return $this->db->update('services',$data);
	}
	public  function update_home_page_contactus_details_preview_status($c_id,$data){
		$this->db->where('c_id',$c_id);
		return $this->db->update('contactform',$data);
	}
	public  function update_home_page_instrument_preview_status($i_id,$data){
		$this->db->where('i_id',$i_id);
		return $this->db->update('instruments',$data);
		
	}
	
	
	
	public  function get_instrument_details(){
		$this->db->select('*')->from('instruments');
		$this->db->where('status',1);
		$return=$this->db->get()->result_array();
  foreach($return as $list){
   $lists=$this->get_instument_data_list($list['i_id']);
   //echo '<pre>';print_r($lists);exit;
   $data[$list['i_id']]=$list;
   $data[$list['i_id']]['instrument_list']=$lists;
   
  }
  
  if(!empty($data)){
   
   return $data;
   
  }
 }
	public function get_instument_data_list($id){
	 $this->db->select('instruments_data.*')->from('instruments_data');
     $this->db->where('instruments_data.i_id',$id);
	 return $this->db->get()->result_array();
	
	}
	
	
	
	
	public function get_services_list(){
	$this->db->select('services.*')->from('services');
	 $this->db->where('services.status',1);
	 $return=$this->db->get()->result_array();
	 //echo '<pre>';print_r($return);exit;
	  $cnt=0;foreach($return as $list){
	   $lists=$this->get_servies_data_list($list['s_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$cnt]=$list;
	   $data[$cnt]['servies']=$lists;
	   
	 $cnt++;}
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function get_servies_data_list($s_id){
	 $this->db->select('servies_name.*')->from('servies_name');
     $this->db->where('servies_name.s_id',$s_id);
     $this->db->where('servies_name.status',1);
	 $return=$this->db->get()->result_array();
	  //echo '<pre>';print_r($return);exit;
	foreach($return as $list){
	   $lists=$this->get_servies_one_list($list['s_n_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$list['s_n_id']]=$list;
	   $data[$list['s_n_id']]['servie_data']=$lists;
	   
	  }
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function get_servies_one_list($s_n_id){
	 $this->db->select('service_name_details.*')->from('service_name_details');
     $this->db->where('service_name_details.s_n_id',$s_n_id);
     $this->db->where('service_name_details.status',1);
	 return $this->db->get()->result_array();
	}
	
	
	
	/*  home page */
	public  function home_get_logo_details(){
		$this->db->select('*')->from('logo');
		$this->db->where('homepage_preview',1);
		$this->db->where('status',1);
		return $this->db->get()->row_array();
	}
	public  function home_get_slider_details(){
		$this->db->select('s_id,text,image')->from('slider');
		$this->db->where('status',1);
		$this->db->where('homepage_preview',1);
		return $this->db->get()->result_array();
	}
	
	public  function home_get_aboutus_details(){
		$this->db->select('*')->from('aboutus');
		$this->db->where('status',1);
		$this->db->where('homepage_preview',1);
		return $this->db->get()->row_array();
	}
	
	
	public function home_get_services_list(){
	$this->db->select('services.*')->from('services');
	 $this->db->where('services.status',1);
	 $this->db->where('services.homepage_preview',1);
	 $return=$this->db->get()->result_array();
	 //echo '<pre>';print_r($return);exit;
	  $cnt=0;foreach($return as $list){
	   $lists=$this->home_get_servies_data_list($list['s_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$cnt]=$list;
	   $data[$cnt]['servies']=$lists;
	   
	 $cnt++;}
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function home_get_servies_data_list($s_id){
	 $this->db->select('servies_name.*')->from('servies_name');
     $this->db->where('servies_name.s_id',$s_id);
     $this->db->where('servies_name.status',1);
	 $return=$this->db->get()->result_array();
	  //echo '<pre>';print_r($return);exit;
	foreach($return as $list){
	   $lists=$this->home_get_servies_one_list($list['s_n_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$list['s_n_id']]=$list;
	   $data[$list['s_n_id']]['servie_data']=$lists;
	   
	  }
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function home_get_servies_one_list($s_n_id){
	 $this->db->select('service_name_details.*')->from('service_name_details');
     $this->db->where('service_name_details.s_n_id',$s_n_id);
     $this->db->where('service_name_details.status',1);
	 return $this->db->get()->result_array();
	}
	
	public  function home_get_instrument_details(){
		$this->db->select('*')->from('instruments');
		$this->db->where('status',1);
		$this->db->where('homepage_preview',1);
		$return=$this->db->get()->result_array();
  foreach($return as $list){
   $lists=$this->home_get_instument_data_list($list['i_id']);
   //echo '<pre>';print_r($lists);exit;
   $data[$list['i_id']]=$list;
   $data[$list['i_id']]['instrument_list']=$lists;
   
  }
  
  if(!empty($data)){
   
   return $data;
   
  }
 }
	public function home_get_instument_data_list($id){
	 $this->db->select('instruments_data.*')->from('instruments_data');
     $this->db->where('instruments_data.i_id',$id);
	 return $this->db->get()->result_array();
	
	}
	
	public  function home_get_gallery_details(){
		$this->db->select('*')->from('gallery');
		$this->db->where('status',1);
		$this->db->where('homepage_preview',1);
		return $this->db->get()->result_array();
	}
	
	public  function home_get_testimonials_details(){
		$this->db->select('*')->from('testimonial');
		$this->db->where('status',1);
		$this->db->where('homepage_preview',1);
		return $this->db->get()->result_array();
	}
	public  function home_get_contactus_details(){
		$this->db->select('*')->from('contactform');
		$this->db->where('status',1);
		$this->db->where('homepage_preview',1);
		return $this->db->get()->row_array();
	}
	
	/* concat us form */
	public function get_contact_form_details(){
	$this->db->select('*')->from('contactform');
	    return $this->db->get()->row_array();
	}
	
	public function update_contact_form_details($data){
		return $this->db->update("contactform",$data);
	}
	public function save_contactus_form_details($data){
	$this->db->insert('contactform',$data);	
	return $this->db->insert_id();	
	}
	
	
	
	
	
	
	
		

}