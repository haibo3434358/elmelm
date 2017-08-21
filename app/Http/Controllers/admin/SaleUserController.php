<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class SaleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = session('user');
        $id = $data['sid'];

        //获取数据
        $res = DB::table('elm_saleuser')

            ->join('elm_saleuser_detail','elm_saleuser.sid','=','elm_saleuser_detail.sid')
            ->where('elm_saleuser.sid',$id)
            ->select('slogo','exarea','exname','exphone','semail')


            ->get();


//        dd($res);
        return view('admin.saleuser.index',compact('res'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
//卖家详情
    public function saleuserdetail()
    {
        //卖家的sid

        $sid = session('user')->sid;
       $data =  DB::table('elm_saleuser_detail')->where('sid',$sid)->first();
       return view('admin.saleuser.saleuserdetail',compact('data'));
    }

    //修改卖家详情
    public function modifydetail($sid)
    {

        $data = DB::table('elm_saleuser_detail')->where('sid',$sid)->first();
        return view('admin.saleuser.modifydetail',compact('data'));

    }
    //处理修改的卖家详情
    public function domodifydetail(Request $request)
    {
//        dd($request->all());
        $data = $request->except('_token');

        //如果有文件上传

        $img1 = $request->hasFile('eximage');
        if($img1){
            //修改名字
            $name = rand(11111,99999).time();
            //获取后缀
            $suffix =$request->file('eximage')->getClientOriginalExtension();
            //拼接图片路径
            $request->file('eximage')->move('./uploads', $name.'.'.$suffix);
            $data['eximage'] = '/uploads/'.$name.'.'.$suffix;

        }

        $img0 = $request->hasFile('licence1');
        if($img0){
            //修改名字
            $name = rand(11111,99999).time();
            //获取后缀
            $suffix =$request->file('licence1')->getClientOriginalExtension();
            //拼接图片路径
            $request->file('licence1')->move('./uploads', $name.'.'.$suffix);
            $data['licence1'] = '/uploads/'.$name.'.'.$suffix;

        }


        $img2 = $request->hasFile('licence2');
        if($img2){
            //修改名字
            $name = rand(11111,99999).time();
            //获取后缀
            $suffix =$request->file('licence2')->getClientOriginalExtension();
            //拼接图片路径
            $request->file('licence2')->move('./uploads', $name.'.'.$suffix);
            $data['licence2'] = '/uploads/'.$name.'.'.$suffix;

        }
        $img3 = $request->hasFile('slogo');
        if($img3){
            //修改名字
            $name = rand(11111,99999).time();
            //获取后缀
            $suffix =$request->file('slogo')->getClientOriginalExtension();
            //拼接图片路径
            $request->file('slogo')->move('./uploads', $name.'.'.$suffix);
            $data['slogo'] = '/uploads/'.$name.'.'.$suffix;

        }


        $re = DB::table('elm_saleuser_detail')->where('sid',$request->sid)->update($data);
//        dd($re);
        if($re){
            return redirect('admin/saleuserdetail');
        }else{
            return back()->with('error','修改失败');
        }
    }
}
