<?php

namespace App\Http\Controllers\Admins;

use App\Http\Model\SaleUser;
use Illuminate\Http\Request;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SaleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //获取商家用户的数据
        $resp =SaleUser::where('sname','like','%'.$request['chaxun'].'%')->paginate($request->input('num',5));
        $chaxun= $request->input('chaxun');
//        dd($re);
        return view('admins.saleuser.index',compact('request','resp','chaxun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.saleuser.add');
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
            'sname' => 'required|regex:/^\w{6,12}$/|unique:elm_saleuser',
            'semail' => 'required|email',
            'sphone' =>'required|regex:/^1[34578]\d{9}$/',
        ],[
            'sname.required'=>'用户名不能为空',
            'sname.regex'=>'用户名格式不正确',
            'sname.unique'=>'用户名已存在',
            'semail.required'=>'email不能为空',
            'semail.email'=>'email格式不正确',
            'sphone.required'=>'手机号不能为空',
            'sphone.regex'=>'手机号格式不正确',
        ]);
        $res = $request->except(['repassword','_token','pic']);

        //存入到数据库
        $res['spassword'] = Hash::make($request->input('spassword'));

        $data = DB::table('elm_saleuser')->insert($res);

        if ($data) {

            return redirect('/admins/saleuser');
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
        $res = DB::table('elm_saleuser')->where('sid',$id)->get();

        $data = DB::table('elm_saleuser')->where('sid', $id)->first();

        return view('admins.saleuser.edit',compact('res','data'));
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
        $this->validate($request, [
            'sname' => 'required|regex:/^\w{6,12}$/|unique:elm_saleuser',
            'semail' => 'required|email',
            'sphone' =>'required|regex:/^1[34578]\d{9}$/',
        ],[
            'sname.required'=>'用户名不能为空',
            'sname.regex'=>'用户名格式不正确',
            'sname.unique'=>'用户名已存在',
            'semail.required'=>'email不能为空',
            'semail.email'=>'email格式不正确',
            'sphone.required'=>'手机号不能为空',
            'sphone.regex'=>'手机号格式不正确',
        ]);
        $uname = $request->input('sname');
        $res = $request->except(['repassword','_token','id','_method']);


        $data = DB::table('elm_saleuser')->where('sid',$id)->update($res);

        if ($data) {

            return redirect('/admins/saleuser');
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
        $res = SaleUser::where('sid',$id)->delete();
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
