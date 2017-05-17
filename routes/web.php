<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('users', 'UserController@index');
Route::post('users/delete/{id}', 'UserController@delete');
Route::get('user/{id}', 'UserController@edit');
Route::post('user/{id}/update', 'UserController@update');
Route::get('users/register', 'UserController@create');
Route::post('user/store', 'UserController@store');


//SPOTIFY
Route::get('/artists', 'ArtistController@index');
Route::get('/artists/{id}', 'ArtistController@show');