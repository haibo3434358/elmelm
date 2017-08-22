<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\shangpin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ShangPinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = shangpin::where('gname','like','%'.$request->input('search').'%')->paginate($request->input('num',5));
        return view('admin.shangpin.index',compact('res','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shangpin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all
//
//
//());
        $res = $request->except('_token','gpic');
        //得到用户信息session值  session('user')
        dd(session('user'));
        $quan = DB::table('elm_saleuser')->join('elm_saleuser_detail','elm_saleuser.sid','=','elm_saleuser_detail.sid')->join('elm_goods_detail','elm_saleuser_detail.sxid','=','elm_goods_detail.sxid');
        dd($quan->gid);
        $id = DB::table('elm_goods_detail')->orderBy('sxid')->insertGetId($res);
        if (!$id) {
            die('没有找到最后插入的id');
        }
        $imgs = $request->hasFile('gpic');
        if ($imgs) {
            $info = [];
            $inoo = '';
            //遍历上传的图片
            foreach ($request->file('gpic') as $k => $v){
                //修改名字
                $name = rand(11111,99999).time();
                //获取后缀
                $suffix = $v->getClientOriginalExtension();
                //拼接图片路径
                $v->move('./uploads', $name.'.'.$suffix);
//                $tmp_img['gid'] = $id;
                $tmp_img['gpic'] = '/uploads/'.$name.'.'.$suffix;
//                $info[] = $tmp_img;
                $inoo = $tmp_img;
            }
//            dd($inoo);
        }
        $data = DB::table('elm_goods_detail')->where('gid',$id)->update($inoo);
//        $data = DB::table('elm_goods_detail')->insert($info);
        if ($data) {
            return redirect('/admin/shangpin/')->with('success','添加成功');
        } else {
            return back()->with('success', '添加失败');
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
        $dd = DB::table('elm_goods_detail')->where('gid',$id)->get();
        $dd = $dd[0];
        return view('admin.shangpin.edit',compact('dd'));
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
//        dd($request->all());
        $input = Input::except('_token','_method','gpic');
        $imgs = $request->hasFile('gpic');
        if ($imgs) {
            foreach ($request->file('gpic') as $k => $v) {
                //修改名字
                $name = rand(11111, 99999) . time();
                //获取后缀
                $suffix = $v->getClientOriginalExtension();
                //拼接图片路径
                $v->move('./uploads', $name . '.' . $suffix);
//                $tmp_img['gid'] = $id;
                $tmp_img['gpic'] = '/uploads/' . $name . '.' . $suffix;
//                $info[] = $tmp_img;
                $inoo = $tmp_img;
            }
        }
        if($imgs){
            $cate = shangpin::find($id);
            $re = $cate->update($input);
            $data = DB::table('elm_goods_detail')->where('gid',$id)->update($inoo);
        }else{
            $cate = shangpin::find($id);
            $data = $cate->update($input);
        }
//        $cate = shangpin::find($id);
//        $re = $cate->update($input);
//        $data = DB::table('elm_goods_detail')->where('gid',$id)->update($inoo);
        if($data)
        {
            return redirect('/admin/shangpin');
        }else{
            return back()->with('error','修改失败');
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
        $re =  shangpin::where('gid',$id)->delete();
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
