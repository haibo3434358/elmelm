@extends('layouts.admins')

@section('content')
    <div class="mws-panel grid_8">

        <div class="mws-panel-header">
            <span><i class="icon-table"></i> 商家分类页</span>
        </div>
        <div class="mws-panel-body no-padding">
            <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
                <form action="/admins/cate" method='get'>
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>
                        显示
                        <select name="num" size="1" aria-controls="DataTables_Table_1">
                            <option value="10" @if ($request->num == 10) selected="selected" @endif >
                                10
                            </option>
                            <option value="15" @if ($request->num == 15) selected="selected" @endif>
                                15
                            </option>
                            <option value="20" @if ($request->num == 20) selected="selected" @endif>
                                20
                            </option>
                            <option value="25" @if ($request->num == 25) selected="selected" @endif>
                                25
                            </option>

                        </select>
                        条数据
                    </label>
                </div>
                    <div class="dataTables_filter" id="DataTables_Table_1_filter">
                        <label>
                            关键字:
                            <input type="text" aria-controls="DataTables_Table_1" name="name"  value="{{$request->name}}">
                        </label>
                        <button class='btn btn-md btn-info'>搜索</button>
                    </div>
                </form>
                <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 174px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">id</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 225px;" aria-label="Browser: activate to sort column ascending">分类名</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 211px;" aria-label="Platform(s): activate to sort column ascending">父类名</th>
                    </thead>

                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                    @foreach($cates as $k=>$v)
                        <tr class="@if ($k % 2 == 1) odd @else even @endif">
                        <td align="center" class="  sorting_1">{{$v->cid}}</td>
                        <td class=" ">{{$v->cate_name}}</td>
                        <td class=" ">{{ getValueName($v->pid)}}</td>

                    </tr>
                        @endforeach
                    </tbody>
                </table>
                <style type="text/css">
                    #page li{
                        background-color: #444444;
                        border-left: 1px solid rgba(255, 255, 255, 0.15);
                        border-right: 1px solid rgba(0, 0, 0, 0.5);
                        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.5), 0 1px 0 rgba(255, 255, 255, 0.15) inset;
                        color: #fff;
                        cursor: pointer;
                        display: block;
                        float: left;
                        font-size: 12px;
                        height: 20px;
                        line-height: 20px;
                        outline: medium none;
                        padding: 0 10px;
                        text-align: center;
                        text-decoration: none;
                    }
                    #page .active {
                        background-color: #88a9eb;
                        background-image: none;
                        border: medium none;
                        box-shadow: 0 0 4px rgba(0, 0, 0, 0.25) inset;
                        color: #323232;
                    }
                    #page ul{
                        margin:0px;
                    }
                    #page a{
                        color: #fff
                    }

                    #page .disabled {
                        color: #666666;
                        cursor: default;
                    }

                </style>
                <div  id="DataTables_Table_1_paginate" class="dataTables_paginate paging_full_numbers">
                    <div id="page">
                        {!!$cates->appends($request->all())->render()!!}
                    </div>
                </div>
        </div>
    </div>
    @endsection