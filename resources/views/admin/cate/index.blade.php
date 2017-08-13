@extends('layouts.index')

@section('content')


    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl">商家二级分类列表</h2>
        </div>
        @if(session('error'))
            <li>{{ session('error') }}</li>
        @endif
                <table class="table">
                    <tbody>
                    <tr>
                        <th>店铺详情id</th>
                        <th>店铺名称</th>
                        <th>分类名称</th>
                        <th>操作</th>
                    </tr>


                    <tr>
                        <td class="center">{{$sxid}}</td>
                        <td class="center">{{$exname}}</td>
                        <td class="center">
                            {{$cate_name}}
                        </td>
                        <td class="center">
                            <a class="link_icon" title="修改" href="{{url('admin/cate/')}}/{{$sxid}}/edit" >e</a>
                        </td>
                    </tr>

                    </tbody>


                    <script>

                        function delCate(id){
//            参数1 要请求的服务器路由
//            参数2 请求要携带的参数数据  _method：delete  _token
//              参数3 回调函数,回调函数的参数data表示服务器返回的数据
//            $.post(URL,data,callback);
//询问框
                            layer.confirm('确认删除吗？', {
                                btn: ['确定','取消'] //按钮
                            }, function(){
//            layer.msg('删除成功', {icon: 1});
                                $.post("{{url('admin/cate/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
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