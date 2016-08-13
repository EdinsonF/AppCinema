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

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');



Route::get('usuario/destroy/{id}','UsuarioController@destroy');
Route::get('usuario/list','UsuarioController@showAll');
Route::resource('usuario', 'UsuarioController');

Route::get('logout','LoginController@logout');
Route::resource('login', 'LoginController');


Route::get('genero/destroy/{id}','GeneroController@destroy');
//Route::get('genero/listPagina','GeneroController@showAllPaginate');
Route::get('genero/list','GeneroController@showAll');
Route::resource('genero','GeneroController');

Route::get('movie/destroy/{id}','MovieController@destroy');
Route::resource('movie','MovieController');




