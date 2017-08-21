<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ShopController extends Controller
{
    //商家详情页
    public function index($id)
    {
        //商家sxid
        $sxid = $id;
//        echo $sxid;
        //从数据库拿商家的所有信息
        $saleuser = DB::table('elm_saleuser_detail')->where('sxid', $sxid)->first();
//        dd($saleuser);

        //拿商家对应的商品的信息
        $goods = DB::table('elm_goods_detail')->where('sxid', $sxid)->get();
        //月售单数

        $sum = 0;
        foreach ($goods as $k => $v) {
            $sum += $v->gcount;
        }

        //拿分类
        $cates = DB::table('elm_goods_detail')->where('sxid', $sxid)->select('gfl')->distinct()->get();
//        dd($cates);
        $cate_goods = [];
        foreach ($cates as $k => $v) {

            //通过分类信息拿商品信息
            $cate_goods[] = DB::table('elm_goods_detail')->where('gfl', $v->gfl)->get();
        }
//dd($cate_goods);
        //显示购物车的信息
        $goods = DB::table('elm_gowuche')->get();


        //引出商家详情页面
        return view('home.shop', compact('saleuser', 'cate_goods', 'cates', 'sum','goods'));
    }


    //点击加入购物车发送ajax
    public function gouwuche($gid)
    {

        //判断用户是否登录
        if (empty(session('user1'))) {
            $data = [
                'status' => 2,
                'msg' => '您还没有登录,请先登录!'
            ];
            return $data;
        } else {
            $good = DB::table('elm_goods_detail')->where('gid', $gid)->first();
            //判断数据库中是否有同一个字段的值
            if (empty(DB::table('elm_gowuche')->where('goods_name', $good->gname)->get())) {
                $re = DB::table('elm_gowuche')->insert(['goods_count' => 1, 'goods_name' => $good->gname, 'goods_price' => $good->gprice]);
                if ($re) {
                    $data = [
                        'status' => 0,
                        'msg' => '添加成功',
                    ];
                } else {
                    $data = [
                        'status' => 1,
                        'msg' => '添加失败',
                    ];
                }
                return $data;
            } else {
                //如果数据库中有同样的字段值,值加倍
                $re = DB::table('elm_gowuche')->where('goods_name', $good->gname)->first();
                $goods_count = $re->goods_count + 1;
                $goods_price = $re->goods_price +$good->gprice;
                $res = DB::table('elm_gowuche')->where('goods_name', $good->gname)->update(['goods_count' => $goods_count, 'goods_price' => $goods_price]);
                if ($res) {
                    $data = [
                        'status' => 0,
                        'msg' => '添加成功',
                    ];
                } else {
                    $data = [
                        'status' => 1,
                        'msg' => '添加失败',
                    ];
                }
                return $data;

            }


        }
    }

    public function jian($go_id)
    {
//        dd($go_id);

        $re = DB::table('elm_gowuche')->where('go_id', $go_id)->first();
        $gname = $re->goods_name;
        $good = DB::table('elm_goods_detail')->where('gname', $gname)->first();

//        dd($re);
        $goods_count = $re->goods_count - 1;
        $goods_price = $re->goods_price - $good->gprice;
        $res = DB::table('elm_gowuche')->where('goods_name', $good->    gname)->update(['goods_count' => $goods_count, 'goods_price' => $goods_price]);
        if ($res) {
            $data = [
                'status' => 0,
                'msg' => '减少一份',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '减少失败',
            ];
        }
        return $data;

    }
}

