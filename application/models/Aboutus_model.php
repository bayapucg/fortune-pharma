<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_aboutus($data){
		$this->db->insert('aboutus',$data);
		return $this->db->insert_id();
	}
	
	public  function get_aboutus_list($u_id){
		$this->db->select('*')->from('aboutus');
		$this->db->where('created_by',$u_id);
		return $this->db->get()->row_array();
	}
	public  function get_aboutus_details($a_id){
		$this->db->select('*')->from('aboutus');
		$this->db->where('a_id',$a_id);
		return $this->db->get()->row_array();
	}
	
	public  function update_aboutus_details($u_id,$data){
		$this->db->where('a_id',$u_id);
		return $this->db->update('aboutus',$data);
	}
	public  function delete_aboutus($a_id){
		$this->db->where('a_id',$a_id);
		return $this->db->delete('aboutus');
	}
	
	

}