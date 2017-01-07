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

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home'])->middleware('auth');

Route::group(['prefix'=>'adminzone','middleware'=>'AuthAdmin:admin'], function()
{
    Route::get('/', ['uses' => 'AdminController@index', 'as' => 'admin']);

    Route::get('/menu', ['uses' => 'MenuController@index', 'as' => 'menu']);
});

Route::get('/admin/login', ['uses' => 'AuthAdmin\LoginController@showLoginForm', 'as' => 'admin.login'])
            ->middleware('guest:admin');

Route::post('/admin/login', 'AuthAdmin\LoginController@login')->middleware('Protected');
Route::get('/admin/logout', 'AuthAdmin\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index');
