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

Route::get('/', 'IndexController@getIndex');




//Route::get('/signup', 'UserController@getSignup'); 
//Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', ['before' => 'csrf', 'uses' => 'UserController@postSignup'] );
Route::post('/login', ['before' => 'csrf', 'uses' => 'UserController@postLogin'] );
Route::get('/logout', ['before' => 'auth', 'uses' => 'UserController@getLogout'] );

Route::get('/task/create', 'TaskController@getCreate');
Route::post('/task/create', 'TaskController@postCreate');
Route::get('/task/all', 'TaskController@getAll');
Route::get('/task/todo', 'TaskController@getTodo');
Route::get('/task/done', 'TaskController@getDone');
Route::get('/task/{id}', 'TaskController@getOne');
Route::get('/task/edit/{id}', 'TaskController@getEdit');
Route::post('/task/edit/{id}', 'TaskController@postEdit');
Route::post('/task/setDone/{id}', 'TaskController@postDone');






