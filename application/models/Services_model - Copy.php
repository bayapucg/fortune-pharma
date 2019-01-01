<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_services($data){
		$this->db->insert('services',$data);
		return $this->db->insert_id();
	}
	
	public  function get_services_list($u_id){
		$this->db->select('*')->from('services');
		$this->db->where('created_by',$u_id);
		return $this->db->get()->row_array();
	}
	public  function get_services_details($s_id){
		$this->db->select('*')->from('services');
		$this->db->where('s_id',$s_id);
		return $this->db->get()->row_array();
	}
	
	public  function update_services_details($u_id,$data){
		$this->db->where('s_id',$u_id);
		return $this->db->update('services',$data);
	}
	public  function delete_services($s_id){
		$this->db->where('s_id',$s_id);
		return $this->db->delete('services');
	}
	
	

}