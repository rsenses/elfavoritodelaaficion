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

Route::get('/', 'HomeController@index');
Route::get('/poll', 'PollController@index');
Route::post('/poll', 'PollController@store');
Route::get('/thanks', 'HomeController@thanks');
Route::get('/login', 'AuthController@login');
Route::get('/auth/session', 'AuthController@getSession');
Route::post('/auth/save-session', 'AuthController@putSession');
