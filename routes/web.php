<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('/', [ 
        'uses' => 'HomeController@viewHome',
        'as' => 'viewHome'
        ]);


    Route::get('auth/login',  ['uses'=>'Auth\LoginController@getLogin', 'as'=>'auth.login']);
    Route::post('auth/login',  ['uses'=>'Auth\LoginController@postLogin', 'as'=>'auth.login']);
    Route::get('auth/logout',  ['uses'=>'Auth\LoginController@getLogout', 'as'=>'auth.logout']);

/*     Route::get('auth/login', 'Auth\LoginController@getLogin');
    Route::post('auth/login', 'Auth\LoginController@postLogin');
    Route::get('auth/logout', 'Auth\LoginController@getLogout'); */