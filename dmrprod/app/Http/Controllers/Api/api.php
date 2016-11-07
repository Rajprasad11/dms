<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Response;	
/**
* 
*/
class api extends Controller
{
	public function test()
	{

		print_r($_REQUEST);exit;
		print  Response::json(array('sucess'=>true,'data'=>1));
	}
}