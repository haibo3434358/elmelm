@extends('layouts.admins.index')

@section('title','后台首页')


@section('content')
    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl">商品详情示例</h2>
            <a class="fr top_rt_btn">返回产品列表</a>
        </div>
        @if (count($errors) > 0)
            <div class="mark">
                <ul>
                    @if(is_object($errors))
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    @else
                        <li>{{ session('errors') }}</li>
                    @endif
                </ul>
            </div>
        @endif
        <section>
            <form action="{{url('admin/pass')}}" method="post">
            <ul class="ulColumn2">
                {{csrf_field()}}
            <li>
                <span class="item_name" style="width:120px;">用户名：</span>
                <input type="text" class="textbox" name="sname" placeholder="请输入用户名..."/>
                <span class="errorTips">请输入6-18位数字或英文</span>
            </li>
            <li>
                <span class="item_name" style="width:120px;">新密码：</span>
                <input type="text" class="textbox"  name="spassword" placeholder="请输入密码..."/>
                <span class="errorTips">请输入6-18位数字或英文</span>
            </li>
            <li>
                <span class="item_name" style="width:120px;">确认密码：</span>
                <input type="text" class="textbox" name="spassword1" placeholder="请再次输入密码"/>
                <span class="errorTips">请输入6-18位数字或英文</span>
            </li>
            <li>
                <span class="item_name" style="width:120px;"></span>
                <input type="submit" class="link_btn"/>
            </li>
            </ul>
            </form>
        </section>
    </div>
@endsection
