<?php

namespace App\Http\Controllers\admins;

use App\Http\Model\UserAdmin;
use Illuminate\Http\Request;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Model\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function auth($id)
    {

//        获取当前用户
        $user = UserAdmin::find($id);

//        获取所有的角色
        $roles = Role::get();
//        获取当前用户已经被授予的角色，用于判断哪些复选框应该打上对勾
        $own_roles = DB::table('elm_role_auth')->where('aid',$id)->lists('rid');
//
//        dd($own_roles);


        return view('admins.admin.auth',compact('user','roles','own_roles'));
    }
//    保存给角色添加的权限，操作的是role_permission表
    public function doauth(Request $request)
    {

//        dd($request->all());
        $input = $request->except('_token');
//        当前用户的id
        $id = $input['aid'];
        //            删除当前用户相关的所有角色
        DB::table('elm_role_auth')->where('aid',$id)->delete();

        //遍历所有选中的角色
        foreach ($input['rid'] as $k=>$v){

//            添加此次要授予的角色
            \DB::table('elm_role_auth')->insert([
                'aid'=>$id,
                'rid'=>$v
            ]);
        }
        return redirect('admins/admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //获取超级管理员的数据
        $re = UserAdmin::where('aname', 'like', '%' . $request['sousuo'] . '%')->paginate($request->input('num', 5));
        $sousuo = $request->input('sousuo');
        return view('admins.admin.index', compact('request', 're', 'sousuo'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //超级管理员的表单验证
        $this->validate($request, [
            'aname' => 'required|regex:/^\w{6,12}$/|unique:elm_user_admin',
            'apassword' => 'required|regex:/^\w{6,10}$/',
            'repassword' => 'same:apassword',
        ],[
            'aname.required'=>'用户名不能为空',
            'aname.regex'=>'用户名格式不正确',
            'aname.unique'=>'用户名已存在',
            'apassword.required'=>'密码不能为空',
            'apassword.regex'=>'密码格式不正确',
            'repassword.same'=>'两次密码输入不一致',
        ]);
        $res = $request->except(['repassword','_token','pic']);
//        dd($res);
        //存入到数据库

        $res['apassword'] = Crypt::encrypt($request->input('apassword'));
        $res['atime'] = date('Y-m-d H:i:s',time());
        $data = DB::table('elm_user_admin')->insert($res);

        if ($data) {

            return redirect('/admins/admin');
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
        //管理员
        $res = DB::table('elm_user_admin')->where('aid',$id)->get();



        $data = DB::table('elm_user_admin')->where('aid', $id)->first();

        return view('admins.admin.edit',compact('res','data'));
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
            'aname' => 'required|regex:/^\w{6,12}$/|unique:elm_user_admin',
            'apassword' => 'required|regex:/^\w{6,10}$/',
            'repassword' => 'same:apassword',
        ],[
            'aname.required'=>'用户名不能为空',
            'aname.regex'=>'用户名格式不正确',
            'aname.unique'=>'用户名已存在',
            'apassword.required'=>'密码不能为空',
            'apassword.regex'=>'密码格式不正确',
            'repassword.same'=>'两次密码输入不一致',
        ]);
        $uname = $request->input('aname');

        $res = $request->except(['repassword','_token','id','_method']);


        $data = DB::table('elm_user_admin')->where('aid',$id)->update($res);

        if ($data) {

            return redirect('/admins/admin');
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
        $res =  UserAdmin::where('aid',$id)->delete();
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
