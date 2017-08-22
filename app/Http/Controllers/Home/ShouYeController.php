<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Cate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShouYeController extends Controller
{
    //地图页
    public function ditu()
    {
        return view('home.ditu');

    }
    //由一级遍历二级,发送ajax
    public function erji($id)
    {
        $data = [];
        $datas = [];
        //$id是一级的cid,查一级分类的所有信息
        $cate2 = Cate::where('pid',$id)->get();
        return $cate2;
    }

    //由二级分类遍历商家
    public function shangJ($id)
    {
        //知道$id,通过将分类表和商家二级分类表联查拿店铺的名称exname
       $exname =  DB::table('elm_cate')->
                        join('elm_sale_cate','elm_cate.cate_name','=','elm_sale_cate.cate_name')->
                            where('cid',$id)->get();
//dd($exname);
$data = [];
foreach($exname as $k=>$v){
    //知道exname,通过将店铺详情表和商品表联查,取得想要的字段信息sxid,exname,ofee,slogo,sum(gcount) as sum
    $data[] = DB::table('elm_saleuser_detail')
        ->select(DB::raw('elm_saleuser_detail.sxid,exname,ofee,slogo,sum(gcount) as sum'))
        ->Join('elm_goods_detail','elm_saleuser_detail.sxid','=','elm_goods_detail.sxid')
        ->where('elm_saleuser_detail.exname',$v->exname)->get() ;
}


//        dd($data);
        return $data;
    }

    //首页信息
    public function index()
    {
        $data = [];
        $datas = [];
        //$id是一级的cid,查一级分类的所有信息
        $cate1 = Cate::where('pid',0)->get();
        //拿二级分类的信息
        $cate2 = DB::table('elm_cate')->where('pid','>',0)->lists('cate_name');
        //通过cate_name找exname,通过exname找店家详情
        $sj = [];
        //如果一级分类下有二级分类
        if($cate2){
            foreach($cate2 as $k=>$v){
                $sj[] =  DB::table('elm_sale_cate')->join('elm_saleuser_detail','elm_sale_cate.exname','=','elm_saleuser_detail.exname')->where('cate_name',$v)->get();
            }
            $re = [];
            //如果二级分类下有商家
            //        将店铺详情表与商品表联查

            foreach($sj as $k=>$v){
                foreach($v as $kk=>$vv){
                    $re[] =  DB::table('elm_saleuser_detail')
                        ->select(DB::raw('elm_saleuser_detail.sxid,exname,ofee,slogo,sum(gcount) as sum'))
                        ->Join('elm_goods_detail','elm_saleuser_detail.sxid','=','elm_goods_detail.sxid')
                        ->where('elm_saleuser_detail.sxid',$v[$kk]->sxid)->get() ;
                }

            }


        }

//        dd($sj);
//


//        dd($re);
        return view('home.shouye',compact('cate1','re'));


    }

    public function ab($id)
    {
        echo $id;

    }
}
