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
	public function get_logo_list(){
	$this->db->select('*')->from('logo');
	$this->db->where('logo.status !=', 2);
		return $this->db->get()->result_array();
	}
	public function get_edit_logo_list($id){
	$this->db->select('*')->from('logo');
		$this->db->where('id',$id);
		return $this->db->get()->row_array();
	}
	public function check_logo_active_ornot(){
    $this->db->select('*')->from('logo');
     $this->db->where('logo.status',1);
     return $this->db->get()->result_array();
	}
	
	
	
	
	

}