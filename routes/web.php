<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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
    return view('welcome');
});

route::get('/todo_show','App\Http\Controllers\TodoController@show');
route::get('/todo_delete/{id}','App\Http\Controllers\TodoController@destroy');
route::get('/todo_create','App\Http\Controllers\TodoController@create');
route::post('/todo_Submit','App\Http\Controllers\TodoController@store');
route::get('/todo_edit/{id}','App\Http\Controllers\TodoController@edit');
route::post('/todo_update/{id}','App\Http\Controllers\TodoController@update');

