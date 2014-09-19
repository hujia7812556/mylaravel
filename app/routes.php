<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('time', function()
{
    return "现在时间:".date("Y-m-d H:i:s");
});

Route::group(array('domain' => 'jia.hu.com'), function()
{

	Route::get('/', function($account, $id)
	{
		//
		return "现在时间:".date("Y-m-d H:i:s");
	});

});