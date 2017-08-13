<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use App\Http\Model\SaleUser;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;


class LoginController extends Controller
{
    /**
     *方法功能:返回用户登入页面
     * @date 2017.08.08  9.58
     * @haibo
     *
     */
    public function login()
    {
        return view('admin.login.login');
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
        
        $user = SaleUser::where('sname',$input['sname'])->first();
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
//        if(strtoupper($input['code']) != session('code') ){
//            return back()->with('error','验证码错误');
//        }
        session(['user'=>$user]);
        return redirect('admin/cate');

    }

    // 验证码生成
    public function captcha()
    {

        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(220, 210, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        // 获取验证码的内容
        $phrase = strtoupper($builder->getPhrase());
        // 把内容存入session
        \Session::flash('code', $phrase);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();

//
//        //生成验证码图片的Builder对象，配置相应属性
//        $builder = new CaptchaBuilder;
//        //可以设置图片宽高及字体
//        $builder->build($width = 100, $height = 40, $font = null);
//        //获取验证码的内容
//        $phrase = strtoupper($builder->getPhrase());
//
//        //把内容存入session
//        \Session::flash('milkcaptcha', $phrase);
//        //生成图片
//        header("Cache-Control: no-cache, must-revalidate");
//        header('Content-Type: image/jpeg');
//        $builder->output();
    }
    public function crypt()
    {
//        $str = '123456';
//        echo Crypt::encrypt($str);
    }

}
