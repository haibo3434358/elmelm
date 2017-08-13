@extends('layouts.admins')

@section('title','用户修改页')


@section('content')


    @if (count($errors) > 0)
        <div class="mws-form-message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style='list-style:none;font-size:17px'>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-users"></i>用户修改</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="{{url('admins/admin/'.$data->aid)}}" method="post" enctype ="multipart/form-data">
                <div class="mws-form-inline">
                    @foreach($res as $k=>$v)
                        <div class="mws-form-row">
                            <label class="mws-form-label">用户名:</label>
                            <div class="mws-form-item">
                                <input class="large" type="text" name='aname' value='{{$v->aname}}'>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">密码:</label>
                            <div class="mws-form-item">
                                <input class="large" type="password" name='apassword' value='{{$v->apassword}}'>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">权限:</label>
                            <div class="mws-form-item">
                                <input class="large" type="text" name='auth' value='{{$v->auth}}'>
                            </div>
                        </div>

                    @endforeach
                </div>
                {{method_field('put')}}
                {{ csrf_field() }}
                <div class="mws-button-row">

                    <input value="修改" class="btn btn-danger" type="submit">
                    <input type="button" class="btn btn-success" onclick="history.go(-1)" value="返回">

                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">

        setTimeout(function(){

            $('.mws-form-message').fadeOut(2000);
        },3000);

    </script>
@endsection