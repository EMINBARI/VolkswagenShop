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

    Route::resource('/admin/adminCarModels', 'AdminCarModelsController');
    Route::resource('/admin/adminTestDrive', 'AdminTestDriveController');
    Route::resource('/admin/adminUsers', 'AdminUsersController');
    

   
});

Route::get('/home', function(){
    return view('/');
});

Route::resource('/models', 'CarModelsController');
Route::resource('/testDrive', 'TestDriveController');

Route::resource('/news','NewsController');

Route::get('/admin/index','DashboardController@adminPage');

Route::get('setlocale/{locale}', function ($locale) {
    
    if (in_array($locale, \Config::get('app.locales'))) {   # Проверяем, что у пользователя выбран доступный язык 
    	Session::put('locale', $locale);                    # И устанавливаем его в сессии под именем locale
    }

    return redirect()->back();                              # Редиректим его <s>взад</s> на ту же страницу

});