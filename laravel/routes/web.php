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

Route::get('/',function () {
    return view('welcome');

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/home', [
    'uses' => 'ExerciseController@getHome',
    'as' => 'home',
    'middleware' => 'auth'
]);


Route::post('/createExercise', [
    'uses' => 'ExerciseController@postCreateExercise',
    'as' => 'exercise.create',
    'middleware' => ['auth', 'roles'],
    'roles' => ['Admin', 'User'],
   
]);

Route::get('/CreateExercise', [
    'uses' => 'ExerciseController@getCreateExercise',
    'middleware' => ['auth', 'roles'],
    'roles' => ['Admin', 'User'],
]);

Route::get('/admin', [
    'uses' => 'UserController@getAdminPage',
    'as' => 'admin',
    'middleware' => ['auth','roles'],
    'roles' => ['Admin']
]);

Route::post('/admin/assign-roles', [
    'uses' => 'UserController@postAdminAssignRoles',
    'as' => 'admin.assign',
    'middleware' => ['auth', 'roles'],
    'roles' => ['Admin']
]);

Route::post('/CreateComment', [
    'uses' => 'CommentController@postCreateComment',
    'as' => 'create.comment',
    'middleware' => 'auth',

]);

Route::get('/CreateComment', [
    'uses' => 'CommentController@getCreateComment',
    'as' => 'CreateComment',
    'middleware' => 'auth'
]);

Route::get('/account', [
    'uses' => 'ExerciseController@getAccount',
    'as' => 'account',
    'middleware' => 'auth'
]);

Route::get('/delete-exercise/{id}', [
    'uses' => 'ExerciseController@getDeleteExercise',
    'as' => 'exercise.delete',
    'middleware' => 'auth'
]);


Route::post('/edit', [
    'uses' => 'ExerciseController@postEditExercise',
    'as' => 'edit'
]);