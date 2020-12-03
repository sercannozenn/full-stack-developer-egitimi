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

Route::get('/', 'IndexController@index')->name('index');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin_index');
    Route::get('/add-article', 'AdminController@addArticlePage')->name('add_article');
    Route::post('/add-article', 'AdminController@addArticle');
    Route::get('/edit-article', 'AdminController@editArticlePage')->name('edit_article');
    Route::get('/article-editor/id={id}','AdminController@editArticle')->name('article_editor');
    Route::post('/article-editor/id={id}','AdminController@articleChanged');
});