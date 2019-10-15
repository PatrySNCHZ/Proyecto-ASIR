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


Route::get('/', "PaginasController@inicio");
Route::get('/notices', "PaginasController@notices");
Route::get('/articles', "PaginasController@articles");
Route::get('/gotw', "PaginasController@gotw");
Route::get('/contactus', "PaginasController@contactus");
