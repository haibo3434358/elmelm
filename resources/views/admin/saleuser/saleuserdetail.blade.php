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
            <th>联系人</th>
            <th>商家电话</th>
            <th>门店照片</th>
            <th>营业执照</th>
            <th>餐饮服务许可</th>
            <th>商家logo</th>
            <th>开始营业时间</th>
            <th>结束营业时间</th>
            <th>商家配送费</th>
            <th>商家起送费</th>
            <th>操作</th>
        </tr>

        <tr>

            <td class="center">{{$data->contacts}}</td>
            <td class="center">{{$data->exphone}}</td>
            <td class="center"><img src="{{$data->eximage}}" style="width:50px;" alt=""></td>
            <td class="center"><img src="{{$data->licence1}}" alt="" style="width:50px;"></td>
            <td class="center"><img src="{{$data->licence2}}" alt="" style="width:50px;"></td>
            <td class="center"><img src="{{$data->slogo}}" alt="" style="width:50px;"></td>
            <td class="center">{{$data->stime}}</td>
            <td class="center">{{$data->etime}}</td>
            <td class="center">{{$data->ofee}}</td>
            <td class="center">{{$data->odelfee}}</td>
            <td class="center">
                <a href="{{url('admin/modifydetail')}}/{{$data->sid}}" title="编辑" class="link_icon">e</a>
            </td>
        </tr>
    </table>
    </div>
@endsection