<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\DingDan;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class DingDanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

//        dd(session('user')->sid);
        $dingdan = DB::table('elm_saleuser')
            ->join('elm_order_detail','elm_saleuser.sid','=','elm_order_detail.sid')
            ->where('elm_saleuser.sid',session('user')->sid)
            ->where('umsg','like','%'.$request->input('search').'%')->paginate($request->input('num',5));
//        DB::table('elm_order')->where()
        return view('admin.dingdan.dingdan',compact('dingdan','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        $dd = DingDan::find($id);
//        dd($dd);
        return view('admin.dingdan.index',compact('dd'));
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
            $input = Input::except('_token','_method');
            $cate = DingDan::find($id);
            $re = $cate->update($input);
            if($re)
            {
                return redirect('admin/dingdan');
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
//                dd($request->all());
        $re =  DingDan::where('dxid',$id)->delete();
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
