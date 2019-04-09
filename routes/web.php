<?php

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

Route::get('/', 'PagesController@index');
Route::get('/login', ['as'=>'page.login', 'uses'=>'PagesController@login']);

Route::get('/articles', ['as'=>'article.index', 'uses'=>'ArticlesController@index']);
Route::get('/articles/blog', ['as'=>'article.blog', 'uses'=>'ArticlesController@blog']);
Route::get('/articles/my', ['as'=>'article.my', 'uses'=>'ArticlesController@my']);
Route::get('/articles/share', ['as'=>'article.share', 'uses'=>'ArticlesController@share']);
Route::get('/articles/news', ['as'=>'article.news', 'uses'=>'ArticlesController@news']);
Route::get('/articles/sport', ['as'=>'article.sport', 'uses'=>'ArticlesController@sport']);
Route::get('/articles/hot', ['as'=>'article.hot', 'uses'=>'ArticlesController@hot']);
Route::get('/articles/music', ['as'=>'article.music', 'uses'=>'ArticlesController@music']);
Route::get('/articles/create', ['as'=>'article.create', 'uses'=>'ArticlesController@create']);
Route::get('/articles/{id}', ['as'=>'article.show', 'uses'=>'ArticlesController@show']);
Route::get('/articles/{id}/edit', ['as'=>'article.edit', 'uses'=>'ArticlesController@edit']);
Route::post('/articles/store', ['as'=>'article.store', 'uses'=>'ArticlesController@store']);
Route::post('/articles/{id}/update', ['as'=>'article.update', 'uses'=>'ArticlesController@update']);
Route::post('/articles/{id}/destroy', ['as'=>'article.destroy', 'uses'=>'ArticlesController@destroy']);

Route::get('/logout', ['as'=>'login.logout', 'uses'=>'LoginController@logout']);
Route::post('/login', ['as'=>'login.login', 'uses'=>'LoginController@login']);