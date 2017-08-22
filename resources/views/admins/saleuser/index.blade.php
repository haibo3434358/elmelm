@extends('layouts.admins')

@section('title','用户列表页')


@section('content')

    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            商家用户列表
        </span>
        </div>
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <form action="{{url('admins/saleuser')}}" method="get">
                    <div class="dataTables_length" id="DataTables_Table_1_length">
                        <label>
                            显示
                            <select aria-controls="DataTables_Table_1" size="1" name="num">
                                <option  value="5" @if($request->num == '5') selected="selected" @endif>
                                    5
                                </option>
                                <option value="10" @if($request->num == '10') selected="selected" @endif>
                                    10
                                </option>
                                <option value="15" @if($request->num == '15') selected="selected" @endif>
                                    15
                                </option>
                                <option value="20" @if($request->num == '20') selected="selected" @endif>
                                    20
                                </option>
                            </select>
                            条
                        </label>
                    </div>
                    <div id="DataTables_Table_1_filter" class="dataTables_filter">
                        <label>
                            你要找:
                            <input aria-controls="DataTables_Table_1" type="text" name="chaxun" value="{{isset($chaxun)?$chaxun:''}}">
                            <input type="submit" value="查询">
                        </label>
                    </div>
                </form>
                <table aria-describedby="DataTables_Table_0_info" id="DataTables_Table_0"
                       class="mws-datatable mws-table dataTable">
                    <thead>
                    <tr role="row">
                        <th aria-label="Rendering engine: activate to sort column descending"
                            aria-sort="ascending" style="width: 186px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0"
                            tabindex="0" role="columnheader" class="sorting_asc">
                            商家ID
                        </th>
                        <th aria-label="Browser: activate to sort column ascending" style="width: 251px;"
                            colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0"
                            role="columnheader" class="sorting">
                            商家用户名
                        </th>

                        <th aria-label="Engine version: activate to sort column ascending" style="width: 160px;"
                            colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0"
                            role="columnheader" class="sorting">
                            商家注册电话
                        </th>
                        <th aria-label="Engine version: activate to sort column ascending" style="width: 160px;"
                            colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0"
                            role="columnheader" class="sorting">
                            商家注册邮箱
                        </th>
                        <th aria-label="CSS grade: activate to sort column ascending" style="width: 118px;"
                            colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0"
                            role="columnheader" class="sorting">
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody aria-relevant="all" aria-live="polite" role="alert">

                    @foreach($resp as $k=>$v)
                        <tr class="@if ($k % 2 == 1) odd @else even @endif">
                            <td class="  sorting_1">
                                {{$v->sid}}
                            </td>
                            <td class=" ">
                                {{$v->sname}}
                            </td>

                            <td class=" ">
                                {{$v->sphone}}
                            </td>
                            <td class=" ">
                                {{$v->semail}}
                            </td>
                            <td class=" ">
                                <a  class="btn btn-info" href="{{url('admins/saleuser/'.$v->sid.'/edit')}}">修改</a>
                                <a  class="btn btn-danger" href="javascript:void(0)" onclick="delUser({{$v->sid}})">删除</a>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
                <style type="text/css">
                    #page li {

                        background - color: #444444;
                        border - left: 1px solid rgba(255, 255, 255, 0.15);
                        border - right: 1px solid rgba(0, 0, 0, 0.5);
                        box - shadow: 0 1px 0 rgba(0, 0, 0, 0.5),
                        0 1px 0 rgba(255, 255, 255, 0.15) inset;
                        color: #fff;
                        cursor: pointer;
                        display: block;
                        float: left;
                        font - size: 12px;
                        height: 20px;
                        line - height: 20px;
                        outline: medium none;
                        padding: 0 10px;
                        text - align: center;
                        text - decoration: none;}

                    #page.active {
                        background - color: #88a9eb;
                        background - image: none;
                        border: medium none;
                        box - shadow: 0 0 4px rgba(0, 0, 0, 0.25) inset;
                        color: #323232;}

                    #page a {
                        color: #fff;}

                    #page.disabled {
                        color: #666666;
                        cursor: default;}

                    #page ul {

                        margin:
                                0px;}
                </style>




                <div id="DataTables_Table_1_paginate" class="dataTables_paginate paging_full_numbers">
                    <div id='page'>
                        {!! $resp->render() !!}
                    </div>
                </div>
                <script>

                    function delUser(id){
//            参数1 要请求的服务器路由
//            参数2 请求要携带的参数数据  _method：delete  _token
//              参数3 回调函数,回调函数的参数data表示服务器返回的数据
//            $.post(URL,data,callback);
//询问框
                        layer.confirm('确认删除吗？', {
                            btn: ['确定','取消'] //按钮
                        }, function(){
//            layer.msg('删除成功', {icon: 1});
                            $.post("{{url('admins/saleuser/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
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
            </div>
        </div>
    </div>

@endsection
