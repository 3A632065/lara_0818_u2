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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/hello/{name?}', ['as'=>'hello.index', 'uses'=>'HelloController@index']);

Route::get('home',function(){       //新增view並回傳
    return view('home.index');      //修改載入的頁面路徑
});

