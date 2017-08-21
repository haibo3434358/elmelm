@extends('layouts.index')

@section('title','后台首页')


@section('content')
        <div class="rt_content">
            <div class="page_title">
                <h2 class="fl">商品详情示例</h2>
                <a class="fr top_rt_btn">返回产品列表</a>
            </div>
            @if (count($errors) > 0)
                <div class="mark">
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
            <section>
                <form action="{{url('admin/dingdan/'.$dd->dxid)}}" method="post">
                <ul class="ulColumn2">
                    {{--<input type="hidden" name="put">--}}
                    {{method_field('put')}}
                    <li>
                        <span class="item_name" style="width:120px;">收件人：</span>
                        <input type="text" class="textbox" value="{{$dd->sjr}}" name="sjr" placeholder="收件人姓名..."/>
                        {{--<span class="errorTips">错误提示信息...</span>--}}
                    </li>
                    {{csrf_field()}}
                    <li>
                        <span class="item_name" style="width:120px;">联系电话：</span>
                        <input type="text" class="textbox" value="{{$dd->phone}}" name="phone" placeholder="联系人电话..."/>
                        {{--<span class="errorTips">错误提示信息...</span>--}}
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">收件地址：</span>
                        <input type="text" class="textbox textbox_295" value="{{$dd->dprice}}" name="dprice"  placeholder="收件地址详情..."/>
                        {{--<span class="errorTips">错误提示信息...</span>--}}
                    </li>

                    <li>
                        <span class="item_name"  style="width:120px;">订单状态：</span>
                        <label class="single_selection"><input type="radio" @if($dd->dstatus == '付款'){ checked="checked"} @endif value="付款"  name="dstatus"/>付款</label>
                        <label class="single_selection"><input type="radio" @if($dd->dstatus == '配货'){ checked="checked"} @endif value="配货" name="dstatus"/>配货</label>
                        <label class="single_selection"><input type="radio" @if($dd->dstatus == '发货'){ checked="checked"} @endif value="发货" name="dstatus"/>发货</label>
                        <label class="single_selection"><input type="radio" @if($dd->dstatus == '确认收货'){ checked="checked"} @endif value="确认收货" name="dstatus"/>确认收货</label>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">订单价格：</span>
                        <input type="text" class="textbox" value="{{$dd->money}}" name="money" placeholder="订单价格..."/>
                        {{--<span class="errorTips">错误提示信息...</span>--}}
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">订单备注：</span>
                        <input type="text" class="textbox" value="{{$dd->dd}}" name="dd" placeholder="订单备注信息..."/>
                        {{--<span class="errorTips">错误提示信息...</span>--}}
                    </li>

                    <li>
                        <span class="item_name" style="width:120px;"></span>
                        <input type="submit" class="link_btn"/>
                    </li>
                </ul>
                </form>
            </section>
        </div>
@endsection
