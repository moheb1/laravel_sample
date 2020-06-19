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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::get('messages', 'MessageController@index');
Route::get('messages/{message}', 'MessageController@show');
Route::get('/', 'ArticleController@index');

Route::group(['middleware' => [ 'auth'], 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@dashboard');  
    Route::get('articles', 'ArticleController@articlesmanagement')->name('admin/articles');
    Route::get('articles/create', 'ArticleController@create');
    Route::post('articles/create', 'ArticleController@store');
    Route::get('articles/{article}/edit', 'ArticleController@edit');
    Route::post('articles/{article}/edit', 'ArticleController@update');
    Route::delete('articles/{article}/delete', 'ArticleController@destroy');
    Route::get('articles/{article}/delete', 'ArticleController@destroyget');

    Route::get('messages', 'MessageController@messagesmanagement');
    Route::get('messages/create', 'MessageController@create');
    Route::post('messages/create', 'MessageController@store');
    Route::get('messages/{message}/edit', 'MessageController@edit');
    Route::post('messages/{message}/edit', 'MessageController@update');
    Route::delete('messages/{message}/delete', 'MessageController@destroy');
    Route::get('messages/{message}/delete', 'MessageController@destroy');

    Route::get('logout','HomeController@logout');

    
});










