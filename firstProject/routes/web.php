<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', 'HomeController@index')->name('index');


Route::get('/contact', 'HomeController@contact')->name('contact');


Route::get('/about', 'AboutController@index')->name('about');
