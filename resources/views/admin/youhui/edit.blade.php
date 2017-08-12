@extends('layouts.index')


@section('content')

    <div class="rt_content">
        <form action="/admin/youhui/{{$data->yhid}}" method="post"  enctype="multipart/form-data">
            <div class="page_title">
                <h2 class="fl">修改优惠券</h2>
            </div>
            @if (count($errors) > 0)
                <div class="mws-form-message error" >
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="list-style:none;font-size:17px">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('error'))
                <li>{{ session('error') }}</li>
            @endif
            <section>
                <ul class="ulColumn2">
                    <li>
                        <span style="width:120px;" class="item_name">优惠券名：</span>
                        <input type="text" class="textbox textbox_225" name="yhname" value="{{$data->yhname}}">
                    </li>

                    <li>
                        <span style="width:120px;" class="item_name">优惠券面值:</span>
                        <input type="text" class="textbox textbox_225"  name="yhvalue" value="{{$data->yhvalue}}">
                    </li>
                    <li>
                        <span style="width:120px;" class="item_name">优惠券图片:</span>
                        <img src="{{$data->yhpic}}" alt="" style="width:100px;">
                        <input type="file" name="yhpic[]" >
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;"></span>
                        <input type="submit" value="提交" class="link_btn" >
                    </li>
                    {{ csrf_field()}}
                    {{method_field('put')}}
                </ul>
            </section>
        </form>
    </div>


@endsection