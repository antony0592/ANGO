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
        'uses' => 'HomeController@home',
        'as' => 'home'
        ]);

    Route::get('login', function(){
        return view('auth.login');
    });


    Route::post('login',  'Auth\LoginController@login')->name('login');

    Route::get('images', [ 
        'uses' => 'ImagesController@index',
        'as' => 'images.index'
        ]);


    //Route::post('auth/login',  ['uses'=>'Auth\LoginController@getlogin', 'as'=>'auth.getlogin']);


/*     Route::group(['prefix' => 'client'],function(){
        //Route::resource('users','UsersController');
    }); */

    /* SIGN IN */
    Route::get('client/users/create',  ['uses'=>'UsersController@create', 'as'=>'client.users.create']);
    Route::post('client/users/store',  ['uses'=>'UsersController@store', 'as'=>'client.users.store']);
 
    /* LOGIN */
/*     Route::get('auth/login',  ['uses'=>'Auth\LoginController@getLogin', 'as'=>'auth.login']);
    Route::post('auth/login',  ['uses'=>'Auth\LoginController@postLogin', 'as'=>'auth.login']);
    Route::get('auth/logout',  ['uses'=>'Auth\LoginController@getLogout', 'as'=>'auth.logout']);

Auth::routes(); */

