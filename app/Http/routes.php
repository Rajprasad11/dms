<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('index','car_managelisting@index');
Route::get('managelisting','car_managelisting@managelisting');
Route::get('add_listing','car_managelisting@add_listing');
Route::post('add_car_listing_store','car_managelisting@add_car_listing_store');
Route::get('delete/{id}','car_managelisting@delete_car_listing');
Route::get('view/{id}','car_managelisting@view_car_listing');
Route::get('update/','car_managelisting@update_car_listing');
Route::get('/', function () {

    return view('registration');

});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('login','registercontroller@login');
Route::post('loginprocess','registercontroller@loginprocess');
Route::get('show/{manuser}',array('as'=>'show','uses'=>'registercontroller@show'));

Route::get('create','registercontroller@create');
Route::post('store','registercontroller@store');

Route::get('mailsend/{id}',array('as'=>'mailsend','uses'=>'registercontroller@mailsend'));

//Route::get('mailsend/{id}',function())

Route::get('passwordactivation/{id}',array('as'=>'passwordactivation','uses'=>'registercontroller@passwordconfirm'));
Route::post('passwordconfirm','registercontroller@passwordconfirm');

