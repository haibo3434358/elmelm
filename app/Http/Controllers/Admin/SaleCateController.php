<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class SaleCateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //查店铺名称
        $sid = session('user')->sid;
        $re = DB::table('elm_saleuser_detail')->where('sid',$sid)->first();
        $exname = $re->exname;
        //店铺详情id
        $sxid = $re->sxid;
        //从数据库拿分类表的数据
        $data = DB::table('elm_sale_cate')->where('sxid',$sxid)->first();
        $cate_name = $data->cate_name;


        //引入分类列表页
        return view('admin.cate.index',compact('request','exname','cate_name','sxid'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //判断商家有没有增加过分类

        $sid = session('user')['sid'];
        $detail = DB::table('elm_saleuser_detail')->where('sid',$sid)->first();
        $sxid = $detail->sxid;

        $res = DB::table('elm_sale_cate')->where('sxid',$sxid)->first();
        if(!$res){
            //从数据库拿分类表的数据
            $data = DB::table('elm_cate')->where('pid','>',0)->get();
            $cate_name = [];
            foreach($data as $k=>$v){
                //二级分类名称
                $cate_name[] = $v->cate_name;
            }
            //引入商品分类列表
            return view('admin.cate.add',compact('detail','cate_name'));
        }else{
            return redirect('admin/cate')->with('error','您已经添加了分类,只能修改分类');
        }



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());


        //处理提交的数据
        $data = $request->except('_token');
//        dd($data);

        $re = DB::table('elm_sale_cate')->insert($data);
//        dd($re);

        //添加数据成功,跳转至列表页,失败,返回
        if($re){
            return redirect('admin/cate');
        }else{
            return back()->with('error','添加失败');
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
        //取出要修改的所有信息
       $datas =  DB::table('elm_sale_cate')->where('sxid',$id)->first();
        //从数据库拿分类表的数据
        $data = DB::table('elm_cate')->where('pid','>',0)->get();
        $cate_name = [];
        foreach($data as $k=>$v){
            //二级分类名称
            $cate_name[] = $v->cate_name;

        }

        //引入修改页面
        return view('admin.cate.edit',compact('datas','cate_name'));

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
        $res = $request->except('_token','sxid','_method');

        $data = DB::table('elm_sale_cate')->where('sxid', $id)->update($res);

        if($data){
            return redirect('/admin/cate');
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
        //删除分类
        $re = DB::table('elm_goods_cate')->where('gcid',$id)->delete();

        if($re){
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
