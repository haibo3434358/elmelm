@extends('layouts.admins.index')

@section('title','商品详情')


@section('content')
    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl">商品列表示例</h2>
            <a href="product_detail.html" class="fr top_rt_btn add_icon">添加商品</a>
        </div>
        <form action="/admin/shangpin/">
        <section class="mtb">
            {{csrf_field()}}
            <select class="select">
                <option value="5" @if($request->num == '5')selected="selected" @endif>
                    5
                </option>
                <option value="10" @if($request->num == '10')selected="selected" @endif>
                    10
                </option>
                <option value="15" @if($request->num == '15')selected="selected" @endif>
                    15
                </option>
                <option value="20" @if($request->num == '20')selected="selected" @endif>
                    20
                </option>
            </select>
            <input type="text" class="textbox textbox_225" name='search' value="{{$request->search}}" placeholder="输入产品关键词或产品货号..."/>
            <input type="submit" value="查询" class="group_btn"/>
        </section>
        </form>
        <table class="table">
            <tr>
                <th>菜品图</th>
                <th>菜品名称</th>
                <th>菜品规格</th>
                <th>单价</th>
                <th>单位</th>
                <th>味道</th>
                <th>菜品推销类型</th>
                <th>菜品状态</th>
                <th>操作</th>
            </tr>
            @foreach($res as $k=>$v)
            <tr>
                <td class="center"><img src="{{$v->gpic}}" width="50" height="50"/></td>
                <td>{{$v->gname}}</td>
                <td class="center">{{$v->gstandard}}</td>
                <td class="center"><strong class="rmb_icon">{{$v->gprice}}</strong></td>
                <td class="center">盘</td>
                <td class="center"><strong class="rmb_icon">{{$v->gtaste}}</strong></td>
                <td class="center"><strong class="rmb_icon">{{$v->gfl}}</strong></td>
                <td class="center"><strong class="rmb_icon">{{$v->gstatus}}</strong></td>
                <td class="center">
                    <a href="{{url('admin/shangpin/'.$v->gid.'/edit')}}" title="修改" class="link_icon">&#101;</a>
                    <a href="javascript:void(0)" onclick="delArt({{$v->gid}})" title="删除" class="link_icon">&#100;</a>
                </td>
            </tr>
           @endforeach
        </table>
        <style>
            .paging li span{
                background: none repeat scroll 0 0 #19a97b;
                border: 1px solid #139667;
                color: white;
                cursor: pointer;
                display: inline-block;
                padding: 5px 8px;
                /*margin:30px;*/

            }
            .paging li{

                float: left;
            }

        </style>
        <script>
            function delArt(id){
//            参数1 要请求的服务器路由
//            参数2 请求要携带的参数数据  _method：delete  _token
//              参数3 回调函数,回调函数的参数data表示服务器返回的数据
//            $.post(URL,data,callback);
//询问框
                layer.confirm('确认删除吗？', {
                    btn: ['确定','取消'] //按钮
                }, function(){
//            layer.msg('删除成功', {icon: 1});
                    $.post("{{url('admin/shangpin/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
//                console.log(data);
                        if(data.status == 0){
                            location.href = location.href;
                            layer.msg(data.msg, {icon: 5});
                        }else{
                            location.href = location.href;
                            layer.msg(data.msg, {icon: 6});
                        }
                    });
                }, function(){

                });
            }
        </script>
        <aside class="paging">
            {!! $res->appends($request->all())->render() !!}
        </aside>
    </div>
@endsection
