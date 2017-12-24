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

Route::get('/','SitesController@index');

Route::get('/about', function(){
    return 'I am Lpf';
});

Route::get('/home','SitesController@home');
Route::get('/contact','SitesController@contact');

Route::get('/articles','ArticlesController@index');

//创建文章
Route::get('/articles/create','ArticlesController@create');


//文章详情页
Route::get('/articles/{id}','ArticlesController@show');

