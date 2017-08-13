<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admins.login.login');
    }
    public function dologin(Request $request)
    {
        $input = Input::except('_token');
//        dd($input);
//        $input = $request->except('_token');
////        验证规则
//        $rule = [
//            'sname' => 'required|between:5,18',
//            'spassword' => 'required|between:5,18',
//            'spassword1' => 'required|same:spassword',
//        ];
//
////        提示信息
//        $mess = [
//            'sname.required' => '用户名必须输入',
//            'sname.between' => '用户名必须在5-18位之间',
//            'spassword.required' => '新密码必须输入',
//            'spassword.between' => '新密码必须在5-18位之间',
//            'spassword1.same' => '确认密码必须跟新密码一致',
//        ];
//
////      0 判断原密码  新密码是否符合正则验证规则  表单验证
////        Validator::make(要验证的数据，验证规则，错误的提示方式);
//        $validator = Validator::make($input, $rule, $mess);
//        //如果验证失败
//        if ($validator->fails()) {
//            return back()
//                ->withErrors($validator)
//                ->withInput();
//        }
        $user = User::where('sname',$input['sname'])->first();
        if(!$user){
            return back()->with('error','用户名不对');
        }
        if(Crypt::decrypt($user->spassword) != trim($input['spassword'])){
            return back()->with('error','密码错误');
        }
        if(strtoupper($input['code']) != session('code') ){
            return back()->with('error','验证码错误');
        }
        session(['user'=>$user]);
        return redirect('admin/dingdan');
    }
}
