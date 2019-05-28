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


/*
Route::get('/about', function () {
    return view('pages.about');
});

/*
//dynamic route 
Route::get('/users/{id}', function ($id) {
    return 'This is user '.$id;
});
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

Route::get('/technologies', 'PagesController@technologies');

Route::get('/models', 'PagesController@models');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

/*
Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/admin', function(){
        return view('admin');
    });
});
*/

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/admin', 'DashboardController@adminPage');
   
});

Route::get('/home', function(){
    return view('/');
});

Route::resource('/models/models', 'CarModelsController');

Route::get('/models/testDriveForm','CarModelsController@isAuth');