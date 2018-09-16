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
Route::get('/', 'PageController@getHome');
Route::get('/home', 'PageController@getHome');
Route::get('/about', 'PageController@getAbout');
Route::get('/contact', 'PageController@getContact');
Route::post('/contact/submit','MessagesController@submit');
Route::get('/services','PageController@getServices');
Route::get('/portfolio','PageController@getPortfolio');


#
Route::get('admin/albums', 'AlbumsController@adminIndex');
Route::get('admin/albums/create', 'AlbumsController@create');
Route::post('admin/albums/create/store', 'AlbumsController@store');

//Route::get('/', 'AlbumsController@adminIndex');

Route::get('/admin','AlbumsController@adminIndex');
Route::get('/messages', 'MessagesController@getMessages');
