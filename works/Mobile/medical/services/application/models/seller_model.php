<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Seller_model extends CI_Model{

	public function index(){

	}
	
	
	public function add_seller()
	{

		$data = json_decode(file_get_contents('php://input'));
		$seller_name = $data->seller_name;
		$location = $data->location;
		$seller_chk = $this->db->query("select * from tbl_seller where seller_name='$seller_name' and seller_location='$location' ")->num_rows();
		if($seller_chk==0)
		{
			$dtm = date('Y-m-d H:i:s');
			$data=array(
				'seller_name'=>$seller_name,	
				'seller_location'=>$location,
				'status'=>'Active',			
				'created_dtm'=>$dtm				
				);
			$this->db->insert("tbl_seller",$data);
			if($this->db->affected_rows() > 0)
			{
				
				echo "1";
			}
			else{
				echo "2";
			}
		}else
		{
			echo "3";
		}
		
		

	}

	public function view_seller()
	{
		$this->db->select('*');
		$this->db->from('tbl_seller');
		$this->db->order_by('seller_id desc');
		$query = $this->db->get();
		return $query->result();
	}
/*
	public function edit_brand()
	{
		$data = json_decode(file_get_contents('php://input'));
		$brandid = $data->brandid;
		$this->db->select('*');
		$this->db->from('tbl_brand');
		$this->db->where('brand_id',$brandid);
		$query = $this->db->get();
		return $query->result();

	}

	public function update_brand()
	{

		$data = json_decode(file_get_contents('php://input'));
		$brandname = $data->brandname;
		$brand_id = $data->brandid;
		$brand_chk = $this->db->query("select brand_name from tbl_brand where brand_name='$brandname' ")->num_rows();
		if($brand_chk==0)
		{
			$dtm = date('Y-m-d H:i:s');
			$data=array(
				'brand_name'=>$data->brandname,					
				'updated_dtm'=>$dtm				
				);
			$this->db->where('brand_id', $brand_id);
			$this->db->update('tbl_brand', $data);
			if($this->db->affected_rows() > 0)
			{
				
				echo "1";
			}
			else{
				echo "2";
			}
		}else
		{
			echo "3";
		}
		
		

	}

	public function delete_brand()
	{
		$data = json_decode(file_get_contents('php://input'));
		$brandid = $data->brandid;
		$query = $this->db->query("delete from tbl_brand where brand_id = '$brandid' ");
		if($this->db->affected_rows() > 0)
		{
			
			echo "1";
		}
		else{
			echo "2";
		}

	}*/
	
	
}
