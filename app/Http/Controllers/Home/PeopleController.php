<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Crypt;

class PeopleController extends Controller
{
    //引入个人中心页面,写优惠券
    public function index()
    {
        //优惠券个数
        $sum = '';
        //优惠券金额
        $money = 0;
        //优惠券图片
        $pic = '';

        //从session中拿登陆用户的信息
        $uid = 14;
        //从数据库拿用户的优惠券的信息
        $yhvalue = DB::table('elm_user')->where('uid',$uid)->first()->yhvalue;
        $yhvalue1 = rtrim($yhvalue,',');
        $yhvalue2 = explode(',',$yhvalue1);
//        dd($yhvalue2);
        //如果优惠券只有一个
        if(count($yhvalue2) == 1){
            $sum = 1;
            $smoney = $yhvalue1;
            //从数据库中拿优惠券的图片
            $pic = DB::table('elm_youhuiquan')->where('yhvalue',$yhvalue1)->get();

               $pic =  $pic['yhpic'];
            return view('home.yhq',compact('sum','money','pic'));

        }else{
            $pic = [];
            //如果优惠券多于1个
            foreach($yhvalue2 as $k=>$v){
                $sum++;
                $money += $v;
                $pic[] = DB::table('elm_youhuiquan')->where('yhvalue',$v)->get()[0]->yhpic;

            }

            return view('home.yhq',compact('sum','money','pic'));
        }

    }


    //个人中心修改密码
    public function modifypass()
    {
        return view('home.modifypass');

    }

    //处理修改的密码
    public function doModifypass(Request $request)
    {
        //判断新密码和确认密码是否一样
        if($request->input('password') != $request->input('repass')){
            return back()->with('error','新密码和确认密码不一致');
        }

        $this->validate($request,[
            "password"=>"required|regex:/^\w{6,10}$/",
            "repass"=>"required|same:password",
        ],[
            "password.required" => "密码必须填写",
            "password.regex" => "密码必须符合要求",
            "repass.same"=>"新密码必须和密码相同",
            "repass.required"=>"新密码必须填写",
        ]);
        //加密,存入数据库
            $uid = session('user1')['uid'];
        $password = Crypt::encrypt($request->input('password'));
       $re =  DB::table('elm_user')->where('uid',$uid)->update('password',$password);
       if($re){
           //修改成功,引出什么....页面
           return view('');
       }else{
           return back()->with('error','修改密码失败');
       }



    }


    //个人资料
    public function ziliao()
    {
        //从session中拿登录用户的信息
        $uid = session('user1')['uid'];
        //假设用户是$id= 14
      $user =   DB::table('elm_user_detail')
                ->join('elm_user','elm_user_detail.uid','=','elm_user.uid')
                    ->where('elm_user.uid',14)->first();
//      dd($user);
        return view('home.ziliao',compact('user'));
//        return redirect('/home/ziliao');
    }
    //处理个人资料
    public function doziliao(Request $request)
    {

        //判断用户名是否符合要求
        $this->validate($request,[
            'uname' => 'required|regex:/^\w{6,12}$/',
            'phone' =>'required|regex:/^1[34578]\d{9}$/',

        ],[
            'uname.required'=>'用户名不能为空',
            'uname.regex'=>'用户名格式不正确',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确',
        ]);
        $re = $request->except('_token','uid','uface');
        //处理头像上传
        $img = $request->hasFile('uface');
        if($img){
            //修改名字
            $name = rand(11111,99999).time();
            //获取后缀
            $suffix =$request->file('uface')->getClientOriginalExtension();
            //拼接图片路径
            $request->file('uface')->move('./uploads', $name.'.'.$suffix);
            $re['uface'] = '/uploads/'.$name.'.'.$suffix;

        }
//dd($re);
        $birth = $re['birth'];
        $sex = $re['sex'];
        $uface = $re['uface'];
        $phone = $re['phone'];
        $uname = $re['uname'];
        //将所有数据存入数据库
       $res1 =  DB::table('elm_user_detail')->where('uid',$request->input('uid'))->update(
            ['birth'=>$birth,'sex'=>$sex,'uface'=>$uface]
        );

        $res2 = DB::table('elm_user')->where('uid',$request->input('uid'))->update(
            ['uname'=>$uname,'phone'=>$phone]
        );
//        dd($res2);
        if($res1 || $res2){
            return redirect('/home/ziliao');
        }else{
            return back()->with('error','修改失败');
        }

    }

    //引出地址管理页面
    public function address()
    {
        //从session拿登陆用户的值
        $uid = session('user')['uid'];
        $id = 14;
        //从数据库拿用户的地址信息
       $data =  DB::table('elm_user_addr')->where('uid',$id)->get();
//       dd($data);

        return view('home.address',compact('data'));
    }
    //增加地址
    public function addaddress()
    {
        return view('home.addaddress');

    }

    public function saveaddress(Request $request)
    {
        //从session拿登陆用户的值
        $uid = session('user')['uid'];
        $id = 14;
        //假设$uid = 14;
       $re = $request->except('_token');
       $re['uid'] = $id;
       $res =  DB::table('elm_user_addr')->where('uid',$id)->insert($re);
       if($res){
           return redirect('/home/address');
       }else{
           return back()->with('error','增加地址失败');
       }
    }
    //修改地址
    public function modifyaddress($addid)
    {

       $data =  DB::table('elm_user_addr')->where('addid',$addid)->first();

        return view('home.modifyaddress',compact('data'));
    }
    
    //处理修改后的地址
    public function domodifyaddress(Request $request)
    {
        $re = $request->except('_token','addid');
        $res= DB::table('elm_user_addr')->where('addid',$request->input('addid'))->update($re);
        if($res){
           return redirect('/home/address');
        }else{
           return back()->with('error','修改地址失败');
        }

    }

    //删除地址
    public function deladdress($addid)
    {
//        echo $addid;
        $re  =  DB::table('elm_user_addr')->where('addid',$addid)->delete();
        if($re){
            return redirect('/home/address');
        }else{
            return back()->with('error','删除地址失败');
        }
    }


    //引出订单管理页面
    public function myorder()
    {
        //从session中拿登录用户的信息
        $uid = session('user1')['uid'];
        //假设用户是$id= 14

        //从数据库拿订单的数据
       $data =  DB::table('elm_order_detail')
            ->join('elm_order','elm_order_detail.did','=','elm_order.did')
             ->where('elm_order.uid',14)
                ->get();
//       dd($data);
        return view('home.myorder',compact('data'));
    }
}
