<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_services_details($data){
		$this->db->insert('services',$data);
		return $this->db->insert_id()?$this->db->insert_id():0;
	}
	public  function save_servies_data_details($data){
		$this->db->insert('servies_data',$data);
		return $this->db->insert_id();
	}
	
	
	
	public function check_services_status(){
	$this->db->select('*')->from('services');
	$this->db->where('status',1);
	return $this->db->get()->result_array();	
	}
	public function update_services_details($s_id,$data){
	$this->db->where('s_id',$s_id);
    return $this->db->update("services",$data);
	}
	
	public function delete_servies_details($s_b_d_id){
	$this->db->where('s_b_d_id',$s_b_d_id);
	return $this->db->delete('service_name_details');
	}
	public function update_servies($s_id,$data){
	$this->db->where('s_id',$s_id);
    return $this->db->update("services",$data);
	}
	public function update_servies_status($s_id,$data){
	$this->db->where('s_id',$s_id);
    return $this->db->update("services",$data);
	}
	
	
	public function update_servies_name_details($s_id,$data){
    $this->db->where('s_id',$s_id);
    return $this->db->update("servies_name",$data);
	}
	public function update_servies_one_data_details($s_id,$data){
    $this->db->where('s_id',$s_id);
    return $this->db->update("service_name_details",$data);
	}
	
	
	
	public function get_edit_servies_name_list($s_n_id){
	$this->db->select('*')->from('service_name_details');
		$this->db->where('service_name_details.s_n_id',$s_n_id);
		return $this->db->get()->result_array();
	}
	
	
	
	public  function get_edit_servies_list_data($s_id){
		$this->db->select('*')->from('servies_data');
		$this->db->where('servies_data.s_id',$s_id);
		return $this->db->get()->result_array();
	}
	
	public function delete_serves_data_details($s_d_id){
	$this->db->where('s_d_id',$s_d_id);
	return $this->db->delete('servies_data');
	}
	
	public function save_servies_list_data_details($data){
	$this->db->insert('servies_data',$data);
	return $this->db->insert_id();	
	}
	public  function edit_servies_list($s_id){
		$this->db->select('*')->from('servies_data');
		$this->db->where('servies_data.s_id',$s_id);
		return $this->db->get()->result_array();
	}
	
	
	public function save_servies_name_details($data){
	$this->db->insert('servies_name',$data);
	return $this->db->insert_id()?$this->db->insert_id():0;
	}
	
	
	public function save_servies_one_data_details($data){
	$this->db->insert_batch('service_name_details',$data);
	return $this->db->affected_rows()?1:0;
	}
	
	
	public function get_services_list(){
	$this->db->select('services.*')->from('services');
	$this->db->where('services.status !=', 2);
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
	
	public function edit_servies_details($s_id){
	$this->db->select('services.*')->from('services');
	$this->db->where('s_id',$s_id);
	$return=$this->db->get()->row_array();
		$sevie_list=$this->get_edit_servies_list($return['s_id']);
		$data=$return;
		$data['sevies_list']=$sevie_list;
		if(!empty($data)){
			return $data;
		}
	}
	public  function get_edit_servies_list($s_id){
		$this->db->select('*')->from('servies_name');
		$this->db->where('servies_name.s_id',$s_id);
		$return=$this->db->get()->result_array();
	  //echo '<pre>';print_r($return);exit;
	foreach($return as $list){
	   $lists=$this->get_edit__servies_one_list($list['s_n_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$list['s_n_id']]=$list;
	   $data[$list['s_n_id']]['servie_data']=$lists;
	   
	  }
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function get_edit__servies_one_list($s_n_id){
	 $this->db->select('service_name_details.*')->from('service_name_details');
     $this->db->where('service_name_details.s_n_id',$s_n_id);
     $this->db->where('service_name_details.status',1);
	 return $this->db->get()->result_array();
	}
	
	public function edit_servies_name_details_sevies_name($data){
	return $this->db->update("service_name_details",$data);
	
	}
	
	
	
	
	
	
	
	
	
	public  function check_servies_active_ornot(){
	$this->db->select('*')->from('services');
	$this->db->where('services.status',1);
	return $this->db->get()->row_array();
}
	
   public function delete_services_name_details_data($s_b_d_id){
	$this->db->where('s_b_d_id',$s_b_d_id);
	return $this->db->delete('service_name_details');
	}	
	
	
	
	
	
	
	
	public  function edit_servies_name($s_n_id){
		$this->db->select('*')->from('servies_name');
		$this->db->where('servies_name.s_n_id',$s_n_id);
		return $this->db->get()->result_array();
	}
	public function get_edit_servies_name_details_one_list($s_n_id){
	$this->db->select('*')->from('service_name_details');
		$this->db->where('service_name_details.s_n_id',$s_n_id);
		return $this->db->get()->result_array();
	}
	
	
	
	
	
	
	
	
	
	
	
	
}