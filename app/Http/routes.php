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
//前台登入主页
Route::get('admin/login','Admin\LoginController@login');
//主页表单提交数据
Route::post('admin/dologin','Admin\LoginController@dologin');
//验证码
Route::get('admin/captcha','Admin\LoginController@captcha');
//加密测试
Route::get('admin/crypt','Admin\LoginController@crypt');





//卖家后台
Route::group([],function(){
    //商品二级分类路由
    Route::resource('admin/cate','Admin\SaleCateController');
    //优惠券路由
    Route::resource('admin/youhui','Admin\YouHuiController');




//订单详情
Route::resource('admin/dingdan','Admin\DingDanController');

Route::resource('admin/saleuser','Admin\SaleUserController');










});

//Route::管理员后台
Route::group([],function(){



//商家分类控制器
    Route::resource('admins/cate','Admins\CateController');



    Route::resource('admins/user','Admins\UserController');











});



