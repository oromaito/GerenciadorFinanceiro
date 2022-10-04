<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::post('/registrar', 'HomeController@store')->name('registrar.store');
Route::get('/registrar', 'HomeController@create')->middleware('auth');
Route::get('/tabelas', 'HomeController@show')->middleware('auth');


