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

// we can add filter on this grouped Route for api routes
Route::group(['prefix'=>'v1/api'],function() {
    Route::resource('properties','Api\PropertyController',['only'=>['index','show']]);
});

// Page route
Route::get('/', 'PropertyController@index');
