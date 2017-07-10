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

Route::get('/', 'PagesController@showindex');
Route::get('/servicios','PagesController@showservices');
Route::get('/proyectos','PagesController@showportfolio');
Route::get('/contacto','PagesController@showcontact');

Route::get('/blog', 'PostController@getList');
Route::get('blog/getPost/{postid}', 'PostController@getPost');

Auth::routes();

Route::get('/edit-post/', 'PostController@getEditpost')->middleware('auth');
Route::get('/edit-post/{id}', 'PostController@getEditpost')->middleware('auth');
Route::post('/savedPost', 'PostController@postSavepost')->middleware('auth');
Route::get('/deletedPost/{id}', 'PostController@getDeletepost')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
