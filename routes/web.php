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
Route::post('/profile', 'UserController@update')->name("update");

Route::get('/admin', 'ArticleController@blogAdmin')->name("blogAdmin");

Route::get('/blog', 'ArticleController@blog')->name("list");
Route::get('/blog/add', 'ArticleController@blogAdd')->name("add");
Route::post('/blog/add', 'ArticleController@blogAddPost')->name("addPost");
Route::post('/blog/delete', 'ArticleController@blogDelete')->name("delete");

Auth::routes();


