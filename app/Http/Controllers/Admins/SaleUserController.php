<?php

namespace App\Http\Controllers\Admins;

use App\Http\Model\SaleUser;
use App\Http\Model\SaleUserDetail;
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
        $resp = SaleUser::where('sname', 'like', '%' . $request['chaxun'] . '%')->paginate($request->input('num', 5));
        $chaxun = $request->input('chaxun');
//        dd($re);
        return view('admins.saleuser.index', compact('request', 'resp', 'chaxun'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'sname' => 'required|regex:/^\w{6,12}$/|unique:elm_saleuser',
            'semail' => 'required|email',
            'sphone' => 'required|regex:/^1[34578]\d{9}$/',
        ], [
            'sname.required' => '用户名不能为空',
            'sname.regex' => '用户名格式不正确',
            'sname.unique' => '用户名已存在',
            'semail.required' => 'email不能为空',
            'semail.email' => 'email格式不正确',
            'sphone.required' => '手机号不能为空',
            'sphone.regex' => '手机号格式不正确',
        ]);
        $res = $request->except(['repassword', '_token', 'pic']);

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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = DB::table('elm_saleuser')->where('sid', $id)->get();

        $data = DB::table('elm_saleuser')->where('sid', $id)->first();

        return view('admins.saleuser.edit', compact('res', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'sname' => 'required|regex:/^\w{6,12}$/|unique:elm_saleuser',
            'semail' => 'required|email',
            'sphone' => 'required|regex:/^1[34578]\d{9}$/',
        ], [
            'sname.required' => '用户名不能为空',
            'sname.regex' => '用户名格式不正确',
            'sname.unique' => '用户名已存在',
            'semail.required' => 'email不能为空',
            'semail.email' => 'email格式不正确',
            'sphone.required' => '手机号不能为空',
            'sphone.regex' => '手机号格式不正确',
        ]);
        $uname = $request->input('sname');
        $res = $request->except(['repassword', '_token', 'id', '_method']);


        $data = DB::table('elm_saleuser')->where('sid', $id)->update($res);

        if ($data) {

            return redirect('/admins/saleuser');
        } else {

            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = SaleUser::where('sid', $id)->delete();
//      删除成功
        if ($res) {
            $data = [
                'status' => 0,
                'msg' => '删除成功',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '删除失败',
            ];
        }
        return $data;
    }

    public function yanzheng(Request $request)
    {
        $res = $request->except(['repassword', '_token', 'eximage', "licence1", "licence2", 'slogo']);

        $saleuser = session('saleuser');


        //获取数据
        $resl = DB::table('elm_saleuser')
            ->where('elm_saleuser.sname',$saleuser)
            ->get();

        $id = $resl[0]->sid;
//        dd($id);
//        dd($res);
//        return view('admin.saleuser.index',compact('res'));

        $this->validate($request, [
            'exname' => 'required|regex:/^\S{6,12}$/|unique:elm_saleuser_detail',
        ], [
            'exname.required' => '店名不能为空',
            'exname.regex' => '店名格式不正确',
            'exname.unique' => '店名已存在',
        ]);
        //上传头像
        $imgs = $request->hasFile('eximage');

        if ($imgs) {

            //上传文件的名字
            $name = rand(1111, 9999) . time();
            //获取后缀  $_FILES['eximage']
            $suffix = $request->file('eximage')->getClientOriginalExtension();
            //
            $request->file('eximage')->move('./uploads', $name . '.' . $suffix);
        }
        $imgs1 = $request->hasFile('licence1');

        if ($imgs1) {

            //上传文件的名字
            $name1 = rand(1111, 9999) . time();
            //获取后缀  $_FILES['licence1']
            $suffix = $request->file('licence1')->getClientOriginalExtension();
            //
            $request->file('licence1')->move('./uploads', $name1 . '.' . $suffix);
        }
        $imgs2 = $request->hasFile('licence2');

        if ($imgs2) {

            //上传文件的名字
            $name2 = rand(1111, 9999) . time();
            //获取后缀  $_FILES['licence1']
            $suffix = $request->file('licence2')->getClientOriginalExtension();
            //
            $request->file('licence2')->move('./uploads', $name2 . '.' . $suffix);
        }
        $imgs3 = $request->hasFile('slogo');

        if ($imgs3) {

            //上传文件的名字
            $name3 = rand(1111, 9999) . time();
            //获取后缀  $_FILES['licence1']
            $suffix = $request->file('slogo')->getClientOriginalExtension();
            //
            $request->file('slogo')->move('./uploads', $name3.'.'.$suffix);
        }

        //存入到数据库
        $res['eximage'] = '/uploads/'.$name.'.'.$suffix;
        $res['licence1'] = '/uploads/'.$name1 . '.' . $suffix;
        $res['licence2'] = '/uploads/'.$name2 . '.' . $suffix;
        $res['slogo'] = '/uploads/'.$name3 . '.' . $suffix;
        $res['sid']= $id;

        $data = DB::table('elm_saleuser_detail')->insert($res);

        if ($data) {

            return redirect('/home/shouye');
        } else {

            return back();
        }

    }
//
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function xianshi(Request $request)
    {
        $resp = SaleUserDetail::where('exname', 'like', '%' . $request['chaxun'] . '%')->paginate($request->input('num', 5));
        $chaxun = $request->input('chaxun');
//        return view('admins.saleuser.add');


        return view('admins/saleuser/list',compact('request', 'resp', 'chaxun'));

    }

    public function tongguo($id)
    {
        $res = SaleUserDetail::where('sxid',$id)->first()->toArray();

        $res['status'] = 1;
        $data = SaleUserDetail::where('sxid', $id)->update($res);


        if ($data) {

            return 1;
//            $resq = SaleUser::where('sid',$res['sid'])->first()->toArray();
//            $resq['status']=1;
//            $datas = SaleUser::where('sid',$res['sid'])->updata($resq);
        } else {

            return 0;
        }
    }


    }