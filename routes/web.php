<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('userdetails.create');
});

//Route::resource('users','ATGController');
//Route::get('userssave','ATGController@store');
//Route::get('usersshow','ATGController@show');


//Route::get('apiuse','WebServicesController');
