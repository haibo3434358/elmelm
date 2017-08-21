<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use validate;

class YouQingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取普通用户数据
        $res = DB::table('elm_link')
            ->where('link_name','like','%'.$request->input('search').'%')
            ->paginate($request->input('num',5));

        $search= $request->input('search');
        return view('admins.youqing.index',compact('res','search','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.youqing.add');
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
            'link_name' => 'required|unique:elm_link',
            'l_url' => 'required',
        ],[
            'link_name.required'=>'链接名不能为空',
            'link_name.unique'=>'用户名已存在',
            'l_url.required'=>'链接不能为空',


        ]);
        $res = $request->except('_token');
        //存入到数据库

        $data = DB::table('elm_link')->insert($res);

        if ($data) {

            return redirect('/admins/youqing');
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
        $res = DB::table('elm_link')->where('lid',$id)->get();

        $data = DB::table('elm_link')->where('lid', $id)->first();

        return view('admins.youqing.edit',compact('res','data'));

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
            'link_name' => 'required',
            'l_url' => 'required',
        ], [
            'link_name.required' => '链接名不能为空',
            'l_url.required' => '链接不能为空',
        ]);
        $lame = $request->input('link_name');
        $res = $request->except('_token', 'id', '_method');


        $data = DB::table('elm_link')->where('lid', $id)->update($res);

        if ($data) {

            return redirect('admins/youqing');
        } else {

            return back()->with('errors', '没有修改,修改失败');
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
        $res =  DB::table('elm_link')->where('lid',$id)->delete();
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
