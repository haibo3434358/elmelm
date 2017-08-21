@extends('layouts.gerenzhongxin')
@section('content')
    <div role="main" class="profile-panel">
        <!-- ngIf: pageTitleVisible -->
        <h3 class="profile-paneltitle ng-scope" ng-if="pageTitleVisible">
                        <span class="ng-binding" ng-bind="pageTitle">
                            地址管理
                        </span>
            <span ng-bind-html="pageSubtitle | toTrusted" class="subtitle ng-binding">
                        </span>
        </h3>
        <!-- end ngIf: pageTitleVisible -->
        <div ng-transclude="" class="profile-panelcontent">
            <div ng-show="addressLoading" content="正在载入地址..." loading="" class="loading ng-binding ng-isolate-scope ng-hide">
                <!-- ngIf: type==='profile' -->
                <img class="ng-scope" alt="正在加载" src="./个人中心_地址管理 _ 饿了么网上订餐_files/profile-loading.4984fa.gif" ng-if="type==='profile'">
                <!-- end ngIf: type==='profile' -->
                <!-- ngIf: type==='normal' -->
                正在载入地址...
            </div>
            <div ng-hide="addressLoading" class="desktop-addresslist clearfix ng-scope">
                <!-- ngRepeat: address in userAddresses -->
                @foreach($data as $k=>$v)
                <div ng-repeat="address in userAddresses" class="desktop-addressblock ng-scope">
                    <div class="desktop-addressblock-buttons">
                        <button onclick="modify({{$v->addid}})"  class="desktop-addressblock-button">
                            修改
                        </button>
                        <button onclick="del({{$v->addid}})" class="desktop-addressblock-button">
                            删除
                        </button>
                    </div>
                    <div class="desktop-addressblock-name ng-binding">

                        <span class="ng-binding">
                                        {{$v->mname}}
                                    </span>
                    </div>
                    <div ng-bind="address.address + ' ' + address.address_detail" class="desktop-addressblock-address ng-binding">
                        {{$v->addr_xq}}
                    </div>
                    <div ng-bind="address.phone" class="desktop-addressblock-mobile ng-binding">
                        {{$v->mphone}}
                    </div>
                    <div ng-show="showMask" class="desktop-addressblock-mask ng-hide">
                    </div>
                </div>
                <!-- end ngRepeat: address in userAddresses -->
                @endforeach
                    <button onclick="addaddress()" ng-click="addAddress()" class="desktop-addressblock desktop-addressblock-addblock">
                    <i class="icon-plus">
                    </i>
                    <a  href="">添加新地址</a>

                </button>
            </div>
        </div>
    </div>
    <script>
        function addaddress() {

            location.href = "{{url('/home/addaddress')}}";
        }

        function modify(addid) {
//            alert(addid);

            location.href = "{{url('/home/modifyaddress')}}/"+addid;
        }
        function del(addid) {
            location.href = "{{url('/home/deladdress')}}/"+addid;
        }
    </script>

    @endsection