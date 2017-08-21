<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Model\UserAdmin;

class HasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

//        dd(11);
        //     1   获取当前路由对应的控制器方法
//        "App\Http\Controllers\Admin\IndexController@index"
        $route = \Route::current()->getActionName();

//        return $route;
//        2 获取当前用户对应的权限
//           2.1 获取当前用户
        $user = UserAdmin::find(session('useradmin')->aid);
//        dd($user);
//          2.2 获取当前用户对应的角色
        $roles =    $user->roles()->get();

//         声明一个空数组，存放所有的权限，通过判断$route在没有所有权限对应的数组，就可以知道用户是否有这条路由对应的权限
        $arr = array();



//         2.3 获取角色对应的权限
        foreach ($roles as $k=>$role){
            //每次遍历获取一个角色，然后获取这个角色对应的权限
//            dd($role);
            $pers =  $role->permissions()->get();
//           遍历当前角色对应的权限
            foreach ($pers as $m=>$per){
//                将这个权限写入arr数组
//                dd($per);
//                获取当前权限模型的description属性
                $arr[] = $per->permission_description;

            }
        }
//        去掉arr数组中重复的权限a
        $newarr = array_unique($arr);
//        dd($newarr);

//    3 判断当前路由对应的控制器的方法是否在用户对应的权限中，如果在就放行，如果不在提示没有权限
        if(in_array($route,$newarr)){
            return $next($request);
        }else{
            return view('admins.error');
        }


    }

}
