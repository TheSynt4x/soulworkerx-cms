<?php

/** @var \Laravel\Lumen\Routing\Router $router */



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@index']);
Route::post('/login', 'LoginController@store');

Route::get('/register', ['as' => 'register', 'uses' => 'RegisterController@index']);
