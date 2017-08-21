<?php

namespace App\Http\Controllers\Home;

//use Cart;
use Gloudemans\Shoppingcart\Facades\Cart;
//use Gloudemans\Shoppingcart\ShoppingcartServiceProvider;
use Illuminate\Http\Request;

//use Overtrue\LaravelShoppingCart\Facade;
use App\Http\Requests;
use ShoppingCart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function session(Request $request,$id)
    {


//        if(empty(session("shopcar.".$id))){
//            $shangpin = DB::table('elm_goods_detail')->where('gid',$id)->get();
//            session(["shopcar.".$id=>$shangpin]);
//        }else{

//           $shangpin = shangpin::where('sxid',$id)->get();
            $shangpin = DB::table('elm_goods_detail')->where('gid',$id)->get();
//            dd($shangpin);
//            $arr = $arr+$shangpin;
//            dd($shangpin);
////r);          session()->push('user.teams', 'developers');
////            session(["shopcar.".$id=>$shangpin]);
//              Request::get('product_id')
//            $shangpinpin = $shangpin[0];
//            dd($shangpin);
                foreach($shangpin as $k=>$v){
                    Cart::add($v->gid,$v->gname,1,$v->gprice);
                }
//                if (Request::get('gid') && (Request::get('increment')) == 1) {
//                    $rowId = Cart::search(array('id' => Request::get('gid')));
//                    $row = Cart::get($rowId[0]);
//
//                    Cart::update($rowId[0], $row->qty + 1);
//                }
//
//                //decrease the quantity
//                if (Request::get('gid') && (Request::get('decrease')) == 1) {
//                    $rowId = Cart::search(array('id' => Request::get('gid')));
//                    $row = Cart::get($rowId[0]);
//
//                    Cart::update($rowId[0], $row->qty - 1);
//                }

////            //dd(session('shopcar.3.0')->gname);
//              Cart::add($shangpinpin->gid,$shangpinpin->gname,$id,$shangpinpin->gprice);
//                  session()->push("gid".rand(11,99), $shangpin[0]->gid);
//                  session()->push("gname".rand(11,99), $shangpin[0]->gname);
//                  session()->push("price".rand(11,99), $shangpin[0]->gprice);
//                     dd(session()->all());
////            return $ss;
//
//                $row = ShoppingCart::add('gid' => $shangpin[0]->gid, 'gname' => $shangpin[0]->gname,'gprice'=>$shangpin[0]->gprice);
//                $rawId = $row->rawId();
//                dd($row);
//                $request->session()->push('user.teams', 'developers');

                return $shangpin;

    }
    public function gouwu($id)
    {
//        dd($id);
//        dd($request->all());
//        session(['uxid'=>14]);
        $shangjia = DB::table('elm_saleuser_detail')->where('sxid',$id)->get();
        $uid = DB::table('elm_user_detail')->leftjoin('elm_user_addr','elm_user_detail.uid','=','elm_user_addr.uid')->where('uxid',session('uxid'))->get();
//       dd($uid);
        $uxid = DB::table('elm_user_addr')->where('uxid',session('uxid'));
//         $uid = $uid[0];
        $shangjia = $shangjia[0];
//        $cart = Cart::content();
//        $cart = $cart->toArray();
//        $zonge = Cart::tot
//al();
//        dd($shangjia);
//        dd($cart);
        return view('home.gouwu',compact('shangjia','uid','cart','uxid'));

    }
    public function destory()
    {
//        dd(Cart::content());
//        dd(Cart::get($rowId));
        Cart::destroy();
        return redirect('home/shop');
    }

    public function contant()
    {
//        foreach(Cart::content() as $k=>$v){
//                var_dump($v);
//        }
    }
    public function che()
    {
        foreach(Cart::content() as $row){
            Cart::store('name');
            Cart::store('price');
        }
//        dd(Cart::content());
//        Cart::store('name');
//        Cart::store('price');
        echo 'chenggong';


    }
    public function tijiao(Request $request)
    {
//        dd($request->all());
        $dingdan=$request->except('_token','phone','dizhi','optionAddress','xingming','liuyan');
        $arr = array_combine($dingdan['mingzi'],$dingdan['jiaqian']);
//        dd($arr);
//        $i = 0;
        foreach($arr as $k=>$v){
            DB::table('elm_order_detail')->insert(['sjr'=>$request->xingming,'dprice'=>$request->dizhi,'umsg'=>$k,'money'=>$v,'dd'=>$request->liuyan,'phone'=>$request->phone]);
        }

        return view('home.order');
    }
}
