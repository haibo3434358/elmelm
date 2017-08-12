@extends('layouts.index')


@section('content')

    <div class="rt_content">
        <form action="/admin/cate/{{$datas->sxid}}" method="post" >
            <div class="page_title">
                <h2 class="fl">修改商家二级分类</h2>
            </div>
            @if(session('error'))
                <li>{{ session('error') }}</li>
            @endif
            <section>
                <ul class="ulColumn2">
                    <li>
                        <span style="width:120px;" class="item_name">商家详情id：</span>
                        <input type="text" class="textbox textbox_225" name="sxid" value="{{$datas->sxid}}">
                    </li>
                    <li>
                        <span style="width:120px;" class="item_name">商家名：</span>
                        <input type="text" class="textbox textbox_225" name="exname" value="{{$datas->exname}}">
                    </li>

                    <li>
                        <span style="width:120px;" class="item_name">分类名</span>
                        {{--<input type="text" class="textbox textbox_225"  name="cate_name">--}}
                        <select name="cate_name" class="select">
                            @foreach($cate_name as $k=>$v)

                                <option @if($datas->cate_name == $v) selected @endif>{{$v}}</option>

                            @endforeach
                        </select>

                    </li>
                    <li>
                        <span class="item_name" style="width:120px;"></span>
                        <input type="submit" value="提交" class="link_btn" >
                    </li>
                    {{ csrf_field()}}
                    {{ method_field('put') }}
                </ul>
            </section>
        </form>
    </div>


@endsection