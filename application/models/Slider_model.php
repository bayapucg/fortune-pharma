<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slider_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_slider($data){
		$this->db->insert('slider',$data);
		return $this->db->insert_id();
	}
	
	public  function get_slider_list($u_id){
		$this->db->select('*')->from('slider');
		$this->db->where('created_by',$u_id);
		return $this->db->get()->result_array();
	}
	public  function get_slider_details($s_id){
		$this->db->select('*')->from('slider');
		$this->db->where('s_id',$s_id);
		return $this->db->get()->row_array();
	}
	
	public  function update_slider_details($u_id,$data){
		$this->db->where('s_id',$u_id);
		return $this->db->update('slider',$data);
	}
	public  function delete_slider($s_id){
		$this->db->where('s_id',$s_id);
		return $this->db->delete('slider');
	}
	
	

}