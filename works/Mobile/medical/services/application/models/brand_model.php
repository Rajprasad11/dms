<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Brand_model extends CI_Model{

	public function index(){

	}
	
	
	public function add_brand()
	{

		$data = json_decode(file_get_contents('php://input'));
		$brandname = $data->brandname;
		$brand_chk = $this->db->query("select brand_name from tbl_brand where brand_name='$brandname' ")->num_rows();
		if($brand_chk==0)
		{
			$dtm = date('Y-m-d H:i:s');
			$data=array(
				'brand_name'=>$data->brandname,	
				'status'=>'Active',			
				'created_dtm'=>$dtm				
				);
			$this->db->insert("tbl_brand",$data);
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

	public function view_brand()
	{
		$this->db->select('*');
		$this->db->from('tbl_brand');
		$this->db->order_by('brand_id desc');
		$query = $this->db->get();
		return $query->result();
	}

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
		$brand_chk = $this->db->query("select brand_name from tbl_brand where brand_name='$brandname' and brand_id!='$brand_id' ")->num_rows();
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

	}
	
	
}
