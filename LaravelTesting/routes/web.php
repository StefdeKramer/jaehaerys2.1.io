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

Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);

Route::get('/dashboard', [
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
]);


//
//Route::group(['middleware' => ['web']], function() {
//    Route::get('/', function() {
//        return view('welcome');
//    });
//
//    Route::posts('/signup', [
//        'uses' => 'UserController@postSignUp',
//        'as' => 'signup'
//    ]);
//});