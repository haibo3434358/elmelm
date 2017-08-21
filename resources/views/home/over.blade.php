@extends('layouts.home')
@section('a','订单完成页')
@section('content')
    <div style="float:left">
        <img src="/home/image/peoplexiao.jpg" alt="" style="width:480px">
    </div>

    <div style="width:400px;height:160px;margin-top:160px;margin-left:500px">
        <ul style="float:left;font-size:24px">
            <li>订单号</li>
            <li>收货人</li>
            <li>订单金额</li>
            <li>收货地址</li>
        </ul>
        <ul style="float:right;font-size:24px">
            <li>{{$data->ddh}}</li>
            <li>{{$data->sjr}}</li>
            <li>{{$data->money}}元</li>
            <li>{{$data->dprice}}</li>
        </ul>
    </div>
    <div style="width:1000px;height:400px;margin-left:250px;font-size:24px"">

        您的订单会马上送到您的手中,敬请等待!
    </div>

    @endsection