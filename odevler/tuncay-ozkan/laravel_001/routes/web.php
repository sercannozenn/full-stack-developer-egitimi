<?php


use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home')->middleware('auth')->name('home');

Route::group(['prefix'=>'articles','middleware'=>'auth'],function(){
    Route::get('/', 'App\Http\Controllers\ArticlesController@index')->name('articles.index');
    Route::get('/add', 'App\Http\Controllers\ArticlesController@create')->name('articles.add');
    Route::post('/add', 'App\Http\Controllers\ArticlesController@store')->name('articles.post');
    Route::get('/edit/{id}', 'App\Http\Controllers\ArticlesController@edit')->name('articles.edit');
    Route::post('/edit/{id}', 'App\Http\Controllers\ArticlesController@update')->name('articles.update');
    Route::get('/delete/{id}', 'App\Http\Controllers\ArticlesController@delete')->name('articles.delete');
});



Route::get('/logout', function () {Auth::logout(); return redirect('/');});
