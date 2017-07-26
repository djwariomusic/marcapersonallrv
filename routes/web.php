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
Route::get('/index', 'PagesController@showindex');
Route::get('/servicios','PagesController@showservices');
Route::get('/proyectos','PagesController@showportfolio');
Route::get('/contacto','PagesController@showcontact');

Route::get('/pdf',function(){
  $pdf = PDF::loadView('pdf.invoice');
  return $pdf->download('analisis-objetivos.pdf');
});

Route::get('/pdfs',function(){
  return View('pdf.invoice');
});

Route::post('/contactar','MessagesController@getMessage');

Route::get('/blog', 'PostController@getList');
Route::get('/blog/getPost/{postid}', 'PostController@getPost');

Route::get('/auth/facebook', 'SocialAuthController@facebook');
Route::get('/auth/facebook/callback', 'SocialAuthController@callback');
Route::post('/auth/facebook/register', 'SocialAuthController@register');
Route::post('/comments/createcomment', 'CommentController@postCreatecomment');
Route::get('/comments/deletecomment/{opc}', 'CommentController@getDeletecomment');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
  Route::get('/edit-post', 'PostController@getEditpost');
  Route::get('/edit-post/{id}/', 'PostController@getEditpost');
  Route::post('/savedPost', 'PostController@postSavepost');
  Route::post('/deletedPost', 'PostController@getDeletepost');
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/home/{username}', 'UsersController@showPost');
  Route::get('/home/{username}/graphs', 'UsersController@showGraph');
  Route::get('/documents', 'UsersController@showDocs');
  Route::get('/documents/html/1/11', 'DocumentsController@showIntro');
  Route::get('/documents/pdf/1/11/{opcion}', 'PdfController@createPdf111');
});
