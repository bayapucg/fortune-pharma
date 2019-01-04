<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function login_details($data){
		$this->db->select('*')->from('admin');		
		$this->db->where('email', $data['email']);
		$this->db->where('password',$data['password']);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();
	}
	
	public  function get_admin_details($id){
		$this->db->select('*')->from('admin');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();
	}
	public function get_adminpassword_details($admin_id){
		$this->db->select('admin.password')->from('admin');		
		$this->db->where('id', $admin_id);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();	
	}
	public function check_email_exits($email){
		$this->db->select('*')->from('admin');		
		$this->db->where('email', $email);
        return $this->db->get()->row_array();	
	}
	public  function update_profile_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("admin",$data);
	}
	public  function get_website_logo_details(){
		$this->db->select('*')->from('logo');		
		$this->db->where('status',1);
        return $this->db->get()->row_array();
	}
	
	/* Instruments  */
	public  function save_instruments($data){
		$this->db->insert('instruments',$data);
		return $this->db->insert_id();
	}
	public function save_instruments_details($data){
	$this->db->insert('instruments_data',$data);
		return $this->db->insert_id();
	}
	public function get_instruments_list(){
	$this->db->select('instruments.*')->from('instruments');
	$this->db->where('instruments.status !=', 2);
	 $return=$this->db->get()->result_array();
	  foreach($return as $list){
	   $lists=$this->get_instruments_data_list($list['i_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$list['i_id']]=$list;
	   $data[$list['i_id']]['instrument']=$lists;
	   
	  }
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function get_instruments_data_list($id){
	 $this->db->select('instruments_data.*')->from('instruments_data');
     $this->db->where('instruments_data.i_id',$id);
     $this->db->where('instruments_data.status !=',2);
	 return $this->db->get()->result_array();
	}
	public function edit_instruments_details($i_id){
	$this->db->select('instruments.*')->from('instruments');
	$this->db->where('i_id',$i_id);
	$return=$this->db->get()->row_array();
		$instrument_list=$this->get_edit_instument_list($return['i_id']);
		$data=$return;
		$data['instrument_list']=$instrument_list;
		if(!empty($data)){
			return $data;
		}
	}
	public  function get_edit_instument_list($i_id){
		$this->db->select('*')->from('instruments_data');
		$this->db->where('instruments_data.i_id',$i_id);
		return $this->db->get()->result_array();
		
	}
	public function delete_instrument_details($i_d_id){
	$this->db->where('i_d_id',$i_d_id);
	return $this->db->delete('instruments_data');
	}
	public function update_instruments($i_id,$data){
	$this->db->where('i_id',$i_id);
    return $this->db->update("instruments",$data);
	}
	public function update_instruments_details($i_id,$data){
	$this->db->where('i_id',$i_id);
    return $this->db->update("instruments",$data);
	}
	public  function get_edit_instrument_list($i_id){
		$this->db->select('*')->from('instruments_data');
		$this->db->where('instruments_data.i_id',$i_id);
		return $this->db->get()->result_array();
	}
	public function delete_instrument_data_details($i_d_id){
	$this->db->where('i_d_id',$i_d_id);
	return $this->db->delete('instruments_data');
	}
	public function save_instrument_list_data_details($data){
	$this->db->insert('instruments_data',$data);
	return $this->db->insert_id();	
	}
	public function check_instruments_active_ornot(){
	$this->db->select('*')->from('instruments');
		$this->db->where('instruments.status',1);
		return $this->db->get()->result_array();	
	}
	

}