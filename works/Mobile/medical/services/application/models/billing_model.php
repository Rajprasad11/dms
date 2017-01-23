<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Billing_model extends CI_Model{

	public function index(){

	}
	

	public function getdata()
	{
		$data = json_decode(file_get_contents('php://input'));
		$drugId = $data->drugId;
		$this->db->select('*');
		$this->db->from('tbl_stock s');
		$this->db->join('tbl_product p','p.product_id=s.productid','inner');
		$this->db->where('s.productid',$drugId);		
		$query = $this->db->get();
		return $query->result();
	}

	
	
}
