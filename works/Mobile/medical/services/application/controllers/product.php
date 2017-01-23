<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model("product_model");
	}


	public function index()
	{
		
	}

	public function add_product()
	{
		
		$result = $this->product_model->add_product();
		echo $result;	
		
	}

	public function view_product()
	{
		
		$result = $this->product_model->view_product();
		echo json_encode($result);	
		
	}

	public function get_brand_id()
	{
		
		$result = $this->product_model->get_brand_id();
		echo json_encode($result);	
		
	}

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
		
	}

	public function allDrugDetails()
	{
		
		$result = $this->product_model->allDrugDetails();
		echo json_encode($result);	
		
	}

	public function insert()
	{
		
		print_r($this->input->post('des'));
		
	}
	
}

