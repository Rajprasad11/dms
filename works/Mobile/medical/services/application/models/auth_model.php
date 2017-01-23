<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Auth_model extends CI_Model{

	public function index(){

	}
	
	
	public function login()
	{
		$data = json_decode(file_get_contents('php://input'));
		$username = $data->username;
		$password = $data->password;
		$this->db->select("*");
		$this->db->from("tbl_users");
		$this->db->where("user_name",$username);
		$this->db->where("user_password",$password);
		$query = $this->db->get();
		if($query->num_rows>0)
		{
			$result_data = $query->result();
			$result_data['count'] = '1';
			return json_encode($result_data);
		}
		else
		{
			$result_data['count'] = '0';
			return json_encode($result_data);
		}
			
	}
	public function chk ()
	{
		echo "hai";
	}
	
}
