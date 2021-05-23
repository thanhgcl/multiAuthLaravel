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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function() {
    Route::get('/login','AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout/', 'AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
}) ;
Route::prefix('user')->group(function() {
    Route::get('/login','UserController@showLoginForm')->name('user.login');
    Route::post('/login', 'UserController@login')->name('user.login.submit');
    Route::get('/logout', 'UserController@logout')->name('user.logout');
    Route::get('/', 'HomeController@index')->name('user.dashboard');
}) ;
