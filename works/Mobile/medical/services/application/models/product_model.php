<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Product_model extends CI_Model{

	public function index(){

	}
	
	
	public function add_product()
	{

		$data = json_decode(file_get_contents('php://input'));
		$productname = $data->productname;
		$brandid = $data->brandid;
		//return "select * from tbl_product where brand_id='$brandid' and product_name='$productname'";
		$brand_chk = $this->db->query("select * from tbl_product where brand_id='$brandid' and product_name='$productname' ")->num_rows();
		if($brand_chk==0)
		{
			$dtm = date('Y-m-d H:i:s');
			$data=array(
				'brand_id'=>$brandid,	
				'product_name'=>$productname,
				'product_status'=>'Active',			
				'created_dtm'=>$dtm				
				);
			$this->db->insert("tbl_product",$data);
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

	public function view_product()
	{
		$this->db->select('*,p.brand_id as productBrandId');
		$this->db->from('tbl_product p');
		$this->db->join('tbl_brand b', 'b.brand_id=p.brand_id', 'inner');
		$this->db->order_by('product_id desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function allDrugDetails()
	{
		$this->db->select('*');
		$this->db->from('tbl_product');		
		$this->db->order_by('product_id desc');
		$query = $this->db->get();
		return $query->result();
	}


	public function get_brand_id()
	{
		$data = json_decode(file_get_contents('php://input'));
		$brandname = $data->brandname;		
		$this->db->select('brand_id');
		$this->db->from('tbl_brand');
		$this->db->where('brand_name',$brandname);
		$query = $this->db->get();
		return $query->result();
	}

	public function edit_product()
	{
		$data = json_decode(file_get_contents('php://input'));
		$productid = $data->productid;
		$this->db->select('*');
		$this->db->from('tbl_product p');
		$this->db->join('tbl_brand b', 'b.brand_id=p.brand_id', 'inner');
		$this->db->where('product_id',$productid);
		$query = $this->db->get();
		return $query->result();

	}

	public function update_product()
	{

		$data = json_decode(file_get_contents('php://input'));
		$productid = $data->productid;
		$productname = $data->productname;
		$brandid = $data->brandid;
		$brand_chk = $this->db->query("select * from tbl_product where brand_id='$brandid' and product_name='$productname' and product_id!='$productid' ")->num_rows();
		if($brand_chk==0)
		{
			$dtm = date('Y-m-d H:i:s');
			$data=array(
				'brand_id'=>$brandid,	
				'product_name'=>$productname,
				'product_status'=>'Active',								
				'updated_dtm'=>$dtm				
				);
			$this->db->where('product_id', $productid);
			$this->db->update('tbl_product', $data);
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

	public function delete_product()
	{
		$data = json_decode(file_get_contents('php://input'));
		$product_id = $data->product_id;
		$query = $this->db->query("delete from tbl_product where product_id = '$product_id' ");
		if($this->db->affected_rows() > 0)
		{
			
			echo "1";
		}
		else{
			echo "2";
		}

	}

	public function view_product_typehead()
	{
		$data = json_decode(file_get_contents('php://input'));
		$brand_id = $data->brandid;
		$query = $this->db->query("select * from tbl_product where brand_id = '$brand_id' ")->result();
		return $query;

	}
	
	
}
