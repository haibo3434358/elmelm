<?php

namespace App\Http\Controllers\admins;

use App\Http\Model\SaleUser;
use App\Http\Model\User;
use App\Http\Model\UserAdmin;
use Illuminate\Http\Request;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        //获取普通用户数据
        $res = DB::table('elm_user')
        ->where('uname','like','%'.$request->input('search').'%')
        ->paginate($request->input('num',5));

        $search= $request->input('search');
        return view('admins.user.index',compact('res','search','request'));
//       dd($res);


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

        //普通用户的表单验证
        $this->validate($request, [
            'uname' => 'required|regex:/^\w{6,12}$/|unique:elm_user',
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

            return redirect('/admins/user');
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
    public function edit( $id)
    {

        //普通用户
        $res = DB::table('elm_user')->where('uid',$id)->get();

        $data = DB::table('elm_user')->where('uid', $id)->first();

        return view('admins.user.edit',compact('res','data'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


        $this->validate($request, [
            'uname' => 'required|regex:/^\w{6,12}$/|unique:elm_user',
            'email' => 'required|email',
            'phone' =>'required|regex:/^1[34578]\d{9}$/',
        ],[
            'uname.required'=>'用户名不能为空',
            'uname.regex'=>'用户名格式不正确',
            'uname.unique'=>'用户名已存在',
            'email.required'=>'email不能为空',
            'email.email'=>'email格式不正确',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确',
        ]);
        $uname = $request->input('uname');
        $res = $request->except(['repassword','_token','id','_method']);


        $data = DB::table('elm_user')->where('uid',$id)->update($res);

        if ($data) {

            return redirect('/admins/user');
        } else {

            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $res =  DB::table('elm_user')->where('uid',$id)->delete();
           $res =  User::where('uid',$id)->delete();
//      删除成功
        if($res){
            $data = [
                'status'=>0,
                'msg'=>'删除成功',
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'删除失败',
            ];
        }
        return $data;
    }
}
