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


Route::get('/', function(){
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'user'], function(){

    Route::get('/', ['as' => 'index', 'uses' => 'UserController@index']);
    Route::get('create', ['as' => 'create', 'uses' => 'UserController@create']);
    Route::post('store', ['as' => 'add', 'uses' => 'UserController@store']);
    Route::get('{id}', ['as' => 'show', 'uses' => 'UserController@show']);

});


Route::group(['middleware' => ['web']], function(){
    Route::group(['prefix' => 'auth/github'], function(){
        Route::get('/', 'GitHubController@redirect');
        Route::get('callback', 'GitHubController@handle');
    });
});