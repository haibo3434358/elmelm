<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShouCangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $user = DB::table('elm_user')->where('uid',$id)->get();
//        dd($user[0]->uid);
        $res = DB::insert('insert into elm_collect(uid,uname) value(?,?)',[$user[0]->uid,$user[0]->uname]);
        if($res)
        {
            echo '收藏成功';
            return back();
        }else{
            echo '收藏失败';
        }
    }
    public function sc(Request $request)
    {
        $sc = DB::table('elm_collect')->where('uname','like','%'.$request->input('search').'%')->paginate($request->input('num',5));
        return view('admin.shoucang.shoucang',compact('sc','request'));
    }
    public function shanchu($id)
    {
//        dd($id);
        $re =  DB::table('elm_collect')->where('scid',$id)->delete();
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
