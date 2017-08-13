<?php

namespace App\Http\Controllers\Admins;

use App\Http\Model\Cate;
use App\Http\Model\CateFirst;
use App\Http\Model\CateSecond;
use Illuminate\Http\Request;
use DB;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //从数据库拿数据
        $cates = DB::table('elm_cate')->
        select(DB::raw("*,concat(path,cid) as npath"))->
        orderBy('npath')->
        where('cate_name','like','%'.$request->input('name').'%')->
        paginate($request->
        input('num',10));

        //将path遍历出来的值美化一下
        foreach($cates as $k => $v){

            $data = explode(',',$v->path);

            $n = count($data)-2;

            $v->cate_name=str_repeat('|---',$n).$v->cate_name;

        }
        //引入分类列表页
        return view('admins.cate.index',['cates'=>$cates,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //从数据库拿出所有一级分类
        $cates = Cate::where('pid',0)->get();


        //引入增加分类页面
        return view('admins.cate.add',compact('cates'));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //表单验证
        $this->validate($request, [
            'cate_name' => 'required'

        ],[
            'cate_name.required' => '分类名字不能为空'
        ]);

        //将数据存入数据库
        $res = $request->except('_token');
        $res['path'] = '0,'.$res['pid'].',';
//        dd($res);
        $datas = DB::table('elm_cate')->insert($res);

        //如果成功,跳至列表页,失败,返回增加页
        if($datas){

            return redirect('/admins/cate');
        }else{
            return back()->with('error','添加分类失败');
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
