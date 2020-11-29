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

Route::get('/', 'FrontController@index')->name('index');

Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/add-post', 'AdminController@showAddPost')->name('admin.addPost');
    Route::post('/add-post', 'AdminController@addPost');
});

