<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model("auth_model");
	}

	public function index()
	{
		
	}
	public function login()
	{
		$data = json_decode(file_get_contents('php://input'));
		//print_r($data->password);//!='' && $data->password!='')
		if($data->username!='' && $data->password!='')
		{
			$result = $this->auth_model->login();
			echo $result;	
		}
		else
		{
			echo "0";
		}
		
	}
}

