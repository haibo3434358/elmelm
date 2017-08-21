<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\User;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $duser = User::where('uname','wangyongfeng6')->first();
//       dd($duser->password) ;
        return view('layouts.home');

    }
    public function YanZhengUname(Request $request)
    {
//        dd($request->input('uname'));
        $input = Input::except('_token');
        $user = User::where('uname',$request->input('uname'))->first();
        if($user){
            return 1;
        }else {
            return  0;
        }


    }
    public function YanZhengPhone(Request $request)
    {
        $input = Input::except('_token');
        $phone = User::where('phone',$request->input('phone'))->first();
        if($phone){
            return 1;
        }else {
            return  0;
        }
    }
    public function YanZhengEmail(Request $request)
    {
//        dd($request->input('email'));
        $input = Input::except('_token');
        $email = User::where('email',$request->input('email'))->first();
        if($email){
            return 1;
        }else {
            return  0;
        }
    }
    public function ZhuCe(Request $request)
    {
//        dd($request);
        $res = $request->except(['repassword','_token','pic','captcha']);
//        dd($res);
        $res['password'] = Crypt::encrypt($request->input('password'));
        $data = DB::table('elm_user')->insert($res);
        if($data){
            return redirect('home/shouye');
        }else{
            return back();
        }
    }
    public function DYanZhengUname(Request $request)
    {

        $input = Input::except('_token');
//判断数据库有无此人
        $duser = User::where('uname', $request->input('duname'))->first();
//       dd($duser) ;
        if (!$duser) {
            return 0;
        } else {
            return 1;
        }
    }





    public function DengLu(Request $request)
    {
//        dd(Crypt::encrypt(12345678));
        //dd($request->all());

        $res = $request->except('_token');

        $user = User::where('uname',$res['duname'])->first();
        $id = $user['uid'];

        $resl = DB::table('elm_user')

            ->join('elm_user_detail','elm_user.uid','=','elm_user_detail.uid')
            ->where('elm_user.uid',$id)
            ->select('uface')
            ->get();
//        dd($resl[0]->uface);
        $user['uface'] = $resl[0]->uface;
//        $user =
        //数据库的密码
        $oldpass = \Crypt::decrypt($user->password);
//        dd($oldpass);
//        dd($user['password']);
        //输入的密码
        $dpass = $request->input('dpassword');

        if($oldpass  != $dpass){
            return back()->with('error','密码错误');
        }
        session(['user1'=>$user]);
        return redirect('home/shouye');
    }
    public function exit()
    {
        session(['user1'=>[]]);
        return redirect('home/shouye');
    }





}
