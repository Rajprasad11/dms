<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Users_model extends CI_Model{

	public function index(){

		/*$this->db->select("*");
		$this->db->from("tbl_users");
		$query = $this->db->get();
		return $query;*/
	}
	
	public function allusers(){

		$query=$this->db->query("select * from tbl_users");
		 return $query->result();
	}
	
	
}
