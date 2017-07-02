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

Route::get('/', 'PagesController@index')->name('home');

/**
 * Routes for Authentication
 */
Route::get('/login', 'PagesController@login')->name('login.view');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/dashboard', 'UsersController@index')->name('users.dashboard');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

/**
 * Admin routes
 */
Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');