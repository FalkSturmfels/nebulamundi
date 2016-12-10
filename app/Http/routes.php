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

// Auth
Route::auth();

// Home
Route::get('/', function ()
{
    return view('home');
});

// World
Route::get('/worlds', 'WorldController@index');
Route::get('/worlds/user/{id}', 'WorldController@worldsByUser');
Route::get('/worlds/{world}', 'WorldController@show');

// World def
Route::get('/worlddefs', 'WorldDefController@index');
Route::get('/worlddefs/create', 'WorldDefController@create');
Route::get('/worlddefs/{world}', 'WorldDefController@show');

// User
Route::get('/users', 'UserController@index');


