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
            <div class="loading ng-binding ng-isolate-scope ng-hide" loading="" content="正在载入地址..." ng-show="addressLoading">
                <!-- ngIf: type==='profile' -->
                <img ng-if="type==='profile'" src="./个人中心_地址管理 _ 饿了么网上订餐_files/profile-loading.4984fa.gif" alt="正在加载" class="ng-scope">
                <!-- end ngIf: type==='profile' -->
                <!-- ngIf: type==='normal' -->
                正在载入地址...
            </div>

            @if(session('error'))
                <li >{{ session('error') }}</li>
            @endif
            <form class="form-horizontal" action="/home/saveaddress" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">收件人</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputEmail3" name="mname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">收货地址</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputPassword3" name="addr_xq" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">电话号码</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputPassword3" name="mphone" >
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default"> 增加地址</button>
                    </div>
                </div>
            </form>


        </div>
    </div>
    @endsection