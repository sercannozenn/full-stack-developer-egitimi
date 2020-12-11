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


Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/view-profile', 'AdminController@viewProfile')->name('admin.viewProfile');
    Route::put('/view-profile', 'AdminController@viewProfileUpdate');
    Route::prefix('post')->group(function (){
        Route::resource('/posts','Admin\PostsController');
        Route::get('/add','Admin\PostsController@addPost')->name('admin.post.add');
        Route::post('/add/save','Admin\PostsController@store')->name('admin.post.save');

        Route::resource('/etiket', 'Admin\NewTagController');
        Route::post('/etiket/changeStatus','Admin\NewTagController@changeStatus')->name('admin.tag.changeStatus');
        Route::post('/etiket/delete','Admin\NewTagController@delete')->name('admin.tag.delete');

        Route::resource('/category','Admin\CategoryController');
        Route::post('/category/changeStatus','Admin\CategoryController@changeStatus')->name('admin.category.changeStatus');
        Route::post('/category/delete','Admin\CategoryController@delete')->name('admin.category.delete');

    });
});


Route::get('login', 'Auth\LoginController@showLogin')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('login', 'Auth\LoginController@login');
