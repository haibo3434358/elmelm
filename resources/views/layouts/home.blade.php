﻿<!doctype html>
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
    <link href="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/css/vendor.d724a8_2.css" rel="stylesheet">
    <link href="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/css/main.0a7669.css" rel="stylesheet">
    <!--[if lte IE 8]><script>window.location.href='https://h.ele.me/activities/landing';</script><![endif]-->
    <script src="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/js/69e30c57868b46e7a0d2b4a6c711970a.js" data-ref="API_CONFIG"></script>
    <script src="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/js/perf.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/js/vendor.8c3a5a.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/js/main.a0cd82.js" type="text/javascript" crossorigin="anonymous"></script>
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
                        <a class="topbar-nav-link" href="/support/rules/default" hardjump="" target="_blank">规1111111心</a>
                        <div class="topbar-nav-link">
                            <i class="topbar-nav-icon icon-mobile"></i>2222
                            <div class="dropbox topbar-mobile-dropbox">
                                <span>扫一扫, 手机订餐更方便</span>
                                <img class="topbar-nav-qrcode" src="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/img/appqc.95e532.png" alt="扫一扫下载饿了么手机 App">
                            </div>
                        </div>
                        <div topbar-profilebox="">
                            <div class="topbar-profilebox">
                                <span class="topbar-profilebox-avatar icon-profile" ng-show="!$root.user.username"></span>
                                <span class="" ng-show="!$root.user.username">
<a ng-href="//h5.ele.me//login/#redirect=https%3A%2F%2Fwww.ele.me%2F" target="_blank" href="//h5.ele.me//login/#redirect=https%3A%2F%2Fwww.ele.me%2F">11111</a>
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
                            <img src="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/img/appqc.95e532.png" alt="下载手机应用">
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
    </div>
    <div class="container ng-scope" ng-show="!recentBoughtOnly">
        <div class="excavator container">
            <div class="excavator-filter ng-scope">
                <span>商家分类:</span>
                <a class="excavator-filter-item ng-binding ng-scope active" href="javascript:">全部商家</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:">美食</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:">快餐便当</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">特色菜系</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">异国料理</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">小吃夜宵</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">甜品饮品</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">果蔬生鲜</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">商店超市</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">早餐</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">正餐优选</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">下午茶</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">夜宵</a>
                <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">鲜花蛋糕</a>
                <div class="excavator-filter-subbox ng-hide" ng-show="subCategories"></div>
            </div>
        </div>
        <div class="place-rstbox clearfix">
            <div class="clearfix" data="filteredRestaurants = (rstStream.restaurants | filter: rstStream.filter | filter: otherFilter | orderBy: [ '-is_opening', rstStream.orderBy || 'index' ])" style="height: 1600px;">
                <a class="rstblock" href="/shop/152185819" data-rst-id="152185819" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/8/05/dff0f9f103bd59af10cf0ef3b6accpng.png?imageMogr2/thumbnail/70x70" alt="麻小外卖（上地店）" width="70" height="70">
                        <span>36 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">麻小外卖（上地店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:86%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售175单</span>
                        <div class="rstblock-cost">配送费¥20</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/1863189" data-rst-id="1863189" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/f/72/e71ae1f13f072841bf6b95867536apng.png?imageMogr2/thumbnail/70x70" alt="沙县小吃卓记黄焖鸡" width="70" height="70">
                        <span>36 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">沙县小吃卓记黄焖鸡</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:78%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售141单</span>
                        <div class="rstblock-cost">配送费¥6</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/156407866" data-rst-id="156407866" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/8/b4/ce7b7db8bc1864c6f5c716037a186jpeg.jpeg?imageMogr2/thumbnail/70x70" alt="望京小腰（西三旗店）" width="70" height="70">
                        <span>30 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">望京小腰（西三旗店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:0%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售1单</span>
                        <div class="rstblock-cost">配送费¥9</div>
                        <div class="rstblock-activity">
                            <i style="background:#E75959;">新</i>
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">保</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/150113809" data-rst-id="150113809" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/c/60/1223f3dd5e37ad4912b16de03580bpng.png?imageMogr2/thumbnail/70x70" alt="叮当快药(北京市回龙观)" width="70" height="70">
                        <span>39 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">叮当快药(北京市回龙观)</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:94%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售497单</span>
                        <div class="rstblock-cost">免配送费</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/26547" data-rst-id="26547" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/7/44/d4a8483f13bd84289ed1ff85bd21bpng.png?imageMogr2/thumbnail/70x70" alt="极速汉堡（极速食客）" width="70" height="70">
                        <span>38 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">极速汉堡（极速食客）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:92%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售6293单</span>
                        <div class="rstblock-cost">配送费¥36</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/894845" data-rst-id="894845" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/3/13/01df4cdbc4e412c6c9e21704303dbjpeg.jpeg?imageMogr2/thumbnail/70x70" alt="江依林烤串吧" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">江依林烤串吧</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:94%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售1076单</span>
                        <div class="rstblock-cost">配送费¥13</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/2031362" data-rst-id="2031362" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/d/e0/2b26b58acb1c4a4018323ba31c9f6jpeg.jpeg?imageMogr2/thumbnail/70x70" alt="快乐星汉堡（上庄店）" width="70" height="70">
                        <span>45 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">快乐星汉堡（上庄店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:88%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售441单</span>
                        <div class="rstblock-cost">配送费¥29</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/774508" data-rst-id="774508" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/4/61/ac96f50d5aa520980f2db54d57608jpeg.jpeg?imageMogr2/thumbnail/70x70" alt="夜来香烤翅吧" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">夜来香烤翅吧</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:94%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售337单</span>
                        <div class="rstblock-cost">配送费¥88</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/155291958" data-rst-id="155291958" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/a/f4/84b2d44fff5f0b10f8f79fb4c87e3png.png?imageMogr2/thumbnail/70x70" alt="蛙辣哇啦（苹果园店）" width="70" height="70">
                        <span>38 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">蛙辣哇啦（苹果园店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:90%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售232单</span>
                        <div class="rstblock-cost">配送费¥55</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/155779267" data-rst-id="155779267" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/8/05/90c048f89396d2542f7a7e9848a05jpeg.jpeg?imageMogr2/thumbnail/70x70" alt="小渔山" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">小渔山</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:84%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售11单</span>
                        <div class="rstblock-cost">配送费¥50</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/617230" data-rst-id="617230" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/0/d0/7caedd8e64e245c8a8237a5ea6db3png.png?imageMogr2/thumbnail/70x70" alt="哆啦A梦吃货店（西直门店）" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">哆啦A梦吃货店（西直门店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:70%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售46单</span>
                        <div class="rstblock-cost">配送费¥10</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/155127911" data-rst-id="155127911" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/1/b5/cf919e51dcc08849b9510767be23cjpeg.jpeg?imageMogr2/thumbnail/70x70" alt="若谷草堂（青年路店）" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">若谷草堂（青年路店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:100%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售90单</span>
                        <div class="rstblock-cost">免配送费</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/714542" data-rst-id="714542" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/0/10/85ddbadb82faec8da8dcce8d86b11png.png?imageMogr2/thumbnail/70x70" alt="老李囊坑烤羊排" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">老李囊坑烤羊排</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:98%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售278单</span>
                        <div class="rstblock-cost">配送费¥45</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/271908" data-rst-id="271908" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/f/2c/a00bf6cc2c74eb90099f3d51a8700jpeg.jpeg?imageMogr2/thumbnail/70x70" alt="光明超市" width="70" height="70">
                        <span>37 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">光明超市</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:92%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售2391单</span>
                        <div class="rstblock-cost">配送费¥50</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/910315" data-rst-id="910315" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/1/d4/06d438d4c1cea3186645d17e3d657jpeg.jpeg?imageMogr2/thumbnail/70x70" alt="香口鱼" width="70" height="70">
                        <span>42 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">香口鱼</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:78%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售114单</span>
                        <div class="rstblock-cost">配送费¥40</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/1910967" data-rst-id="1910967" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/3/01/5d409ee3170b3734ae2912a775a54png.png?imageMogr2/thumbnail/70x70" alt="蛙辣蛙啦" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">蛙辣蛙啦</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:100%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售271单</span>
                        <div class="rstblock-cost">配送费¥45</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/1305315" data-rst-id="1305315" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/c/9f/7b5db671d222ca3792e6cd2e27316png.png?imageMogr2/thumbnail/70x70" alt="呱呱叫馋嘴蛙" width="70" height="70">
                        <span>36 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">呱呱叫馋嘴蛙</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:84%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售131单</span>
                        <div class="rstblock-cost">配送费¥30</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/154371695" data-rst-id="154371695" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/c/8f/af842bffa841b4a98a6ac6a21312bpng.png?imageMogr2/thumbnail/70x70" alt="非尝不可小龙虾海鲜" width="70" height="70">
                        <span>38 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">非尝不可小龙虾海鲜</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:92%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售903单</span>
                        <div class="rstblock-cost">配送费¥60</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/1346489" data-rst-id="1346489" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/e/c6/6ac01b5619ad9fab6afba4585328bjpeg.jpeg?imageMogr2/thumbnail/70x70" alt="宽板凳老灶火锅" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">宽板凳老灶火锅</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:84%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售157单</span>
                        <div class="rstblock-cost">配送费¥70</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/154885119" data-rst-id="154885119" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/8/bc/adaec8aed92d884e729ef3e1d19f2png.png?imageMogr2/thumbnail/70x70" alt="嘉陵楼馋嘴城（簋街店）" width="70" height="70">
                        <span>38 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">嘉陵楼馋嘴城（簋街店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:94%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售117单</span>
                        <div class="rstblock-cost">配送费¥46</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/609562" data-rst-id="609562" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/c/c5/338e183a86d3dbaadbb67794d4cbejpeg.jpeg?imageMogr2/thumbnail/70x70" alt="独门冲小龙虾" width="70" height="70">
                        <span>44 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">独门冲小龙虾</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:92%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售72单</span>
                        <div class="rstblock-cost">配送费¥40</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/910226" data-rst-id="910226" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/c/88/85ab8a34b94f8a717fcd448b323dbjpeg.jpeg?imageMogr2/thumbnail/70x70" alt="簋街红鬼龙虾" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">簋街红鬼龙虾</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:72%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售49单</span>
                        <div class="rstblock-cost">配送费¥50</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/1908765" data-rst-id="1908765" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/2/a3/9ae7f1a36ab32684d44ff6aa70c64png.png?imageMogr2/thumbnail/70x70" alt="帝王鸡" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">帝王鸡</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:82%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售77单</span>
                        <div class="rstblock-cost">配送费¥55</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/2077146" data-rst-id="2077146" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/0/aa/31408745fd0e03c57e01eac244a6apng.png?imageMogr2/thumbnail/70x70" alt="阿里烧烤私房菜" width="70" height="70">
                        <span>29 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">阿里烧烤私房菜</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:96%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售74单</span>
                        <div class="rstblock-cost">配送费¥39</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/150974975" data-rst-id="150974975" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/d/61/47c6503a9582885720ace4eaa404cpng.png?imageMogr2/thumbnail/70x70" alt="楼下有虾（总店）" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">楼下有虾（总店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:94%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售58单</span>
                        <div class="rstblock-cost">配送费¥60</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/412537" data-rst-id="412537" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/e/97/7714c0f74738f7c20fc590083cb6cjpeg.jpeg?imageMogr2/thumbnail/70x70" alt="秘制家小龙虾" width="70" height="70">
                        <span>33 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">秘制家小龙虾</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:92%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售79单</span>
                        <div class="rstblock-cost">免配送费</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/617230" data-rst-id="617230" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/0/d0/7caedd8e64e245c8a8237a5ea6db3png.png?imageMogr2/thumbnail/70x70" alt="哆啦A梦吃货店（西直门店）" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">哆啦A梦吃货店（西直门店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:70%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售46单</span>
                        <div class="rstblock-cost">配送费¥10</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/609562" data-rst-id="609562" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/c/c5/338e183a86d3dbaadbb67794d4cbejpeg.jpeg?imageMogr2/thumbnail/70x70" alt="独门冲小龙虾" width="70" height="70">
                        <span>44 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">独门冲小龙虾</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:92%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售72单</span>
                        <div class="rstblock-cost">配送费¥40</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/150139700" data-rst-id="150139700" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/4/02/ce11443758a189a407d5f45839c8djpeg.jpeg?imageMogr2/thumbnail/70x70" alt="e果e家" width="70" height="70">
                        <span>29 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">e果e家</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:72%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售74单</span>
                        <div class="rstblock-cost">配送费¥48</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/155260408" data-rst-id="155260408" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/c/e1/9a39139a098209ebfffaabf368f8epng.png?imageMogr2/thumbnail/70x70" alt="钳途麻小" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">钳途麻小</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:100%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售84单</span>
                        <div class="rstblock-cost">配送费¥65</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/150886691" data-rst-id="150886691" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/f/54/516aefa8bc0506afa890d88693626jpeg.jpeg?imageMogr2/thumbnail/70x70" alt="望京小腰" width="70" height="70">
                        <span>35 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">望京小腰</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:100%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售91单</span>
                        <div class="rstblock-cost">配送费¥40</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/1413712" data-rst-id="1413712" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/0/fe/eb6496cee7d0d8599025aa1181843jpeg.jpeg?imageMogr2/thumbnail/70x70" alt="小布丁" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">小布丁</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:88%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售37单</span>
                        <div class="rstblock-cost">配送费¥48</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/1282828" data-rst-id="1282828" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/e/89/8ca597421391f56362dab51d2186dpng.png?imageMogr2/thumbnail/70x70" alt="虾蟹情（天融店）" width="70" height="70">
                        <span>37 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">虾蟹情（天融店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:96%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售78单</span>
                        <div class="rstblock-cost">配送费¥25</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/2229010" data-rst-id="2229010" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/6/18/338ad34f5fa857395461ca5efda4apng.png?imageMogr2/thumbnail/70x70" alt="乐园进口零食（西直门店）" width="70" height="70">
                        <span>25 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">乐园进口零食（西直门店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:70%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售93单</span>
                        <div class="rstblock-cost">配送费¥10</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/152325245" data-rst-id="152325245" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/3/77/94ce2089eff38d1a28d96a862dd94png.png?imageMogr2/thumbnail/70x70" alt="味库" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">味库</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:0%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售1单</span>
                        <div class="rstblock-cost">配送费¥30</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/2066581" data-rst-id="2066581" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/4/69/629ac29be2c3e29a50a0b24d0647bjpeg.jpeg?imageMogr2/thumbnail/70x70" alt="e果e家（广安门店）" width="70" height="70">
                        <span>28 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">e果e家（广安门店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:74%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售60单</span>
                        <div class="rstblock-cost">配送费¥45</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/781595" data-rst-id="781595" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/e/95/8b473831554cdf75a76ae820a782bpng.png?imageMogr2/thumbnail/70x70" alt="优活掌上超市（总店）" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">优活掌上超市（总店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:88%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售50单</span>
                        <div class="rstblock-cost">配送费¥5</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/156167023" data-rst-id="156167023" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/0/e9/3af8b9e85e6a5ca48be3fbde2b224png.png?imageMogr2/thumbnail/70x70" alt="楚先生五谷养生代餐(双井店)" width="70" height="70">
                        <span>25 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">楚先生五谷养生代餐(双井店)</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:100%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售50单</span>
                        <div class="rstblock-cost">免配送费</div>
                        <div class="rstblock-activity">
                            <i style="background:#E75959;">新</i>
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/1173455" data-rst-id="1173455" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/7/29/7bf2818dfe98e4e7c5b0d7842e30apng.png?imageMogr2/thumbnail/70x70" alt="江依林韩式快餐" width="70" height="70">
                        <span>37 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">江依林韩式快餐</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:98%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售94单</span>
                        <div class="rstblock-cost">配送费¥15</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/152200152" data-rst-id="152200152" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/d/ad/fa2966a0d87dee0ec6860642c0a6ejpeg.jpeg?imageMogr2/thumbnail/70x70" alt="鸿韵军超果蔬生鲜" width="70" height="70">
                        <span>38 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">鸿韵军超果蔬生鲜</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:94%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售124单</span>
                        <div class="rstblock-cost">配送费¥25</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/150897572" data-rst-id="150897572" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/c/f1/9688618cfde65724cedfb29fd53bdpng.png?imageMogr2/thumbnail/70x70" alt="e果e家（青年路店）" width="70" height="70">
                        <span>34 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">e果e家（青年路店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:88%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售121单</span>
                        <div class="rstblock-cost">配送费¥56</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/154885242" data-rst-id="154885242" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/b/5e/462c8d69c22d060c79fa6c80e9075jpeg.jpeg?imageMogr2/thumbnail/70x70" alt="张记小龙虾香辣蟹" width="70" height="70">
                        <span>36 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">张记小龙虾香辣蟹</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:84%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售84单</span>
                        <div class="rstblock-cost">配送费¥66</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/156235291" data-rst-id="156235291" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/a/22/2932edb3b74bbfe8f7f22194861fepng.png?imageMogr2/thumbnail/70x70" alt="小贤家榴莲蛋糕(北苑店)" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">小贤家榴莲蛋糕(北苑店)</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:70%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售31单</span>
                        <div class="rstblock-cost">免配送费</div>
                        <div class="rstblock-activity">
                            <i style="background:#E75959;">新</i>
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/1776881" data-rst-id="1776881" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/9/a4/22b2b9ef76dddb8cf1b535d37594bpng.png?imageMogr2/thumbnail/70x70" alt="蟹鲜生阳澄湖大闸蟹" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">蟹鲜生阳澄湖大闸蟹</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:86%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售36单</span>
                        <div class="rstblock-cost">配送费¥40</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/156135270" data-rst-id="156135270" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/4/0d/34dcb5103e0ed0468f474705c803bjpeg.jpeg?imageMogr2/thumbnail/70x70" alt="玲妈妈五谷食疗养生代餐" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">玲妈妈五谷食疗养生代餐</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:0%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售1单</span>
                        <div class="rstblock-cost">免配送费</div>
                        <div class="rstblock-activity">
                            <i style="background:#E75959;">新</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/155740362" data-rst-id="155740362" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/2/2c/85307ddb2618856ea92cd8a42065ejpeg.jpeg?imageMogr2/thumbnail/70x70" alt="北京爱利飞幸食品店" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">北京爱利飞幸食品店</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:96%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售28单</span>
                        <div class="rstblock-cost">配送费¥30</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/150154665" data-rst-id="150154665" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/4/c0/3478d100b2944b396127945740e2ejpeg.jpeg?imageMogr2/thumbnail/70x70" alt="依奥生日水果千层榴莲蛋糕坊" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">依奥生日水果千层榴莲蛋糕坊</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:100%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售420单</span>
                        <div class="rstblock-cost">配送费¥48</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/476592" data-rst-id="476592" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/3/20/3f7f99f4c5a0e4d7d32dd08ceca71png.png?imageMogr2/thumbnail/70x70" alt="Green Tree" width="70" height="70">
                        <span>43 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">Green Tree</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:96%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售254单</span>
                        <div class="rstblock-cost">配送费¥78</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/2166552" data-rst-id="2166552" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/7/6b/79f591cfd69a6d2a3223c2a11fb93jpeg.jpeg?imageMogr2/thumbnail/70x70" alt="仙野蛋糕(天通苑店)" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">仙野蛋糕(天通苑店)</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:94%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售19单</span>
                        <div class="rstblock-cost">免配送费</div>
                        <div class="rstblock-activity"></div>
                    </div>
                </a>
                <a class="rstblock" href="/shop/1846478" data-rst-id="1846478" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/5/9e/7b903a6b3d2878b3e35266f3b96fcjpeg.jpeg?imageMogr2/thumbnail/70x70" alt="深夜食客（来广营店）" width="70" height="70">
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">深夜食客（来广营店）</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:70%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售56单</span>
                        <div class="rstblock-cost">配送费¥46</div>
                        <div class="rstblock-activity">
                            <i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>
                        </div>
                    </div>
                </a>
                <a class="rstblock-closed rstblock" href="/shop/155109409" data-rst-id="155109409" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/4/f9/96874073facef13d225b8843694e4jpeg.jpeg?imageMogr2/thumbnail/70x70" alt="张姐烤肉脆皮鸡饭" width="70" height="70">
                        <span>24 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">张姐烤肉脆皮鸡饭</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:96%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售1305单</span>
                        <div class="rstblock-cost">配送费¥6</div>
                        <div class="rstblock-relaxing">商家休息,暂不接单</div>
                    </div>
                </a>
                <a class="rstblock-closed rstblock" href="/shop/2218439" data-rst-id="2218439" data-bidding="" target="_blank">
                    <div class="rstblock-logo">
                        <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/c/1b/a7bb9dc920528d23e790b1a15bedajpeg.jpeg?imageMogr2/thumbnail/70x70" alt="麻辣香锅" width="70" height="70">
                        <span class="rstblock-left-timeout">45+ 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">麻辣香锅</div>
                        <div class="starrating icon-star">
                            <span class="icon-star" style="width:90%;"></span>
                        </div>
                        <span class="rstblock-monthsales">月售2520单</span>
                        <div class="rstblock-cost">配送费¥16</div>
                        <div class="rstblock-relaxing">商家休息,暂不接单</div>
                    </div>
                </a>
            </div>
            <div class="loading ng-binding ng-isolate-scope ng-hide" ng-show="rstStream.status === 'LOADING'" loading="" content="正在载入更多商家..." type="normal">
                <img class="normal ng-scope" ng-if="type==='normal'" src="./img/loading.0e7b2e.gif" alt="正在加载"> 正在载入更多商家...
            </div>
            <div id="fetchMoreRst" class="">点击加载更多商家...</div>
            <div class="place-rstbox-nodata ng-hide" ng-show="rstStream.status === 'COMPLETE' && !filteredRestaurants.length">
                <img class="nodata" src="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/img/icon-restaurant.b3a359.png" alt="找不到商家" width="100">
                <div class="typo-small">附近没有找到符合条件的商家，换个筛选条件试试吧</div>
            </div>
            <!-- </div> -->
            <!-- </div> -->
            <!-- <eleme-footer></eleme-footer> -->
            <footer class="footer" role="contentinfo">
                <div class="container clearfix">
                    <div class="footer-link">
                        <h3 class="footer-link-title">用户帮助</h3>
                        <a class="footer-link-item" href="/support/center" target="_blank">服务中心</a>
                        <a class="footer-link-item" href="/support/question/default" target="_blank">常见问题</a>
                        <a class="footer-link-item" online-service="" href="javascript:" style="visibility: hidden;">在线客服</a>
                    </div>
                    <div class="footer-link">
                        <h3 class="footer-link-title">商务合作</h3>
                        <a class="footer-link-item" href="//kaidian.ele.me" target="_blank">我要开店</a>
                        <a class="footer-link-item" href="/support/about/jiameng" target="_blank">加盟指南</a>
                        <a class="footer-link-item" href="/support/about/contact" target="_blank">市场合作</a>
                        <a class="footer-link-item" href="http://openapi.eleme.io/" target="_blank">开放平台</a>
                    </div>
                    <div class="footer-link">
                        <h3 class="footer-link-title">关于我们</h3>
                        <a class="footer-link-item" href="/support/about" target="_blank">饿了么介绍</a>
                        <a class="footer-link-item" href="http://jobs.ele.me/" target="_blank">加入我们</a>
                        <a class="footer-link-item" href="/support/about/contact" target="_blank">联系我们</a>
                        <a class="footer-link-item" href="/support/rules/default" target="_blank">规则中心</a>
                    </div>
                    <div class="footer-contect">
                        <div class="footer-contect-item">
                            24小时客服热线 :
                            <a class="inherit" href="tel:10105757">10105757</a>
                        </div>
                        <div class="footer-contect-item">
                            意见反馈 :
                            <a class="inherit" href="mailto:feedback@ele.me">feedback@ele.me</a>
                        </div>
                        <div class="footer-contect-item">
                            关注我们 :
                            <div class="icon-wechat" href="JavaScript:" ubt-click="402">
                                <div class="dropbox dropbox-bottom footer-contect-dropbox" ubt-visit="402">
                                    <img src="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/img/wexinqc100@2x.393ade.png" alt="微信号: elemeorder">
                                    <p>微信号: elemeorder</p>
                                    <p>饿了么网上订餐</p>
                                </div>
                            </div>
                            <a class="icon-weibo" href="http://e.weibo.com/elemeorder" target="_blank"></a>
                        </div>
                    </div>
                    <div class="footer-mobile">
                        <a href="https://h.ele.me/landing" target="_blank">
                            <img class="footer-mobile-icon" src="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/img/appqc.95e532.png" alt="扫一扫下载饿了么手机 App">
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
                            <a href="http://www.shca.gov.cn/" target="_blank">沪B2-20150033</a> |
                            <a href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备 09007032</a> |
                            <a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20120305173227823" target="_blank">上海工商行政管理</a> Copyright ©2008-2017 ele.me, All Rights Reserved.
                        </p>
                    </div>
                    <div class="footer-police container">
                        <a href="http://www.zx110.org/picp/?sn=310100103568" rel="nofollow" target="_blank">
                            <img alt="已通过沪公网备案，备案号 310100103568" src="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/img/picp_bg.e373b3.jpg" height="30">
                        </a>
                    </div>
                </div>
            </footer>
            <script src="../../../../课程/二期/2第二天ER图/二期项目模板/模板/外卖/js/6936dbf3e7d94cffa954bcbcf2b79f38.js"></script>
</body>

</html>
