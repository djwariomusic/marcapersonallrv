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
    return view('index');
});
Route::get('/servicios',function () {
    return view('services');
});
Route::get('/proyectos',function () {
    return view('portfolio');
});
Route::get('/contacto',function () {
    return view('contact');
});
Route::get('/blog',function () {
    return view('blog');
});
Auth::routes();

Route::get('/blogdashboard', 'HomeController@index')->name('home');
