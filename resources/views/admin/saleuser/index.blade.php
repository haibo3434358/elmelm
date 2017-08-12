@extends('layouts.index')

@section('title','后台首页')


@section('content')
    <div class="rt_content">
    <section class="mtb">
        <select class="select">
            <option>会员等级</option>
            <option>普通会员</option>
            <option>高级会员</option>
        </select>
        <input class="textbox textbox_225" placeholder="输入你要查询的字段" type="text" name="search">
        <input value="查询" class="group_btn" type="button">
    </section>

    <table class="table">
        <tr>
            <th>商家名称</th>
            <th>商家电话</th>
            <th>电子邮件</th>
            <th>商家logo</th>
            <th>门店区域</th>
            <th>操作</th>
        </tr>
        @foreach($res as $k=>$v)
        <tr>

            <td class="center">{{$v->exname}}</td>
            <td class="center">{{$v->exphone}}</td>
            <td class="center">{{$v->semail}}</td>
            <td class="center">{{$v->slogo}}</td>
            <td class="center">{{$v->exarea}}</td>
            <td class="center">
                <a href="user_detail.html" title="编辑" class="link_icon">e</a>
                <a href="#" title="删除" class="link_icon">d</a>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection