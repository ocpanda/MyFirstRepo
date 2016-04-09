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
Route::get('/',function(){
	return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
	Route::get('dashboard',['as'=>'gadmin', function(){
		return 'asdasdasddddd';
	}]);
	Route::get('say',['as'=>'hello',function () {
    return 'Hello<a href="{{route('gadmin')}}">asddwf</a>';
	}]);
});

