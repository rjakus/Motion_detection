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
Route::get('/home', 'HomeController@index');
Route::auth();
Route::get('vision', 'ImageController@index');
Route::get('vision/destroy', 'ImageController@destroy');
Route::get('vision/{vision}', 'ImageController@delete');


