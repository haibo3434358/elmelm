<?php

namespace App\Http\Controllers\Admins;
use App\Http\Model\Permission;
use App\Http\Model\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class RoleController extends Controller
{
    public function auth($id)
    {

//        获取当前的角色
        $role =  Role::find($id);
//        获取所有的权限
        $permissions = Permission::get();
//        获取当前角色已经被授予的权限，用于判断哪些复选框应该打上对勾
        $own_permissions = DB::table('elm_role_permission')->where('rid',$id)->lists('permission_id');
//
//        dd($own_permissions);


        return view('admins.role.auth',compact('role','permissions','own_permissions'));
    }
    public function doauth(Request $request)
    {

//        dd($request->all());
        $input = $request->except('_token');
//        当前角色的id
        $id = $input['rid'];
//         删除当前角色相关的所有权限
        DB::table('elm_role_permission')->where('rid',$id)->delete();
        foreach ($input['permission_id'] as $k=>$v){


//            添加此次要授予的权限
            DB::table('elm_role_permission')->insert([
                'rid'=>$id,
                'permission_id'=>$v
            ]);
        }
        return redirect('admins/role');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Role::get();
        return view('admins.role.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.role.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        $re = Role::create($input);
        if($re){
            return redirect('admins/role');
        }else{
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
        $data =  Role::find($id);

        return view('admins.role.edit',compact('data'));
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

        $input = Input::except('_token','_method');
        $link = Role::find($id);
        $re =  $link->update($input);
        if($re){
            return redirect('admins/role');
        }else{
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
        $re =  Role::where('rid',$id)->delete();
//      删除成功
        if($re){
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
    //查看权限
    public function chakan(Request $request,$id)
    {
        //       dd($request->all());
        $input = $request->except('_token');

        $re1 = DB::table('elm_role_permission')->where('rid',$id)->get();

        //遍历permission_id
        $permission_id = [];
        foreach ($re1 as $k=>$v){
            $permission_id[] = $v->permission_id;
        }
//        存放所有权限名称
        $str = '';
        $str = '<div style="width:700px; height:225px; overflow:scroll;">';
        $str .= '<table aria-describedby="DataTables_Table_1_info" id="DataTables_Table_1"
                       class="mws-datatable-fn mws-table dataTable"><tr><th>ID</th><th>权限名称</th></tr>';
        //遍历拿permission_name
        foreach ($permission_id as $k=>$v){
            //拿要查看的管理员的额permission_name
            $str.= "<tr ><td align='center'>$v</tdalign:center><td align='center'>".DB::table('elm_permission')->where('permission_id',$v)->first()->permission_name."</td></tr>";
       }
        $str.= "</table></div>";

        return $str;

    }
}
