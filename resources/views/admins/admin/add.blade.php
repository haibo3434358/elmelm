@extends('layouts.admins')

@section('title','管理员用户添加页')


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
            <span><i class="icon-users"></i>用户添加</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="{{url('admins/admin')}}" method="post" enctype ="multipart/form-data">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">用户名:</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name='aname'>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">密码:</label>
                        <div class="mws-form-item">
                            <input class="small" type="password" name='apassword'>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">确认密码:</label>
                        <div class="mws-form-item">
                            <input class="small" type="password" name='repassword'>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">权限:</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list inline">
                                <li><label><input type="radio" name='auth' value='1'> 启用</label></li>
                                <li><label><input type="radio" name='auth' value='0'> 禁用</label></li>
                            </ul>
                        </div>
                    </div>

                </div>
                {{ csrf_field() }}
                <div class="mws-button-row">
                    {{--<input type="hidden" name="atime" value="{{time()}}">--}}
                    <input value="注册用户" class="btn btn-danger" type="submit">

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