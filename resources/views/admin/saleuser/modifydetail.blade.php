@extends('layouts.index')

@section('title','后台首页')


@section('content')

    <div class="rt_content">
        <form action="/admin/domodifydetail" method="post" enctype="multipart/form-data" >
            <div class="page_title">
                <h2 class="fl">修改商家详情</h2>
            </div>
            @if(session('error'))
                <li>{{ session('error') }}</li>
            @endif
            <section>
                <ul class="ulColumn2">
                    <li>
                        <span style="width:120px;" class="item_name">联系人：</span>
                        <input type="text" class="textbox textbox_225" name="contacts" value="{{$data->contacts}}">
                    </li>
                    <li>
                        <span style="width:120px;" class="item_name">商家电话：</span>
                        <input type="text" class="textbox textbox_225" name="exphone" value="{{$data->exphone}}">
                    </li>
                    <input type="hidden" name="sid" value="{{$data->sid}}">
                    <li>
                        <span style="width:120px;" class="item_name">门店照片：</span>
                        <input type="file"  name="eximage" value="{{$data->eximage}}">
                        <img src="{{$data->eximage}}" alt="" style="width:50px">
                    </li>
                    <li>
                        <span style="width:120px;" class="item_name">营业执照：</span>
                        <input type="file"  name="licence1" value="{{$data->licence1}}">
                        <img src="{{$data->licence1}}" alt="" style="width:50px">
                    </li>
                    <li>
                        <span style="width:120px;" class="item_name">餐饮服务许可：</span>
                        <input type="file"  name="licence2" value="{{$data->licence2}}">
                        <img src="{{$data->licence2}}" alt="" style="width:50px">
                    </li>
                    <li>
                        <span style="width:120px;" class="item_name">商家logo：</span>
                        <input type="file"  name="slogo" value="{{$data->slogo}}">
                        <img src="{{$data->slogo}}" alt="" style="width:50px">
                    </li>
                    <li>
                        <span style="width:120px;" class="item_name">开始营业时间：</span>
                        <input type="text" class="textbox textbox_225" name="stime" value="{{$data->stime}}">
                    </li>
                    <li>
                        <span style="width:120px;" class="item_name">结束营业时间：</span>
                        <input type="text" class="textbox textbox_225" name="etime" value="{{$data->etime}}">
                    </li>
                    <li>
                        <span style="width:120px;" class="item_name">商家配送费：</span>
                        <input type="text" class="textbox textbox_225" name="ofee" value="{{$data->ofee}}">
                    </li>
                    <li>
                        <span style="width:120px;" class="item_name">商家起送费：</span>
                        <input type="text" class="textbox textbox_225" name="odelfee" value="{{$data->odelfee}}">
                    </li>

                    <li>
                        <span class="item_name" style="width:120px;"></span>
                        <input type="submit" value="提交" class="link_btn" >
                    </li>

                    {{ csrf_field()}}
                </ul>
            </section>
        </form>
    </div>





@endsection