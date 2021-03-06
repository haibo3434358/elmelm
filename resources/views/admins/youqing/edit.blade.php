@extends('layouts.admins')

@section('title','用户修改页')


@section('content')


    {{--@if (count($errors) > 0)--}}
        {{--<div class="mws-form-message error">--}}
            {{--<ul>--}}
                {{--@foreach ($errors->all() as $error)--}}
                    {{--<li style='list-style:none;font-size:17px'>{{ $error }}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--@endif--}}
    @if (count($errors) > 0)
        <div class="mws-form-message error">
            <ul>
                @if(is_object($errors))
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @else
                    <li>{{ session('errors') }}</li>
                @endif
            </ul>
        </div>
    @endif

    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-users"></i>友情链接修改</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="{{url('admins/youqing/'.$data->lid)}}" method="post" enctype ="multipart/form-data">
                <div class="mws-form-inline">
                    @foreach($res as $k=>$v)
                        <div class="mws-form-row">
                            <label class="mws-form-label">友情链接名:</label>
                            <div class="mws-form-item">
                                <input class="large" type="text" name='link_name' value='{{$v->link_name}}'>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">友情链接地址:</label>
                            <div class="mws-form-item">
                                <input class="large" type="text" name='l_url' value='{{$v->l_url}}'>
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