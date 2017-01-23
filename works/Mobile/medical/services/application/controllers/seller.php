<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seller extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model("seller_model");
	}


	public function index()
	{
		
	}

	public function add_seller()
	{
		
		$result = $this->seller_model->add_seller();
		echo $result;	
		
	}

	public function view_seller()
	{
		
		$result = $this->seller_model->view_seller();
		echo json_encode($result);	
		
	}
/*
	public function edit_brand()
	{
		
		$result = $this->brand_model->edit_brand();
		echo json_encode($result);	
		
	}

	public function update_brand()
	{
		
		$result = $this->brand_model->update_brand();
		echo $result;	
		
	}

	public function delete_brand()
	{
		
		$result = $this->brand_model->delete_brand();
		echo $result;	
		
	}*/
	
}

