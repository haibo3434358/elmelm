@extends('layouts.gerenzhongxin')
@section('content')
    <div role="main" class="profile-panel">
        <!-- ngIf: pageTitleVisible -->
        <h3 class="profile-paneltitle ng-scope" ng-if="pageTitleVisible">
                        <span class="ng-binding" ng-bind="pageTitle">
                            个人资料
                        </span>
            <span ng-bind-html="pageSubtitle | toTrusted" class="subtitle ng-binding">
                        </span>
        </h3>
        <!-- end ngIf: pageTitleVisible -->
        <div ng-transclude="" class="profile-panelcontent">
            @if (count($errors) > 0)
                <div class="mws-form-message error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style='list-style:none;font-size:17px'>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                @if(session('error'))
                <li >{{ session('error') }}</li>
                @endif
                <style>
                    .textbox {
                        border: 1px solid #139667;
                        font-size: 12px;
                        height: 26px;
                        line-height: 26px;
                        padding: 5px;
                        vertical-align: middle;
                        margin:10px;
                    }
                    .item_name {
                        display: inline-block;
                        text-align: right;
                    }
                </style>
            <form action="{{url('home/doziliao')}}" enctype="multipart/form-data" method="post">
                <ul class="ulColumn2">
                    {{csrf_field()}}
                    <li>
                        <span class="item_name" style="width:120px;">用户名：</span>
                        <input  type="text" class="textbox textbox_295"  name="uname" value="{{$user->uname}}" />
                        <span class="errorTips">6-12位</span>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">电话号：</span>
                        <input type="text" class="textbox" name="phone" value="{{$user->phone}}" />
                    </li>
                    <li>
                        <span  style="width:120px;margin-left:65px">生&nbsp;&nbsp;&nbsp;日：</span>
                        {{--<input type="date" class="textbox" name="birth"  />--}}
                        <input type="date" name="birth" class="tcal textbox" value="{{$user->birth}}" />
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">头&nbsp;&nbsp;&nbsp;像：</span>
                        <input type="file"  name="uface" />
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">性&nbsp;&nbsp;&nbsp;别：</span>
                        <input type="radio" class="textbox" name="sex" value="女"  @if($user->sex == '女') checked @endif>女
                        <input type="radio" class="textbox" name="sex" value="男" @if($user->sex == '男') checked @endif >男

                    </li>
                    <li>
                        <span class="item_name" style="width:120px;"></span>
                        <input type="submit" class="link_btn" value="修改个人资料"/>
                    </li>
                </ul>
                <input type="hidden" name="uid" value="{{$user->uid}}">
            </form>


    </div>

    @endsection