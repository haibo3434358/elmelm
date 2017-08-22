<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use  DB;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //从数据库拿友情链接的信息
       $res =  DB::table('elm_link')->get();
       return view('admins.link.index',compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admins.link.add');
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
            'link_name' => 'required',
            'l_url' => 'required',

        ],[
            'link_name.required'=>'用户名不能为空',
            'l_url.required'=>'用户名格式不正确',

        ]);
        $res = $request->except('_token');



        $data = DB::table('elm_link')->insert($res);

        if ($data) {

            return redirect('/admins/link');
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
        $res = DB::table('elm_link')->where('lid', $id)->first();

        return view('admins.link.edit',compact('res'));
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

        $res = $request->except(['_token','lid','_method']);


        $data = DB::table('elm_link')->where('lid',$id)->update($res);

        if ($data) {

            return redirect('/admins/link');
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
        $res =   DB::table('elm_link')->where('lid',$id)->delete();
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
