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
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/blog', 'FrontController@blog')->name('blog');
Route::get('/contact', 'FrontController@contact')->name('contact');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/view-profile', 'AdminController@viewProfile')->name('admin.viewProfile');
    Route::put('/view-profile', 'AdminController@viewProfileUpdate');
    Route::prefix('post')->group(function () {
        Route::get('/add', 'PostController@add')->name('admin.post.add');
        Route::post('/add', 'PostController@store')->name('admin.post.store');
        Route::get('/list', 'PostController@index')->name('admin.post.list');
        Route::get('/search', 'PostController@search')->name('admin.post.search');
        Route::post('/changeStatus', 'PostController@changeStatus')->name('admin.post.changeStatus');
        Route::resource('/category', 'Admin\CategoryController');
        Route::post('/category/changeStatus', 'Admin\CategoryController@changeStatus')->name('admin.category.changeStatus');
        Route::post('/category/delete', 'Admin\CategoryController@delete')->name('admin.category.delete');
        Route::get('/test',function (){
           return view('admin.test');
        });

    });
    Route::get('/etiket', 'TagController@index')->name('admin.tag.list');
    Route::get('/etiket/add', 'TagController@create')->name('admin.tag.add');
    Route::post('/etiket/add', 'TagController@store')->name('admin.tag.store');
});


Route::get('login', 'Auth\LoginController@showLogin')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('login', 'Auth\LoginController@login');
