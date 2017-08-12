@extends('layouts.admins')

@section('title','用户添加角色页')


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
            <span><i class="icon-users"></i>用户添加角色</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="{{url('admins/admin/doauth')}}" method="post" enctype ="multipart/form-data">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">当前用户:</label>
                        <div class="mws-form-item">
                            <input type="hidden" name="aid" value="{{$user->aid}}">
                            {{$user->aname}}
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">所有的角色:</label>
                        <div class="mws-form-item">
                            @foreach($roles as $k=>$v)
                                @if(in_array($v->rid,$own_roles))
                                    <label for=""><input type="checkbox" checked value="{{$v->rid}}" name="rid[]">{{$v->rname}}</label>
                                @else
                                    <label for=""><input type="checkbox"  value="{{$v->rid}}" name="rid[]">{{$v->rname}}</label>
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