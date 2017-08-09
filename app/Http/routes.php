<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});





//卖家后台
Route::group([],function(){











});

//Route::管理员后台
Route::group([],function(){

//商家分类控制器
    Route::resource('admins/cate','Admins\CateController');










});