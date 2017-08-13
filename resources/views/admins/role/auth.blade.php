@extends('layouts.admins')

@section('title','角色添加权限页')


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
            <span><i class="icon-users"></i>角色添加权限</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="{{url('admins/role/doauth')}}" method="post" enctype ="multipart/form-data">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">角色名称:</label>
                        <div class="mws-form-item">
                            <input type="hidden" name="rid" value="{{$role->rid}}">
                            {{$role->rname}}
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">所有的权限:</label>
                        <div class="mws-form-item">
                            @foreach($permissions as $k=>$v)
                                @if(in_array($v->permission_id,$own_permissions))

                                    <label for=""><input type="checkbox" checked value="{{$v->permission_id}}" name="permission_id[]">{{$v->permission_name}}</label>
                                @else
                                    <label for=""><input type="checkbox"  value="{{$v->permission_id}}" name="permission_id[]">{{$v->permission_name}}</label>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <div class="mws-button-row">
                    <input value="授权" class="btn btn-success" type="submit">

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