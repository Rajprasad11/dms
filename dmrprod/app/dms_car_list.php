<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class dms_car_list extends Model
{
    public static function view()
    {
    	return DB::connection('dmsmysql')->table('dms_car_listings')->get();
    }
}
