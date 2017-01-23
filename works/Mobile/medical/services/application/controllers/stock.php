<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model("stock_model");
	}


	public function index()
	{
		
	}

	public function add_stock()
	{
		
		$result = $this->stock_model->add_stock();
		echo $result;	
		
	}

	public function view_stock()
	{
		
		$result = $this->stock_model->view_stock();
		echo json_encode($result);	
		
	}

	public function get_stock_id()
	{
		
		$result = $this->stock_model->get_stock_id();
		echo json_encode($result);	
		//return $result;
		
	}
/*
	public function edit_product()
	{
		
		$result = $this->product_model->edit_product();
		echo json_encode($result);	
		
	}

	public function update_product()
	{
		
		$result = $this->product_model->update_product();
		echo $result;	
		
	}

	public function delete_product()
	{
		
		$result = $this->product_model->delete_product();
		echo $result;	
		
	}

	public function view_product_typehead()
	{
		
		$result = $this->product_model->view_product_typehead();
		echo json_encode($result);	
		
	}*/
	
}

