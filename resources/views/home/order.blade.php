@extends('layouts.gerenzhongxin')
@section('content')
    <div role="main" class="profile-panel">
        <!-- ngIf: pageTitleVisible -->
        <h3 class="profile-paneltitle ng-scope" ng-if="pageTitleVisible">
                        <span class="ng-binding" ng-bind="pageTitle">
                            最近的订单
                        </span>
            <span ng-bind-html="pageSubtitle | toTrusted" class="subtitle ng-binding">
                        </span>
        </h3>
        <!-- end ngIf: pageTitleVisible -->
        <div ng-transclude="" class="profile-panelcontent">
            <table  ng-show="orderList.length" class="order-list ng-scope " >
                <thead >
                <tr style="height:40px;">
                    <th style="font-size:16px">
                        订单号
                    </th>
                    <th style="font-size:16px">
                        下单时间
                    </th>
                    <th style="font-size:16px">
                        图片
                    </th>
                    <th style="font-size:16px">
                        支付金额（元）
                    </th>
                    <th style="font-size:16px">
                        收件人
                    </th>
                    <th style="font-size:16px">
                        收货地址
                    </th>
                    <th style="font-size:16px">
                        状态
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $k=>$v)
                <tr style="height:40px;">
                    <td style="font-size:16px">{{$v->ddh}}</td>
                    <td style="font-size:16px">{{$v->xdtime}}</td>
                    <td style="font-size:16px">{{$v->dpic}}</td>
                    <td style="font-size:16px">{{$v->money}}</td>
                    <td style="font-size:16px">{{$v->sjr}}</td>
                    <td style="font-size:16px">{{$v->dprice}}</td>
                    <td style="font-size:16px">{{$v->dstatus}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="ng-scope pagination" pagination-onchange="onOrderPageChange()" pagination-context="pageContext" pagination="order">
                <ul>
                </ul>
            </div>
        </div>
    </div>
    @endsection