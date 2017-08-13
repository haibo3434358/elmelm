<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;

class YouHuiController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sid = session('user')->sid;
        //从数据库拿数据
        $data = DB::table('elm_yhq')->where('sid',$sid)->get();

        //引入列表页面
        return view('admin.youhui.index',compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sid = session('user')->sid;
        //引入优惠券添加页面
        return view('admin.youhui.add',compact('sid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "yhname"=>"required",
            "yhvalue"=>"required"
        ],[
            "yhname.required" => "优惠名必须填写",
            "yhvalue.required"=>"优惠值必须填写"
        ]);
//        dd($request->all());
        $data = $request->except('_token','yhpic');


        $yhid = DB::table('elm_yhq')->orderBy('yhid')->insertGetId($data);

    	if (!$yhid) {

            die('没有找到最后插入的id');
        }

    	$imgs = $request->hasFile('yhpic');

    	if ($imgs) {


            $info = [];
            $inoo = '';

            //遍历上传的图片
            foreach($request->file('yhpic') as $k=>$v){
                //修改名字
                $name = rand(11111,99999).time();

                //获取后缀
                $suffix = $v->getClientOriginalExtension();

                //拼接图片路径
                $v->move('./uploads', $name.'.'.$suffix);

//                $tmp_img['yhid'] = $yhid;

                $tmp_img['yhpic'] = '/uploads/'.$name.'.'.$suffix;

//                $info[] = $tmp_img;
                $inoo = $tmp_img;

            }
//            dd($info);
        }



    	$data = DB::table('elm_yhq')->where('yhid',$yhid)->update($inoo);

    	if ($data) {

            return redirect('/admin/youhui');
        } else {

            return back()->with('error', '添加失败');
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
        //拿要修改的数据
        $data = DB::table('elm_yhq')->where('yhid',$id)->first();
        //引入修改页面
        return view('admin.youhui.edit',compact('data'));
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
//        dd($request->all());

        $data = $request->except('_method','_token','yhpic');

        $imgs = $request->hasFile('yhpic');

        if ($imgs) {


            $info = [];
            $inoo = '';

            //遍历上传的图片
            foreach($request->file('yhpic') as $k=>$v){
                //修改名字
                $name = rand(11111,99999).time();

                //获取后缀
                $suffix = $v->getClientOriginalExtension();

                //拼接图片路径
                $v->move('./uploads', $name.'.'.$suffix);

//

                $tmp_img['yhpic'] = '/uploads/'.$name.'.'.$suffix;

//
                $inoo = $tmp_img;

            }
//
        }
//        echo '<pre>';
//        var_dump($data);
//        var_dump($inoo);
//        die;

        $dd = array_merge($data,$inoo);



        $re = DB::table('elm_yhq')->where('yhid',$id)->update($dd);

        if ($re) {

            return redirect('/admin/youhui');
        } else {

            return back()->with('error', '修改失败');
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
        $re =  DB::table('elm_yhq')->where('yhid',$id)->delete();
        if($re){
            $data =[
                'status'=>0,
                'msg'=>'删除成功',
            ];
        }else{
            $data =[
                'status'=>0,
                'msg'=>'删除成功',
            ];
        }
        return $data;
    }

}
