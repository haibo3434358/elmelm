<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShangJiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //商品详情
        $goods = DB::table('elm_goods_detail')->where('sxid','4')->get();
        $goodgfl = DB::table('elm_goods_detail')->where('sxid','4')->groupBy('gfl')->get();
        $grr = [];
        foreach($goodgfl as $k=>$v)
        {
            $grr[] = DB::table('elm_goods_detail')->where('gfl',$v->gfl)->get();
        }
//        商家商品总量
        $goodss = DB::table('elm_goods_detail')->where('sxid','4')->lists('gcount');
        $arr = '';
        foreach($goodss as $k=>$v)
        {
           $arr =+ $v;
        }
//        商品销售总数
//        dd($arr);
//        卖家详情信息
        $saleuser = DB::table('elm_saleuser_detail')->where('sxid','4')->get();
        $saleuser = $saleuser[0];
        return view('home.shop',compact('goods','saleuser','arr','goodss','goodgfl','grr'));
    }


}
