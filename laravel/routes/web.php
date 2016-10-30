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
//
//Route::get('/',function () {
//    return view('welcome');
//
//});

//Authentication route
Auth::routes();

//Welcome Routes
Route::get('/', 'ExerciseController@getWelcome');

//Home Routes
Route::get('/home', 'HomeController@index');

Route::get('/home', [
    'uses' => 'ExerciseController@getHome',
    'as' => 'home',
    'middleware' => 'auth'
]);

//Exercise Routes
Route::post('/createExercise', [
    'uses' => 'ExerciseController@postCreateExercise',
    'as' => 'exercise.create',
    'middleware' => ['auth'],
    // 'roles' => ['Admin', 'User'],

]);

Route::get('/CreateExercise', [
    'uses' => 'ExerciseController@getCreateExercise',
    'middleware' => ['auth'],
    //'roles' => ['Admin', 'User'],
]);

//Admin Routes
Route::get('/admin', [
    'uses' => 'UserController@getAdminPage',
    'as' => 'admin',
    'middleware' => ['auth', 'roles'],
    'roles' => ['Admin']
]);

Route::post('/admin/assign-roles', [
    'uses' => 'UserController@postAdminAssignRoles',
    'as' => 'admin.assign',
    'middleware' => ['auth', 'roles'],
    'roles' => ['Admin']
]);

//Comment Routes
Route::post('/CreateComment', [
    'uses' => 'CommentController@postCreateComment',
    'as' => 'create.comment',
    'middleware' => ['auth', 'roles'],
    'roles' => ['Admin', 'User']

]);

Route::get('/CreateComment/{id}', [
    'uses' => 'CommentController@getCreateComment',
    'as' => 'CreateComment',
    'middleware' => ['auth', 'roles'],
    'roles' => ['Admin', 'User']
]);

Route::get('/Comments', [
    'uses' => 'CommentController@getComment',
    'as' => 'comment',
    'middleware' => 'auth'
]);

//Account Routes
Route::get('/account', [
    'uses' => 'ExerciseController@getAccount',
    'as' => 'account',
    'middleware' => 'auth'
]);


//CRUD Routes

Route::get('/delete-exercise/{id}', [
    'uses' => 'ExerciseController@getDeleteExercise',
    'as' => 'exercise.delete',
    'middleware' => 'auth'
]);

Route::get('/get-exercise/{id}', [
    'uses' => 'ExerciseController@getEditExercise',
    'as' => 'edit',
    'middleware' => 'auth'
]);


Route::post('/edit', [
    'uses' => 'ExerciseController@postEditExercise',
    'as' => 'edit.exercise',
    'middleware' => 'auth'
]);

// Active non-Active exercises

Route::get('/SetNonActive/{id}', [
        'uses' => 'ExerciseController@SetNonActive',
        'as' => 'SetNonActive',
        'middleware' => 'auth'

    ]);

Route::get('/SetActive/{id}', [
    'uses' => 'ExerciseController@SetActive',
    'as' => 'SetActive',
    'middleware' => 'auth'

]);

// Search/Filter
//Route::get('/Search', [
//    'uses' => 'SearchController@Search',
//    'as' => 'Search',
//    'middleware' => 'auth'
//]);

Route::get('/SearchExercise', [
    'uses' => 'SearchController@SearchExercise',
    'as' => 'search.exercise',
    'middleware' => 'auth'
]);

Route::get('/SearchResult', [
    'uses' => 'SearchController@SearchResult',
    'as' => 'searchResult'
]);