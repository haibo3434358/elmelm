<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'uname' => 'required|regex:/^\w{6,12}$/|unique:user',
            'password' => 'required|regex:/^\w{6,10}$/',
            'repassword' => 'same:password',
            'email' => 'required|email',
            'phone' =>'required|regex:/^1[34578]\d{9}$/',

        ],[
            'uname.required'=>'用户名不能为空',
            'uname.regex'=>'用户名格式不正确',
            'uname.unique'=>'用户名已存在',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码格式不正确',
            'repassword.same'=>'两次密码输入不一致',
            'email.required'=>'email不能为空',
            'email.email'=>'email格式不正确',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确',

        ]);
        $res = $request->except(['repassword','_token','pic']);

        //存入到数据库
        $res['password'] = Hash::make($request->input('password'));

        $data = DB::table('elm_user')->insert($res);

        if ($data) {

            return redirect('/admins/user/show');
        } else {

            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
