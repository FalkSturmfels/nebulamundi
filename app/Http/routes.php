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
Route::get('worlds', 'WorldController@index');
Route::get('worlds/user/{id}', 'WorldController@worldsByUser');
Route::get('worlds/{world}', 'WorldController@show');

// World def
Route::get('worlddefs', 'WorldDefController@index');

Route::get('worlddefs/create', 'WorldDefController@create');
Route::post('worlddefs/create', 'WorldDefController@store');

Route::get('worlddefs/{world}', 'WorldDefController@show');

Route::get('worlddefs/{world}/edit', 'WorldDefController@edit');
Route::patch('worlddefs/{world}', 'WorldDefController@update');

Route::delete('worlddefs/{world}', 'WorldDefController@destroy');

// Adventure
Route::get('worlddefs/{world}/adventures', 'AdventureController@index');

Route::get('worlddefs/{world}/adventures/create', 'AdventureController@create');
Route::post('worlddefs/{world}/adventures/create', 'AdventureController@store');

Route::get('adventures/{adventure}', 'AdventureController@show');

Route::get('worlddefs/{world}/adventures/{adventure}/edit', 'AdventureController@edit');
Route::patch('worlddefs/{world}/adventures/{adventure}', 'AdventureController@update');

Route::delete('worlddefs/{world}/adventures/{adventure}', 'AdventureController@destroy');

// User
Route::get('/users', 'UserController@index');


