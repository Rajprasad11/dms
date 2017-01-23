<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model("billing_model");
	}


	public function index()
	{
		
	}

	public function getdata()
	{
		
		$result = $this->billing_model->getdata();
		echo json_encode($result);
		
	}

	
}

