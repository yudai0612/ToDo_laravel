<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TasksController@index');
Route::get('/edit/{id}', 'TasksController@edit');
Route::post('/create', 'TasksController@create');
Route::patch('/changeStatus/{id}', 'TasksController@changeStatus');
Route::get('/search', 'TasksController@search');
Route::patch('/update/{id}', 'TasksController@update');
Route::delete('/delete/{id}', 'TasksController@destroy');
