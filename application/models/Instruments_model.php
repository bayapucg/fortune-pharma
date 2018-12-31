<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instruments_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_instruments($data){
		$this->db->insert('instruments',$data);
		return $this->db->insert_id();
	}
	
	
	
	

}