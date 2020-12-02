<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'FrontController@index')->name('index');

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', 'AdminController@admin')->name('admin.index');
    Route::get('/add-article', 'AdminController@addArticle')->name('admin.addArticle');
    //Route::get('/edit-article', 'AdminController@editArticle')->name('admin.editArticle');
});



