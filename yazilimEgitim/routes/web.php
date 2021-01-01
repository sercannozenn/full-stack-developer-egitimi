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

Route::middleware('front.data.share')->group(function ()
{
    Route::get('/', 'FrontController@index')->name('index');
    Route::get('/about', 'FrontController@about')->name('about');
    Route::get('/contact', 'FrontController@contact')->name('contact');


    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/blog/{category}', 'BlogController@getCategory')->name('blog.category');
    Route::get('/{category}/{post}', 'BlogController@post')->name('blog.post');



});


Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/view-profile', 'AdminController@viewProfile')->name('admin.viewProfile');
    Route::put('/view-profile', 'AdminController@viewProfileUpdate');
    Route::resource('post', 'Admin\PostController');
    Route::post('post/changeStatus', 'Admin\PostController@changeStatus')->name('admin.post.changeStatus');
    Route::resource('tag', 'Admin\TagController');
    Route::post('/tag/search-tags', 'Admin\TagController@search')->name('admin.search.tag');

    Route::resource('category', 'Admin\CategoryController');
    Route::post('/category/changeStatus', 'Admin\CategoryController@changeStatus')->name('admin.category.changeStatus');
    Route::post('/category/delete', 'Admin\CategoryController@delete')->name('admin.category.delete');

    Route::get('menu', 'Admin\MenuController@index')->name('menu.index');
    Route::post('menu/add', 'Admin\MenuController@add')->name('menu.add');
    Route::post('menu/edit-show', 'Admin\MenuController@editShow')->name('menu.editShow');
    Route::post('menu/edit', 'Admin\MenuController@edit')->name('menu.edit');

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

});


Route::get('login', 'Auth\LoginController@showLogin')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('login', 'Auth\LoginController@login');
Route::get('/password/reset', 'Auth\ResetPasswordController@showForm')->name('reset.password');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@resetPasswordShowForm')->name('reset.password.showForm');
Route::post('/password/reset/{token}', 'Auth\ResetPasswordController@resetPassword');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

