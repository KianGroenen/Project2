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

// USERS
Route::get('users', 'UserController@index');
Route::post('users/delete/{id}', 'UserController@delete');
Route::get('user/{id}', 'UserController@edit');
Route::post('user/{id}/update', 'UserController@update');
Route::get('users/register', 'UserController@create');
Route::post('user/store', 'UserController@store');

// PRONOSTIEK
Route::get('pronostiek/{id}/create', 'PronostiekController@create');
Route::post('pronostiek/store', 'PronostiekController@store');

// MATCHES
Route::get('match', 'MatchController@index');
Route::get('match/create', 'MatchController@create');
Route::post('match/store', 'MatchController@store');
Route::get('match/{id}', 'MatchController@edit');
Route::post('match/{id}/update', 'MatchController@update');

// API
Route::get('api/getall', 'ApiController@getAll');