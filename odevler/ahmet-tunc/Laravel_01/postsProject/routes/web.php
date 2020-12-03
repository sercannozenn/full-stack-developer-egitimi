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


Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/','FrontController@index')->name('admin.index');
    Route::get('/getallpost','PostsController@getAllPost')->name('admin.getAllPost');
    Route::get('/addpost','PostsController@showAddPost')->name('admin.addPost');
    Route::post('/addpost','PostsController@addPost');
});

