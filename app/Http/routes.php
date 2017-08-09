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

    Route::resource('admin/saleuser','Admin\SaleUserController');

    Route::resource('admins/user','Admins\UserController');








});

//Route::管理员后台
Route::group([],function(){












});