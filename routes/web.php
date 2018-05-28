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
  Route::get('/myjob', 'HomeController@myjob');
  Route::get('/jobdetail', 'HomeController@jobdetail');
  Route::get('/myjobdetail', 'HomeController@myjobdetail');
});

Auth::routes();

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::get('/changePassword', 'UserController@showChangePasswordForm');

Route::post('/changePassword', 'UserController@changePassword');

// Route::get('/changeEmail', 'UserController@showChangePasswordForm');
//
// Route::post('/changeEmail', 'UserController@changePassword');

Route::get('changeEmail', 'MailResetController@getChangeMail');

Route::post('changeEmail', 'MailResetController@postChangeMail');

Route::get('changeEmail/{token}', 'MailResetController@getChangeMailAddress');

Route::get('emailChanged', 'MailResetController@mailChanged');
