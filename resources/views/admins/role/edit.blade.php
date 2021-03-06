@extends('layouts.admins')

@section('title','角色修改页')


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
    @if(session('msg'))
        <div class="mark">
            <ul>
                <li>{{ session('msg') }}</li>
            </ul>
        </div>
    @endif

    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-users"></i>角色修改</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="{{url('admins/role/'.$data->rid)}}" method="post" enctype ="multipart/form-data">
                <div class="mws-form-inline">


                        <div class="mws-form-row">
                            <label class="mws-form-label">角色名称:</label>
                            <div class="mws-form-item">
                                <input class="large" type="text" name='rname' value='{{$data->rname}} '>
                            </div>
                        </div>


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