<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('userlogin', 'ApiBaseController@userLogin');
Route::post('userregister', 'ApiBaseController@userRegister');
Route::group(['middleware' => 'auth:api'], function(){
	Route::get('userdetails', 'ApiBaseController@userDetails');
});