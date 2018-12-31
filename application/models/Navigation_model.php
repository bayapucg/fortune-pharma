<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navigation_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_logo($data){
		$this->db->insert('logo',$data);
		return $this->db->insert_id();
	}
	
	public  function get_logo_details($id){
		$this->db->select('*')->from('logo');
		$this->db->where('id',$id);
		return $this->db->get()->row_array();
	}
	public  function update_logo_details($id,$data){
		$this->db->where('id',$id);
		return $this->db->update('logo',$data);
	}
	
	

}