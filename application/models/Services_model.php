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
		return $this->db->insert_id();
	}
	public  function save_servies_data_details($data){
		$this->db->insert('servies_data',$data);
		return $this->db->insert_id();
	}
	
	public function get_services_list(){
	$this->db->select('services.*')->from('services');
	$this->db->where('services.status !=', 2);
	 $return=$this->db->get()->result_array();
	  foreach($return as $list){
	   $lists=$this->get_servies_data_list($list['s_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$list['s_id']]=$list;
	   $data[$list['s_id']]['servies']=$lists;
	   
	  }
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function get_servies_data_list($id){
	 $this->db->select('servies_data.*')->from('servies_data');
     $this->db->where('servies_data.s_id',$id);
     $this->db->where('servies_data.status !=',2);
	 return $this->db->get()->result_array();
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
	

}