@extends('layouts.admins')

@section('title','权限添加页')


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
            <span><i class="icon-users"></i>权限添加</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="{{url('admins/permission')}}" method="post" enctype ="multipart/form-data">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">权限名称:</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name='permission_name'>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">权限描述:</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name='permission_description'>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <div class="mws-button-row">
                    <input value="添加权限" class="btn btn-danger" type="submit">

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