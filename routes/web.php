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
//追加ページ
Route::get('post','PostController@post');
Route::post('posts','PostController@create');

//一覧表示
Route::get('list','PostController@list');

//編集ページ表示
Route::get('edit','PostController@edit');
//list.bladeの検索蘭から指定されたIDをもつ情報を表示させる
Route::post('edit','PostController@edit');
//edit.bladeから編集された情報を更新する
Route::post('editform','PostController@update');

//削除ページ表示
Route::get('delete','PostController@delete');
Route::post('delete','PostController@delete');
Route::post('deleteform','PostController@remove');