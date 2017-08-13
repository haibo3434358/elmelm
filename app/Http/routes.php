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

//卖家后台首页路由
//修改
Route::get('admin/xiugai','Admin\IndexController@xiugai');
Route::get('admin/index','Admin\IndexController@index');
//退出
Route::get('admin/quit','Admin\IndexController@quit');
//修改用户
Route::get('admin/pass','Admin\IndexController@pass');
Route::post('admin/pass','Admin\IndexController@dopass');



//添加商品,显示商品
Route::resource('admin/shangpin','Admin\ShangPinController');

//  订单详情
Route::resource('admin/dingdan','Admin\DingDanController');

// Route::get('admin/dingdan','Admin\DingDanController@dingdan');

Route::resource('admin/saleuser','Admin\SaleUserController');










});

//Route::管理员后台
//登入后台
Route::get('admins/login','Admins\LoginController@login');

//    Route::管理员后台
//Route::group(['prefix'=>'admins','namespace'=>'Admins','middleware'=>'hasrole'],function(){

Route::group([],function(){
//    管理员登录控制器
    Route::get('admins/login','Admins\LoginController@login');


//管理员登入



//商家分类控制器
//    商家分类控制器
    Route::resource('admins/cate','Admins\CateController');

//    管理员用户控制器路由
    Route::resource('admins/admin','Admins\AdminController');
//    给相应的用户赋予角色
    Route::get('admins/admin/auth/{id}','Admins\AdminController@auth');
//    保存给角色添加权限的路由
    Route::post('admins/admin/doauth/','Admins\AdminController@doauth');
//    普通用户控制器路由
    Route::resource('admins/user','Admins\UserController');
//    商家用户控制器路由
    Route::resource('admins/saleuser','Admins\SaleUserController');
//    权限控制器路由
    Route::resource('admins/permission','Admins\PermissionController');
//    角色控制器路由
    Route::resource('admins/role','Admins\RoleController');
//    给相应的角色赋予权限
    Route::get('admins/role/auth/{id}','Admins\RoleController@auth');
//    保存给角色添加权限的路由
    Route::post('admins/role/doauth/','Admins\RoleController@doauth');









});



