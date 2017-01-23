<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Stock_model extends CI_Model{

	public function index(){

	}
	
	
	public function add_stock()
	{

		$dtm = date('Y-m-d H:i:s');
		$cus_rate = $this->input->post('cus_rate');
		$whole_sale_mrp = $this->input->post('whole_rate');
		$profit = abs($cus_rate-$whole_sale_mrp);

		$data = array(
		
		'brandid' => $this->input->post('brand_name'),
		'productid' => $this->input->post('product_name'),
		'sellerid' => $this->input->post('stock_seller_name'),
		'purchace_date' => $this->input->post('purchase_date'),
		'batch_no' => $this->input->post('batch_no'),
		'quantity' => $this->input->post('quantity'),
		'customer_mrp' => $this->input->post('cus_rate'),
		'profit' => $profit,
		'whole_sale_mrp' => $this->input->post('whole_rate'),
		'manufacture_date' => $this->input->post('mnf_date'),
		'expiry_date' => $this->input->post('exp_date'),
		'status' => 'Active',
		'created_dtm' => $dtm
		
		
		);

		$purchace_date = $this->input->post('purchase_date');
		$batch_no = $this->input->post('batch_no');
		$sellerid = $this->input->post('stock_seller_name');
		$manufacture_date = $this->input->post('mnf_date');
		$expiry_date = $this->input->post('exp_date');

		$stock_chk = $this->db->query("select * from tbl_stock where purchace_date='$purchace_date' and batch_no='$batch_no' and sellerid='$sellerid' and manufacture_date='$manufacture_date' and expiry_date='$expiry_date' ")->num_rows();
		if($stock_chk==0)
		{
			$this->db->insert('tbl_stock', $data);
			if($this->db->affected_rows() > 0)
			{
				
				echo "1";
			}
			else{
				echo "2";
			}
		}
		else
		{
			echo "3";
		}
		
		

	}

	public function view_stock()
	{
		$this->db->select('*');
		$this->db->from('tbl_stock as s');
		$this->db->join('tbl_brand as b', 'b.brand_id = s.brandid','inner');
		$this->db->join('tbl_product as p', 'p.product_id = s.productid','inner');
		$this->db->join('tbl_seller as sel', 'sel.seller_id = s.sellerid','inner');		
		$this->db->group_by('s.brandid,s.productid');
		$this->db->order_by('p.product_name asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_stock_id()
	{
		$data = json_decode(file_get_contents('php://input'));
		//print_r($data);
		$brandid = $data->brandid;
		$productid = $data->productid;
		$this->db->select('*');
		$this->db->from('tbl_stock as s');
		$this->db->join('tbl_brand as b', 'b.brand_id = s.brandid','inner');
		$this->db->join('tbl_product as p', 'p.product_id = s.productid','inner');
		$this->db->join('tbl_seller as sel', 'sel.seller_id = s.sellerid','inner');		
		$this->db->where('s.brandid',$brandid);
		$this->db->where('s.productid',$productid);		
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
