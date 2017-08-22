<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{

    public function over($id)
    {
       //从数据库取出订单数据
        $data = DB::table('elm_order_detail')->where('dxid',$id)->first();
//        dd($data);
        return view('home.over',compact('data'));
    }

}
