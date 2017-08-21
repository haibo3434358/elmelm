@extends('layouts.gerenzhongxin')
@section('content')
        {{--//框框--}}
        <div class="profile-panel" role="main">
            <!-- ngIf: pageTitleVisible -->
            <h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope">
                        <span ng-bind="pageTitle" class="ng-binding">
                            我的优惠券
                        </span>
                <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted">
                        </span>
            </h3>
            <!-- end ngIf: pageTitleVisible -->
            <div class="profile-panelcontent" ng-transclude="">

                <div class="loading ng-binding ng-isolate-scope ng-hide" loading="" content="正在载入安全信息..."
                     ng-show="securityLoading">
                    <!-- ngIf: type==='profile' -->
                    <img ng-if="type===&#39;profile&#39;" src="./个人中心_安全中心 _ 饿了么网上订餐_files/profile-loading.4984fa.gif"
                         alt="正在加载" class="ng-scope">
                    <!-- end ngIf: type==='profile' -->
                    <!-- ngIf: type==='normal' -->
                    正在载入安全信息...
                </div>
                <!-- ngRepeat: item in securityType -->
                <div class="security-type ng-scope" ng-repeat="item in securityType">
                            <span class="child security-type-icon">
                                <i ng-class="item.status ? &#39;security-type-icon-ok icon-dot-check&#39; : &#39;security-type-icon-warn icon-dot-warning&#39;"
                                   class="security-type-icon-warn icon-dot-warning">
                                </i>
                            </span>
                    <span class="child security-type-name ng-binding security-type-name-weak"
                          ng-class="item.status || &#39;security-type-name-weak&#39;" ng-bind="item.name">
                                优惠券个数
                            </span>
                    <div class="child security-type-tip">
                        <p ng-bind="item.text.text" class="ng-binding">
                            {{$sum}}
                        </p>

                    </div>

                </div>
                <!-- end ngRepeat: item in securityType -->
                <div class="security-type ng-scope" ng-repeat="item in securityType">
                            <span class="child security-type-icon">
                                <i ng-class="item.status ? &#39;security-type-icon-ok icon-dot-check&#39; : &#39;security-type-icon-warn icon-dot-warning&#39;"
                                   class="security-type-icon-ok icon-dot-check">
                                </i>
                            </span>
                    <span style="" class="child security-type-name ng-binding" ng-class="item.status || &#39;security-type-name-weak&#39;"
                          ng-bind="item.name">
                                优惠券金额
                            </span>


                    <div class="child security-type-tip">
                        <p ng-bind="item.text.text" class="ng-binding">
                            {{$money}}
                        </p>
                        <!-- ngIf: item.text.textMore -->
                    </div>

                </div>
                <!-- end ngRepeat: item in securityType -->
                <div class="security-type ng-scope" ng-repeat="item in securityType">
                            <span class="child security-type-icon">
                                <i ng-class="item.status ? &#39;security-type-icon-ok icon-dot-check&#39; : &#39;security-type-icon-warn icon-dot-warning&#39;"
                                   class="security-type-icon-warn icon-dot-warning">
                                </i>
                            </span>
                    <span class="child security-type-name ng-binding security-type-name-weak"
                          ng-class="item.status || &#39;security-type-name-weak&#39;" ng-bind="item.name">
                                优惠券图片
                            </span>
                    <div class="child security-type-tip">
                        <p ng-bind="item.text.text" class="ng-binding" style="width:600px;height:200px">
                            @if($sum ==  1)
                                <img src="{{$pic}}" alt="" style="width:200px;">
                                @else
                                    @foreach($pic as $k=>$v)
                                     <img src="{{$v}}" alt="" style="width:200px;padding-top:30px;">
                                    @endforeach
                                @endif
                        </p>

                    </div>

                </div>

            </div>
        </div>
   @endsection