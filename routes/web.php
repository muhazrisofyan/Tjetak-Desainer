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

Route::get('/con',function(){
  return view('auth.emailConfirmation');
});

// untuk email edit
Route::get('/ubahemail1',function(){
  return view('emailedit.ubahemail1');
});
Route::get('/ubahemail2',function(){
  return view('emailedit.ubahemail2');
});
Route::get('/ubahemail3',function(){
  return view('emailedit.ubahemail3');
});

Route::get('/changePassword', 'UserController@showChangePasswordForm');

Route::post('/changePassword', 'UserController@changePassword');

Route::get('/ubahpassword2',function(){
  return view('passwordedit.ubahpassword2');
});
