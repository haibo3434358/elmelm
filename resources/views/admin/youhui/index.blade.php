@extends('layouts.index')

@section('content')


    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl">优惠券列表</h2>
        </div>
        @if(session('error'))
            <li>{{ session('error') }}</li>
        @endif
                <table class="table">
                    <tbody>
                    <tr>
                        <th>优惠券id</th>
                        <th>优惠券名称</th>
                        <th>优惠券</th>
                        <th>优惠券面值</th>
                        <th>操作</th>
                    </tr>

                    @foreach($data as $k=>$v)
                    <tr>
                        <td class="center">{{$v->yhid}}</td>
                        <td class="center">{{$v->yhname}}</td>
                        <td class="center"><img src="{{$v->yhpic}}" alt="" style="width:100px"></td>
                        <td class="center">{{$v->yhvalue}}</td>

                        <td class="center">
                            <a class="link_icon" title="修改" href="{{url('admin/youhui/')}}/{{$v->yhid}}/edit" >e</a>
                            <a class="link_icon" href="javascript:void(0)" onclick="delYhq({{$v->yhid}})">d</a>
                        </td>
                    </tr>
@endforeach
                    </tbody>


                    <script>

                        function delYhq(id){
//            参数1 要请求的服务器路由
//            参数2 请求要携带的参数数据  _method：delete  _token
//              参数3 回调函数,回调函数的参数data表示服务器返回的数据
//            $.post(URL,data,callback);
//询问框
                            layer.confirm('确认删除吗？', {
                                btn: ['确定','取消'] //按钮
                            }, function(){
//            layer.msg('删除成功', {icon: 1});
                                $.post("{{url('admin/youhui/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
//                console.log(data);
                                    if(data.status == 0){
                                        location.href = location.href;
                                        layer.msg('删除成功', {icon: 6});
                                    }else{
                                        location.href = location.href;
                                        layer.msg('删除失败', {icon: 5});
                                    }

                                });

                            }, function(){

                            });

                        }


                    </script>
                </table>







        </div>

    @endsection