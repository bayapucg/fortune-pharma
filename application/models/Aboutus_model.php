<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_aboutus_details($data){
		$this->db->insert('aboutus',$data);
		return $this->db->insert_id();
	}
	
	public  function get_aboutus_list(){
		$this->db->select('*')->from('aboutus');
		$this->db->where('aboutus.status !=', 2);
		return $this->db->get()->result_array();
	}
	public  function get_aboutus_details(){
		$this->db->select('*')->from('aboutus');
		return $this->db->get()->row_array();
	}
	
	public  function update_aboutus_details($a_id,$data){
		$this->db->where('a_id',$a_id);
    return $this->db->update("aboutus",$data);
	}
	public  function delete_aboutus($a_id){
		$this->db->where('a_id',$a_id);
		return $this->db->delete('aboutus');
	}
	
	
	public function save_contactus_form_details($data){
	$this->db->insert('contactform',$data);	
	return $this->db->insert_id();	
	}
     public function edit_aboutus_details($a_id){
	$this->db->select('*')->from('aboutus');
		$this->db->where('aboutus.a_id',$a_id);
		return $this->db->get()->row_array();
	}
	
	public  function check_about_active_ornot(){
	$this->db->select('*')->from('aboutus');
	$this->db->where('aboutus.status',1);
	return $this->db->get()->row_array();
}
	
	
	
	
	
	
}