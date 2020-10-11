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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index');
Route::get('/login', 'LoginController@login');
Route::get('/menu', 'CanteenController@show_menu');
Route::match(['GET', 'POST'], '/new_order', 'CanteenController@new_order');
Route::get('/list_order', 'CanteenController@list_order');
Route::get('/users', 'CanteenController@users');
// Route::post('/menu/create','CanteenController@create_menu');
