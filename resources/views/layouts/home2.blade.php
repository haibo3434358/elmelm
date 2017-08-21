<!doctype html>
<html ng-app="eleme" perf-error="desktop/">

<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta dynamic-meta name="mobile-agent" content="format=html5; url=http://m.ele.me/place/" />
    <title ng-bind="SEO.title">饿了么-网上订餐_外卖_饿了么订餐官网</title>
    <meta dynamic-meta name="description" content="饿了么是中国专业的网上订餐平台，目前已覆盖北京、上海、杭州、广州等300多个城市，提供各类中式、日式、韩式、西式、下午茶、夜宵等优质美食，并提供送餐上门服务，让订餐更加轻松，叫外卖就上饿了么！">
    <meta dynamic-meta name="keywords" content="饿了么，网上订餐，外卖，快餐外卖，外卖网">
    <meta name="format-detection" content="telephone=no, email=no" />
    <meta name="application-name" content="饿了么网上订餐" />
    <meta name="msapplication-tooltip" content="饿了么网上订餐" />
    <meta name="msapplication-starturl" content="./" />
    <meta name="msapplication-tileimage" content="=http://static11.elemecdn.com/apple-touch-icon.png?v=2" />
    <meta name="msapplication-tilecolor" content="#0088ff" />
    <meta name="msapplication-task" content="name=切换地区;action-uri=http://ele.me/home;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2" />
    <meta name="msapplication-task" content="name=我要订餐;action-uri=http://ele.me?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2" />
    <meta name="msapplication-task" content="name=订单中心;action-uri=http://ele.me/profile?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2" />
    <meta name="msapplication-task" content="name=寻求帮助（HELP）;action-uri=http://ele.me/support?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2" />
    <meta property="qc:admins" content="2263606250655" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon-precomposed" href="https://static2.ele.me/apple-touch-icon.png?v=2" />
    <link rel="shortcut icon" href="//static2.ele.me/eleme/desktop/media/img/favicon-16x16.png" type="image/png" />
    <link rel="icon" href="//static2.ele.me/eleme/desktop/media/img/favicon-16x16.png" type="image/png" sizes="16x16" />
    <link rel="icon" href="//static2.ele.me/eleme/desktop/media/img/favicon-32x32.png" type="image/png" sizes="32x32" />
    <link rel="icon" href="//static2.ele.me/eleme/desktop/media/img/favicon.png" type="image/png" sizes="96x96" />
    <link href="/home/css/vendor.d724a8_2.css" rel="stylesheet">
    <link href="/home/css/main.0a7669.css" rel="stylesheet">
    <!--[if lte IE 8]><script>window.location.href='https://h.ele.me/activities/landing';</script><![endif]-->
    <script src="/home/js/69e30c57868b46e7a0d2b4a6c711970a.js" data-ref="API_CONFIG"></script>
    <script src="/home/js/perf.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/vendor.8c3a5a.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/main.a0cd82.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/6936dbf3e7d94cffa954bcbcf2b79f38.js"></script>
    <script src="/home/js/jquery-1.8.3.min.js"></script>
</head>

<body cute-title ng-class="{hidesidebar: layoutState && layoutState.hideSidebar, smallbody: layoutState.smallBody, whitebody: layoutState.whiteBody}">
<!-- <eleme-topbar state="layoutState"></eleme-topbar> -->
<div class="ng-isolate-scope" ng-switch="state.type" state="layoutState">
    <div class="ng-scope ng-isolate-scope" ng-switch-default="" topbar-default="" state="state">
        <header class="topbar" role="navigation" ng-class="{shoptopbar: state.type === 'shop'}">
            <div class="container clearfix">
                <h1>
                    <a class="topbar-logo icon-logo" href="/" hardjump="">
                        <span>饿了么</span>
                    </a>
                </h1>
                <a class="topbar-item topbar-homepage focus" href="/" hardjump="">首页</a>
                <a class="topbar-item" href="/profile/order" hardjump="" ng-class="{'focus': $root.locationpath[1] === 'order'}">我的订单</a>
                <a class="topbar-item cooperation" href="//h5.ele.me/service/cooperation/" target="_blank">加盟合作</a>
                <nav class="topbar-nav">
                    <a class="topbar-nav-link" href="/support/center" hardjump="" target="_blank">
                        <i class="topbar-nav-icon icon-service"></i> 服务中心
                    </a>
                    <a class="topbar-nav-link" href="/support/rules/default" hardjump="" target="_blank">规则中心</a>
                    <div class="topbar-nav-link">
                        <i class="topbar-nav-icon icon-mobile"></i> 手机应用
                        <div class="dropbox topbar-mobile-dropbox">
                            <span>扫一扫, 手机订餐更方便</span>
                            <img class="topbar-nav-qrcode" src="/home/img/appqc.95e532.png" alt="扫一扫下载饿了么手机 App">
                        </div>
                    </div>
                    <div topbar-profilebox="">
                        <div class="topbar-profilebox">
                            <span class="topbar-profilebox-avatar icon-profile" ng-show="!$root.user.username"></span>
                            <span class="" ng-show="!$root.user.username">
<a ng-href="//h5.ele.me//login/#redirect=https%3A%2F%2Fwww.ele.me%2F" target="_blank" href="//h5.ele.me//login/#redirect=https%3A%2F%2Fwww.ele.me%2F">登录/注册</a>
</span>
                            <span class="topbar-profilebox-wrapper ng-hide" ng-show="$root.user.username">
<span class="topbar-profilebox-username ng-binding"></span>
                                <span class="topbar-profilebox-btn icon-arrow-down ng-scope" ng-if="$root.topbarType !== 'checkout'"></span>
                                <div class="dropbox topbar-profilebox-dropbox">
                                    <a class="icon-profile" href="/profile" hardjump="">个人中心</a>
                                    <a class="icon-star" href="/profile/favor" hardjump="">我的收藏</a>
                                    <a class="icon-location" href="/profile/address" hardjump="">我的地址</a>
                                    <a class="icon-setting" href="/profile/security" hardjump="">安全设置</a>
                                    <a class="icon-logout" href="JavaScript:" ng-click="logout()">退出登录</a>
                                </div>
                                </span>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>
</div>
<div class="importantnotification container" role="banner"></div>
<!-- <eleme-importantnotification></eleme-importantnotification> -->
<div class="sidebar" role="complementary" ng-hide="layoutState && layoutState.hideSidebar">
    <div class="sidebar-tabs">
        <div class="toolbar-tabs-middle">
            <a class="toolbar-btn icon-order toolbar-close" href="/profile/order" hardjump="" tooltip="我的订单" tooltip-placement="left" ubt-click="toolbar_order"></a>
            <div class="toolbar-separator"></div>
            <a class="toolbar-cartbtn icon-cart toolbar-open" href="JavaScript:" template="cart" ng-class="{'focus': (activeTemplate === 'cart' && isSidebarOpen), 'toolbar-cartbtn-shownum': foodCount.count}" ubt-click="390">购物车</a>
            <div class="toolbar-separator"></div>
            <a class="toolbar-btn icon-notice toolbar-open modal-hide" href="JavaScript:" template="message" ng-class="{'focus': (activeTemplate === 'message' && isSidebarOpen), 'toolbar-open': user, 'modal-hide': user}" tooltip="我的信息" tooltip-placement="left" ubt-click="392"></a>
        </div>
        <div class="toolbar-tabs-bottom">
            <div class="toolbar-btn icon-QR-code">
                <div class="dropbox toolbar-tabs-dropbox">
                    <a href="http://static11.elemecdn.com/eleme/desktop/mobile/index.html" target="_blank">
                        <img src="/home/img/appqc.95e532.png" alt="下载手机应用">
                        <p>下载手机应用</p>
                        <p class="icon-QR-code-bonus">即可参加分享红包活动</p>
                    </a>
                </div>
            </div>
            <a id="live800iconlink" class="toolbar-btn icon-service" online-service="" tooltip="在线客服" title="在线客服" tooltip-placement="left" target="_blank" href="JavaScript:" style="visibility: hidden;"></a>
            <a class="toolbar-btn sidebar-btn-backtop icon-top" tooltip="回到顶部" title="回到顶部" href="JavaScript:" tooltip-placement="left" style="visibility: hidden;"></a>
        </div>
    </div>
    <div class="sidebar-content"></div>
</div>

<!-- <eleme-sidebar ng-hide="layoutState && layoutState.hideSidebar"></eleme-sidebar> -->
<!-- <div ng-view role="main"></div> -->
<!-- 地址栏 -->
<div class="container clearfix ng-scope">
    <!-- <div class="location" ng-style="{visibility: geohash ? '' : 'hidden'}" role="navigation" location="" ng-if="geohash"> -->
    <span>当前位置:</span>

    <!-- <span class="location-current">
            <a class="inherit ng-binding" ng-href="/place/wx4eyv2e1qf" ubt-click="401" ng-bind="place.name || place.address" href="/place/wx4eyv2e1qf">昌平区回龙观村东区(龙域中街南70米)</a>
        </span>
        <span class="location-change" ng-class="{ 'location-hashistory': user.username && userPlaces && userPlaces.length > 0 }">
            <a ng-href="/home" ubt-click="400" hardjump="" href="/home">[切换地址]</a>
            <ul class="dropbox location-dropbox" ubt-visit="398">
                <li class="arrow"></li>
                <li class="changelocation">
                    <a ng-href="/home" hardjump="" href="/home">
                        修改收货地址
                        <span class="icon-location"></span>
                    </a>
                </li>
            </ul>
        </span>
        <span ng-transclude="">
            <i class="icon-arrow-right ng-scope"></i>
            <span class="ng-scope">服务中心</span>
        </span>-->
</div>
@section('content')

    @show
<footer class="footer" role="contentinfo">
<div class="container clearfix">
    <div class="footer-link">
        <h3 class="footer-link-title">用户帮助</h3>
        <a target="_blank" href="/support/center" class="footer-link-item">服务中心</a>
        <a target="_blank" href="/support/question/default" class="footer-link-item">常见问题</a>
        <a style="visibility: hidden;" href="javascript:" online-service="" class="footer-link-item">在线客服</a>
    </div>
    <div class="footer-link">
        <h3 class="footer-link-title">商务合作</h3>
        <a target="_blank" href="//kaidian.ele.me" class="footer-link-item">我要开店</a>
        <a target="_blank" href="/support/about/jiameng" class="footer-link-item">加盟指南</a>
        <a target="_blank" href="/support/about/contact" class="footer-link-item">市场合作</a>
        <a target="_blank" href="http://openapi.eleme.io/" class="footer-link-item">开放平台</a>
    </div>
    <div class="footer-link">
        <h3 class="footer-link-title">关于我们</h3>
        <a target="_blank" href="/support/about" class="footer-link-item">饿了么介绍</a>
        <a target="_blank" href="http://jobs.ele.me/" class="footer-link-item">加入我们</a>
        <a target="_blank" href="/support/about/contact" class="footer-link-item">联系我们</a>
        <a target="_blank" href="/support/rules/default" class="footer-link-item">规则中心</a>
    </div>
    <div class="footer-contect">
        <div class="footer-contect-item">
            24小时客服热线 :
            <a href="tel:10105757" class="inherit">10105757</a>
        </div>
        <div class="footer-contect-item">
            意见反馈 :
            <a href="mailto:feedback@ele.me" class="inherit">feedback@ele.me</a>
        </div>
        <div class="footer-contect-item">
            关注我们 :
            <div ubt-click="402" href="JavaScript:" class="icon-wechat">
                <div ubt-visit="402" class="dropbox dropbox-bottom footer-contect-dropbox">
                    <img alt="微信号: elemeorder" src="/home/img/wexinqc100@2x.393ade.png">
                    <p>微信号: elemeorder</p>
                    <p>饿了么网上订餐</p>
                </div>
            </div>
            <a target="_blank" href="http://e.weibo.com/elemeorder" class="icon-weibo"></a>
        </div>
    </div>
    <div class="footer-mobile">
        <a target="_blank" href="https://h.ele.me/landing">
            <img alt="扫一扫下载饿了么手机 App" src="/home/img/appqc.95e532.png" class="footer-mobile-icon">
        </a>
        <div class="footer-mobile-content">
            <h3>下载手机版</h3>
            <p>扫一扫,手机订餐方便</p>
        </div>
    </div>
    <div class="footer-copyright serif">
        <h5 class="owner">所有方：上海拉扎斯信息科技有限公司</h5>
        <p>
            增值电信业务许可证 :
            <a target="_blank" href="http://www.shca.gov.cn/">沪B2-20150033</a> |
            <a target="_blank" href="http://www.miibeian.gov.cn/">沪ICP备 09007032</a> |
            <a target="_blank" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823">上海工商行政管理</a> Copyright &copy;2008-2017 ele.me, All Rights Reserved.
        </p>
    </div>
    <div class="footer-police container">
        <a target="_blank" rel="nofollow" href="http://www.zx110.org/picp/?sn=310100103568">
            <img height="30" src="/home/img/picp_bg.e373b3.jpg" alt="已通过沪公网备案，备案号 310100103568">
        </a>
    </div>
</div>
</footer>


</body>

</html>
