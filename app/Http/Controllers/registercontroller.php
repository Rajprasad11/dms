<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Request\Session;

use Request;

use App\Http\Requests;
use App\dms_dealers;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\registervalidation;
use Redirect; 
use DB;
use Session;
//use Illuminate\Http\Request;
class registercontroller extends Controller
{
    

    public function create(){
    	return view('registration');
    }

    public function login(){
        return view('login');
    }

    public function store(registervalidation $request){
    	$dealer=dms_dealers::create(Request::all());
    	$fname=$request->input('d_fname');
    	$email=$request->input('d_email');
        //$id=$dealer->id;
    	$data = array('id' => $id,'fname' => $fname ,'email' => $email);
    	
    	Mail::send('mailmessage',
    				array('name'=>'Falconnect Technologies'),
    				function($message) use ($data)
    				{
						$message->to($data['email'],$data['fname'],$data['id'])->subject('Falconnect register Password creation');
					});
    	
    	return Redirect::route('mailsend',['id'=>$dealer->id]);
    }

    public function mailsend(Request $req, $id){
        return view('password_activation', ['id' => $id]);
       //return view('password_activation');
        //return Redirect::route('passwordactivation',['id'=>$id]);
    }

    public function passwordconfirm(Request $req){
        //echo $id;
        $id=Request::input('id');
    	$password=Request::input('newpassword');
    	$cpassword=Request::input('confirmpassword');
    	
        if($password == $cpassword){
    		
	        $dms_dealers = new dms_dealers;
            $affectedRows = $dms_dealers::where('d_id', '=', $id)->update(['d_password' => $password]);

	       return view('login');
    	}
    	else{
    		return Redirect::back()->with('message', 'Wrong password! Please try again.');
    	}
   }


   public function loginprocess(Request $req){
        //$id=Request::input('id');
        $fname=Request::input('fname');
        $password=Request::input('password');

        
        $checkuser=dms_dealers::selectRaw("Count(*) as Total")->where('d_fname',"=",$fname)->first();
        if(intval($checkuser->Total)>0){
            $getpassword=dms_dealers::select("d_password")->where('d_fname',"=",$fname)->first();
            $hash_password=password_hash($getpassword->d_password, PASSWORD_DEFAULT);
            if(password_verify($password,$hash_password)){
                //$req->session()->put('manuser',$fname);
                session(['manuser' => $fname]);
                $manuser=Session::get('manuser');
                //return view('dashboard',['manuser' => $manuser]);
                return Redirect::route('show',['manuser'=> $manuser]);
                
            }
            else{
                return view('login');
            }
        }
        else{
            return view('login');
        }
       
  }

   public function show(Request $req,$manuser){
    //$manuser=Session::get('manuser');
     return view('dashboard');
    //return "dash board page";
   }

   public function logoutprocess(Request $req){
        //$id=Request::input('id');
        $req->session()->flush();
        return view('login');
   }
     
}
