<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dms_dealers extends Model
{
	
    protected $connection = 'mysql';
    protected $table = 'dms_dealers';
    protected $fillable = ['d_fname','d_lname','d_code','d_city','d_email','d_password','d_mobile'];
}
