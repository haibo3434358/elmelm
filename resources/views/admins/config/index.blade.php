@extends('layouts.admins')


@section('title','用户列表页')



@section('content')

    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-users"></i>网站配置</span>
        </div>
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">

                <table aria-describedby="DataTables_Table_1_info" id="DataTables_Table_1"
                       class="mws-datatable-fn mws-table dataTable">
                    <thead>
                    <tr role="row">
                        <th>操作系统</th>
                        <th>环境</th>
                        <th>服务器</th>
                        <th>时间</th>
                        <th>ip</th>
                    </tr>
                    </thead>
                    <tbody aria-relevant="all" aria-live="polite" role="alert">

                        <tr class=" odd ">
                            <td align="center" class="  sorting_1">{{$data->oprate_system}}</td>
                            <td align="center" class=" ">{{$data->environment}}</td>
                            <td align="center" class=" ">{{$data->php_server}}</td>
                            <td align="center" class=" ">{{date('Y-m-d H:i:s',time())}}</td>
                            <td align="center" class=" ">{{$data->ip}}</td>

                        </tr>
                    </tbody>
                </table>






            </div>
        </div>
    </div>
@endsection
