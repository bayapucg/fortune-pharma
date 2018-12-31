<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_testimonial($data){
		$this->db->insert('testimonial',$data);
		return $this->db->insert_id();
	}
	
	public  function get_testimonial_list($u_id){
		$this->db->select('*')->from('testimonial');
		$this->db->where('create_by',$u_id);
		return $this->db->get()->result_array();
	}
	public  function get_testimonial_details($t_id){
		$this->db->select('*')->from('testimonial');
		$this->db->where('t_id',$t_id);
		return $this->db->get()->row_array();
	}
	
	public  function update_testimonial_details($u_id,$data){
		$this->db->where('t_id',$u_id);
		return $this->db->update('testimonial',$data);
	}
	public  function delete_testimonial($t_id){
		$this->db->where('t_id',$t_id);
		return $this->db->delete('testimonial');
	}
	
	

}