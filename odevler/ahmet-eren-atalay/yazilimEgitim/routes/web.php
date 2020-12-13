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
        Route::get('/add','Admin\PostAddController@index')->name('admin.post');
        Route::post('/add','Admin\PostAddController@postadd')->name('admin.posts.add');
        Route::get('/list','Admin\PostListController@index')->name('admin.post.list');
        Route::post('/list','Admin\PostListController@delete')->name('admin.post.delete');
        Route::get('/list/{list}/edit','Admin\PostListController@edit')->name('admin.post.edit');
        Route::match(['put','patch'],'/list/{list}','Admin\PostListController@update')->name('admin.post.update');
        Route::post('/list/changeStatus','Admin\PostListController@changeStatus')->name('admin.post.changeStatus');

        Route::resource('/tags','Admin\TagController');
        Route::post('/tags/changeStatus','Admin\TagController@changeStatus')->name('admin.tags.changeStatus');
        Route::post('/tags/delete','Admin\TagController@delete')->name('admin.tags.delete');



        Route::resource('/category','Admin\CategoryController');
        Route::post('/category/changeStatus','Admin\CategoryController@changeStatus')->name('admin.category.changeStatus');
        Route::post('/category/delete','Admin\CategoryController@delete')->name('admin.category.delete');

    });
});


Route::get('login', 'Auth\LoginController@showLogin')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('login', 'Auth\LoginController@login');
