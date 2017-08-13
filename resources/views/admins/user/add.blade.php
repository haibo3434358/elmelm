@extends('layouts.admins.index')

@section('title','用户添加页')


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
            <form class="mws-form" action="{{url('admins/user')}}" method="post" enctype ="multipart/form-data">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">用户名:</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name='uname'>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">密码:</label>
                        <div class="mws-form-item">
                            <input class="small" type="password" name='password'>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">确认密码:</label>
                        <div class="mws-form-item">
                            <input class="small" type="password" name='repassword'>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">邮箱:</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name='email'>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">手机:</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name='phone'>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <div class="mws-button-row">
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