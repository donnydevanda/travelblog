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

Route::get('/', 'ArticleController@index')->name("home");
Route::get('/category/{slug}', 'ArticleController@category')->name("category");
Route::get('/detail/{slug}', 'ArticleController@detail')->name("detail");

Route::get('/profile', 'UserController@index')->name("profile");
Route::post('/profile/update', 'UserController@update')->name("update");

Route::get('/blog', 'ArticleController@blog')->name("list");
Route::post('/blog/delete', 'ArticleController@delete')->name("delete");

Auth::routes();


