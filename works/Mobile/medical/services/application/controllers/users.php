<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model("users_model");
	}

	public function index()
	{
		
		$result = $this->users_model->allusers();
		echo json_encode($result);	
	}
	
}

