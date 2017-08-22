@extends('layouts.admins')


@section('title','用户列表页')



@section('content')

    <div class="mws-panel grid_3">
        <div class="mws-panel-header">
            <span><i class="icon-book"></i>系统配置信息详情</span>
        </div>
        <div class="mws-panel-body no-padding">
            <ul class="mws-summary clearfix">
                <li>
                    <span class="key"><i class="icon-support"></i> 操作系统</span>
                    <span class="val">
                                    <span class="text-nowrap">{{$data->oprate_system}}</span>
                                </span>
                </li>
                <li>
                    <span class="key"><i class="icon-certificate"></i> 环境</span>
                    <span class="val">
                                    <span class="text-nowrap">{{$data->environment}} <i class="up icon-arrow-up"></i></span>
                                </span>
                </li>
                <li>
                    <span class="key"><i class="icon-shopping-cart"></i> 服务器</span>
                    <span class="val">
                                    <span class="text-nowrap">{{$data->php_server}} <i class="down icon-arrow-down"></i></span>
                                </span>
                </li>
                <li>
                    <span class="key"><i class="icon-install"></i> 时间</span>
                    <span class="val">
                                    <span class="text-nowrap">{{date('Y-m-d H:i:s',time())}}</span>
                                </span>
                </li>
                <li>
                    <span class="key"><i class="icon-key"></i> ip</span>
                    <span class="val">
                                    <span class="text-nowrap">{{$data->ip}}</span>
                                </span>
                </li>
            </ul>
        </div>
    </div>
@endsection
