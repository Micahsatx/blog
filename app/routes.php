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


Route::get('/test', 'HomeController@showTest');
Route::get('/', 'HomeController@showWelcome');
Route::get('whackamole', 'HomeController@showWhackamole');
Route::get('/resume', 'HomeController@showResume');
Route::get('/portfolio', 'HomeController@showPortfolio');
Route::get('/rolldice/{guess?}', 'HomeController@showrollDice');

// 10.2.6  creating routes for the 7 methods of posting, creating, deleteing, etc
Route::resource('/posts', 'PostsController');

Route::get('/login', 'HomeController@loginForm');
Route::post('/login', 'HomeController@doLogin');
// unsure what i am getting here
Route::get('/logout', 'HomeController@doLogout');

// Route::make('/newUser');
Route::get('/newUser', 'HomeController@makeNewUserPage');
Route::post('/newUser', 'PostsController@newUser');
