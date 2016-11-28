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

Route::get('/', 'PagesController@home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/creation', 'PagesController@creation');

    Route::get('/worlds', 'WorldController@index');
    Route::get('/worlds/{world}', 'WorldController@show');

    Route::get('/users', 'UserController@index');
});

Route::auth();

Route::get('/home', 'HomeController@index');
