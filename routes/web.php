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
Route::get('/blog/getPost/{postid}', 'PostController@getPosts');

Route::get('/proyectos','ProjectController@getList');

Route::get('/auth/facebook', 'SocialAuthController@facebook');
Route::get('/auth/facebook/callback', 'SocialAuthController@callback');
Route::post('/auth/facebook/register', 'SocialAuthController@register');
Route::post('/comments/createcomment', 'CommentController@postCreatecomment');
Route::get('/comments/deletecomment/{opc}', 'CommentController@getDeletecomment');



Auth::routes();



Route::group(['middleware' => 'auth'], function () {
  Route::Auth();
  Route::get('/edit-post', 'PostController@getEditpost');
  Route::get('/edit-post/{id}/', 'PostController@getEditpost');
  Route::get('/home/getPost/{postid}', 'PostController@getPost');
  Route::post('/savedPost', 'PostController@postSavepost');
  Route::post('/deletedPost', 'PostController@getDeletepost');
  Route::get('/showposts', 'HomeController@showPosts');

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/home/{username}', 'UsersController@showPost');

  Route::get('/messages', 'MessagesController@showlistmessages');
  Route::get('/messages/{id}', 'MessagesController@showmessage');
  Route::post('/delmessage', 'MessagesController@delmessage');
  Route::post('/savemessage', 'MessagesController@savemessage');

  Route::get('/projects', 'ProjectController@showlistprojects');
  Route::get('/project/{id}', 'ProjectController@showproject');
  Route::post('/delproject', 'ProjectController@delproject');

  Route::get('/home/{username}/graphs', 'UsersController@showGraph');

  Route::post('/searchUser', 'UsersController@searchUser');

  Route::get('/apijson', 'PostController@showApiJson');
  Route::get('/apijson/posts/apirest', 'PostController@getApiJson');

  Route::any('/datatable/datatable', 'PostController@getDatatable')->name('dtt');
  Route::get('/datatable', 'PostController@indexDatatable');

  Route::get('/documents', 'UsersController@showDocs');
  Route::get('/documents/html/1/11', 'DocumentsController@show111');
  Route::get('/documents/pdf/1/11/{opcion}', 'PdfController@createPdf111');
  Route::get('/documents/html/1/14', 'DocumentsController@show114');
  Route::get('/documents/pdf/1/14/{opcion}', 'PdfController@createPdf114');
  Route::get('/documents/html/2/21', 'DocumentsController@show221');
  Route::get('/documents/pdf/2/21/{opcion}', 'PdfController@createPdf221');
  Route::get('/documents/html/2/29', 'DocumentsController@show229');
  Route::get('/documents/pdf/2/29/{opcion}', 'PdfController@createPdf229');
  Route::get('/documents/html/3/31', 'DocumentsController@show331');
  Route::get('/documents/pdf/3/31/{opcion}', 'PdfController@createPdf331');
});
