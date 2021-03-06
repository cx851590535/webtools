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

Route::get('/', 'HomeController@index');
Route::get('json/index', 'HomeController@index');
Route::post('json/decode','JsonController@decode');
//模拟请求
Route::get('http/request','RequestController@index');
Route::get('http/getrequest','RequestController@getRequest');

//加密
Route::get('enc/md5','EncryptController@md5Enc');
Route::get('enc/base64','EncryptController@base64');

