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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['', 'auth'], 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@dashboard');  
    Route::get('articles', 'ArticleController@articlesmanagement')->name('admin/articles');
    Route::get('articles/create', 'ArticleController@create');
    Route::post('articles/store', 'ArticleController@store');
    Route::get('articles/{article}/edit', 'ArticleController@edit');
    Route::post('articles/{article}/edit', 'ArticleController@update');
    Route::delete('articles/{article}/delete', 'ArticleController@destroy');
    Route::get('articles/{article}/delete', 'ArticleController@destroyget');
});









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
