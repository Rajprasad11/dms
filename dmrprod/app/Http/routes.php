<?php


Route::get('/', function () {
    return view('registration');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('dashboard','car_managelisting@index');
Route::get('managelisting','car_managelisting@managelisting');
Route::get('add_listing','car_managelisting@add_listing');
Route::post('add_car_listing_store','car_managelisting@add_car_listing_store');
Route::get('delete/{id}','car_managelisting@delete_car_listing');
Route::get('view/{id}','car_managelisting@view_car_listing');
Route::get('update/{id}','car_managelisting@update_car_listing');
Route::post('edit_car_listing','car_managelisting@edit_car_listing');

Route::get('/', function () {

    return view('registration');

});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('create','registercontroller@create');
Route::post('store','registercontroller@store');
Route::get('mailsend/{id}',array('as'=>'mailsend','uses'=>'registercontroller@mailsend'));
Route::get('passwordactivation/{id}',array('as'=>'passwordactivation',
	'uses'=>'registercontroller@passwordconfirm'));
Route::post('passwordconfirm','registercontroller@passwordconfirm');


Route::post('test','Api\api@test');