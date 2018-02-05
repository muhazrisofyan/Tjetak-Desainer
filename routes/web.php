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

Route::get('/','landingPageController@index');

Route::group(['middleware' => 'verified'], function(){
  Route::get('/home', 'HomeController@index');
});

Auth::routes();

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::get('/confirm', function(){
    return view('verification');
});

Route::get('/confirm2', function(){
    return view('confirm2');
});
