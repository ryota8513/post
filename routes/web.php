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

Route::get('/', function () {
    return view('welcome');
});

//post.blade.phpを表示させる 問い合わせページ
Route::get('post','PostController@post');
Route::post('posts','PostController@create');

//一覧表示
Route::get('list','PostController@list');

