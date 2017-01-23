<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brand extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model("brand_model");
	}


	public function index()
	{
		
	}

	public function add_brand()
	{
		
		$result = $this->brand_model->add_brand();
		echo $result;	
		
	}

	public function view_brand()
	{
		
		$result = $this->brand_model->view_brand();
		echo json_encode($result);	
		
	}

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
		
	}
	
}

