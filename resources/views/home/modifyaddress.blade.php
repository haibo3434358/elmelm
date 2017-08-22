@extends('layouts.gerenzhongxin')
@section('content')
    <div class="profile-panel" role="main">
        <!-- ngIf: pageTitleVisible -->
        <h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope">
                        <span ng-bind="pageTitle" class="ng-binding">
                            地址管理
                        </span>
            <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted">
                        </span>
        </h3>
        <!-- end ngIf: pageTitleVisible -->
        <div class="profile-panelcontent" ng-transclude="">

            @if(session('error'))
                <li >{{ session('error') }}</li>
            @endif
            <form class="form-horizontal" action="/home/domodifyaddress" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">收件人</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputEmail3" name="mname" value="{{$data->mname}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">收货地址</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputPassword3" name="addr_xq" value="{{$data->addr_xq}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">电话号码</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputPassword3" name="mphone" value="{{$data->mphone}}" >
                    </div>
                </div>
                <input type="hidden" name="addid" value="{{$data->addid}}">

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default"> 修改地址</button>
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection