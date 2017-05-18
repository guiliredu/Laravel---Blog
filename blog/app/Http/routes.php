<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'NoticiaController@index');
Route::get('/noticias', 'NoticiaController@index');
Route::get('/noticia/{id}', 'NoticiaController@single');