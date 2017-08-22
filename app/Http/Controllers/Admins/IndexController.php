<?php

namespace App\Http\Controllers\Admins;

use App\Http\Model\UserAdmin;
use Illuminate\Support\Facades\Crypt;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function quit()
    {
        session(['useradmin'=>null]);
        return redirect('admins/login');
    }
    public function pass()
    {
        return view('admins.pass.pass');
    }
    public function dopass(Request $request)
    {
//       dd($request->all());
//       dd(session('user'));

        $input = $request->except('_token');
//        验证规则
        $rule = [
            'aname' => 'required|between:5,18',
            'apassword' => 'required|between:5,18',
            'rapassword' => 'required|same:apassword',
        ];

//        提示信息
        $mess = [
            'aname.required' => '用户名必须输入',
            'aname.between' => '用户名必须在5-18位之间',
            'apassword.required' => '新密码必须输入',
            'apassword.between' => '新密码必须在5-18位之间',
            'rapassword.same' => '确认密码必须跟新密码一致',
        ];


//      0 判断原密码  新密码是否符合正则验证规则  表单验证
//        Validator::make(要验证的数据，验证规则，错误的提示方式);
        $validator = Validator::make($input, $rule, $mess);
        //如果验证失败
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }


////      1 判断原密码是否正确
       $user = UserAdmin::find(session('useradmin')->aid);
//
//       if ($input['spassword'] != Crypt::decrypt($user->spassword)) {
//           return back()->with('errors', '原密码输入错误');
//       }


//        2 判断新密码是否与确认密码一致
//        3 修改密码
//        dd($user->apassword);
        $user->apassword = Crypt::encrypt($input['apassword']);
        $re = $user->save();
//        如果修改成功
        if ($re) {
            return back()->with('errors', '密码修改成功');
        } else {
            return back()->with('errors', '密码修改失败');
        }

    }
    public function name(Request $request)
    {
//        echo '111';
//        dd($request->sname);
//        dd($request);
        $re = UserAdmin::where('aname',$request->aname)->first();
        if($re){
            return '用户名已经存在,请重新输入';
        }else{
            return '用户名可正常使用';
        }
    }
}
