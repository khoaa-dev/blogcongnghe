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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/detail/{id}', 'PostController@show');



//Admin

Route::get('/admin/home', 'Admin\HomeController@index');
Route::get('/admin/form/general', 'Admin\HomeController@formGeneral');
Route::get('/admin/form/advanced', 'Admin\HomeController@formAdvanced');
Route::get('/admin/form/editor', 'Admin\HomeController@formEditor');
Route::get('/admin/form/validation', 'Admin\HomeController@formValidation');
Route::get('/admin/tables/data', 'Admin\HomeController@tableData');
Route::get('/admin/tables/jsgrid', 'Admin\HomeController@tableJsGrid');
Route::get('/admin/tables/simple', 'Admin\HomeController@tableSimple');

//post manager
Route::resource('/admin/posts', 'Admin\PostController');
Route::post('/admin/posts/getSubCategory', 'Admin\PostController@getSubCategoryByCategoryId')->name('getSubCategory');



