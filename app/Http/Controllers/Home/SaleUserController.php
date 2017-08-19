<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use DB;

class SaleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home/saleuser/add');
    }
    public function baocun(Request $request)
    {
        $this->validate($request, [
            'sname' => 'required|regex:/^\w{6,12}$/|unique:elm_saleuser',
            'semail' => 'required|email',
            'sphone' =>'required|regex:/^1[34578]\d{9}$/',
        ],[
            'sname.required'=>'用户名不能为空',
            'sname.regex'=>'用户名格式不正确',
            'sname.unique'=>'商家已存在',
            'semail.required'=>'email不能为空',
            'semail.email'=>'email格式不正确',
            'sphone.required'=>'手机号不能为空',
            'sphone.regex'=>'手机号格式不正确',
        ]);
        $res = $request->except(['repassword','_token','pic']);

        //存入到数据库
        $res['spassword'] = Crypt::encrypt($request->input('spassword'));

        $data = DB::table('elm_saleuser')->insert($res);


        if ($data) {
            $saleuser = $res['sname'];

            session(['saleuser'=> $saleuser]);
            return redirect('/home/saleuser/detail');
        } else {

            return back();
        }

    }
    public function detail()
    {
        return view ('home/saleuser/detailadd');
    }
    public function agreement()
    {
        return view ('home/saleuser/agreement');
    }


}
