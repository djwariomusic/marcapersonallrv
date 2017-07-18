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

Route::post('/contactar','MessagesController@getMessage');

Route::get('/blog', 'PostController@getList');
Route::get('/blog/getPost/{postid}', 'PostController@getPost');
Route::get('/auth/facebook', 'SocialAuthController@facebook');
Route::get('/auth/facebook/callback', 'SocialAuthController@callback');
Route::post('/auth/facebook/register', 'SocialAuthController@register');

Auth::routes();


Route::get('/edit-post', 'PostController@getEditpost')->name('edit')->middleware('auth');

Route::get('/edit-post/{id}', 'PostController@getEditpost')->middleware('auth');
Route::post('/savedPost', 'PostController@postSavepost')->middleware('auth');
Route::get('/deletedPost/{id}', 'PostController@getDeletepost')->middleware('auth');

Route::post('/comments/createcomment', 'CommentController@postCreatecomment');
Route::get('/comments/deletecomment/{id}', 'CommentController@getDeletecomment');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home/{username}', 'UsersController@showPost')->middleware('auth');
Route::get('/home/{username}/graphs', 'UsersController@showGraph')->middleware('auth');
Route::get('/documents', 'UsersController@showDocs')->middleware('auth');
