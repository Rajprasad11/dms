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
