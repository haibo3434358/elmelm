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
    <!--[if lte IE 8]><script.></script><![endif]-->
    <script src="/home/js/69e30c57868b46e7a0d2b4a6c711970a.js" data-ref="API_CONFIG"></script>
    <script src="/home/js/perf.js" type="text/javascript" crossorigin="anonymous"></script>
    {{--<script src="/home/js/vendor.8c3a5a.js" type="text/javascript" crossorigin="anonymous"></script>--}}
    <script src="/home/js/main.a0cd82.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/6936dbf3e7d94cffa954bcbcf2b79f38.js"></script>
    <script src="/home/js/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" href="/home/bs/css/bootstrap.min.css">
    <link rel="stylesheet" href="/home/bs/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="/home/bs/js/jquery.js"></script>
    <script type="text/javascript" src="/home/bs/js/bootstrap.min.js"></script>
    <style>
        .cd-user-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(52, 54, 66, 0.9);
            z-index: 3;
            overflow-y: auto;
            cursor: pointer;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 0.3s 0, visibility 0 0.3s;
            -moz-transition: opacity 0.3s 0, visibility 0 0.3s;
            transition: opacity 0.3s 0, visibility 0 0.3s;
        }
        .cd-user-modal.is-visible {
            visibility: visible;
            opacity: 1;
            -webkit-transition: opacity 0.3s 0, visibility 0 0;
            -moz-transition: opacity 0.3s 0, visibility 0 0;
            transition: opacity 0.3s 0, visibility 0 0;
        }
        .cd-user-modal.is-visible .cd-user-modal-container {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        .cd-user-modal-container {
            position: relative;
            width: 90%;
            max-width: 600px;
            background: #FFF;
            margin: 3em auto 4em;
            cursor: auto;
            border-radius: 0.25em;
            -webkit-transform: translateY(-30px);
            -moz-transform: translateY(-30px);
            -ms-transform: translateY(-30px);
            -o-transform: translateY(-30px);
            transform: translateY(-30px);
            -webkit-transition-property: -webkit-transform;
            -moz-transition-property: -moz-transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            -moz-transition-duration: 0.3s;
            transition-duration: 0.3s;
        }
        .cd-user-modal-container .cd-switcher:after {
            content: "";
            display: table;
            clear: both;
        }
        .cd-user-modal-container .cd-switcher li {
            width: 50%;
            float: left;
            text-align: center;
        }
        .cd-user-modal-container .cd-switcher li:first-child a {
            border-radius: .25em 0 0 0;
        }
        .cd-user-modal-container .cd-switcher li:last-child a {
            border-radius: 0 .25em 0 0;
        }
        .cd-user-modal-container .cd-switcher a {
            display: block;
            width: 100%;
            height: 50px;
            line-height: 50px;
            background: #d2d8d8;
            color: #809191;
        }
        .cd-user-modal-container .cd-switcher a .selected {
            background:  #1263be;
            color: black;
        }

        #cd-login, #cd-signup {
            display: none;
        }

        #cd-login.is-selected, #cd-signup.is-selected{
            display: block;
        }

        #cd-login .login_putin ul li input{
            margin: 20px 0px 0px 0px;

            width: 70 % ;
            padding: 0px; - webkit - border - radius: .3em; - moz - border - radius: .3em;
            border-radius:10px;
            border: 1px solid #999;
        }
        #cd-login .login_putin ul{
            position:relative;
            top:0px;
            left: 50px;
        }
        #cd-signup .login_putin ul li input{
            margin: 20px 0px 0px 0px;

            width: 70 % ;
            padding: 0px; - webkit - border - radius: .3em; - moz - border - radius: .3em;
            border-radius:10px;
            border: 1px solid #999;
        }

        #cd-login .login_btn {
               width: 300px;
               margin: 60px auto 0 auto;
        }
        #cd-signup .login_btn {
            width: 300px;
            margin: 40px auto 0 auto;
        }

        #cd-login .login_btn input {
            width: 300px ;
            margin: 0px 0px 20px 20px;
            padding: .5em 0; - webkit - border - radius: .3em; - moz - border - radius: .3em;
            border: #1263be solid 1px;
            background: #1b85fd;
            color: #1263be;
            font - size: 17px;
            font - weight: bolder;
            letter - spacing: 1em;
            border-radius:10px;

        }
        #cd-signup .login_btn input {
            width: 300px ;
            margin: 0px 0px 20px 20px;
            padding: .5em 0; - webkit - border - radius: .3em; - moz - border - radius: .3em;
            border: #1263be solid 1px;
            background: #1b85fd;
            color: #1263be;
            font - size: 17px;
            font - weight: bolder;
            letter - spacing: 1em;
            border-radius:10px;

        }
        #cd-signup .cd-zhuce {
            width:500px;
            margin: 0px;
            position:relative;
            top:0px;
            left:50px;
        }

        #cd-login .login_btn input: hover {
            background: #1263be;
        }
        #cd-signup .login_btn input: hover {
            background: #1263be;
        }
    </style>

</head>

<body cute-title ng-class="{hidesidebar: layoutState && layoutState.hideSidebar, smallbody: layoutState.smallBody, whitebody: layoutState.whiteBody}">
<!-- <eleme-topbar state="layoutState"></eleme-topbar> -->

<div class="ng-isolate-scope" ng-switch="state.type" state="layoutState">
    <div class="ng-scope ng-isolate-scope" ng-switch-default="" topbar-default="" state="state">
        <header class="topbar" role="navigation" ng-class="{shoptopbar: state.type === 'shop'}">
            <div class="container clearfix">
                <h1>
                    <a class="topbar-logo icon-logo" href="{{url('home/shouye')}}" >
                        <span>饿了么</span>
                    </a>
                </h1>
                <a class="topbar-item topbar-homepage focus" href="{{url('home/shouye')}}" hardjump="">首页</a>
                <a class="topbar-item" href="/profile/order" hardjump="" ng-class="{'focus': $root.locationpath[1] === 'order'}">我的订单</a>
                <a class="topbar-item cooperation" href="{{url('home/saleuser')}}" target="_blank">加盟合作</a>

                <nav class="topbar-nav" ">

                    <div topbar-profilebox="">
                        <div class="topbar-profilebox">

                            <img src="@if( session('user1')){{session('user1')['uface']}} @else /home/img/head_180.jpg @endif" alt="" style="width:35px;height:35px;">
                            <span class="topbar-nav-link" id="main_nav" style="width:115px">
                                @if( session('user1')){{session('user1')['uname']}} @else
                                <a class="cd-signin" href="#0" style="font-size:12px">用户登录  |</a>
                                <a class="cd-signup" href="#0" style="font-size:12px">注册</a>
                                @endif
                            </span>
                            <span class="topbar-profilebox-wrapper ng-hide" ng-show="$root.user.username">
                            <span class="topbar-profilebox-username ng-binding"></span>
                                <span class="topbar-profilebox-btn icon-arrow-down ng-scope" ng-if="$root.topbarType !== 'checkout'"></span>
                                <div class="dropbox topbar-profilebox-dropbox">
                                    <a class="icon-profile" href="/home/ziliao" hardjump="">个人中心</a>
                                    <a class="icon-logout" href="{{url('home/login/exit')}}">退出登录</a>
                                </div>
                                </span>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>
</div>

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
<div class="cd-user-modal">
    <div class="cd-user-modal-container">
        <ul class="cd-switcher">
            <li><a href="#0">登录</a></li>
            <li><a href="#0">注册新用户</a></li>
        </ul>

        <div id="cd-login" >

            <form class="cd-form" id="dform" action="{{url('home/login/denglu')}}" method="post">
                <div class="login_putin">

                    <ul>
                        <li>用户名:&nbsp;&nbsp;
                            <input type="text" name="duname" placeholder="请输入您的用户名">
                            <span id='duname'> *请输入8~16位用户名</span>
                        </li>
                        <li>密&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;&nbsp;
                            <input type="password" name="dpassword" placeholder="请输入您的密码">
                            <span id='dpass'> *请输入8~16位用户名</span>
                        </li>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
{{--                        {{csrf_field()}}--}}
                    </ul>
                </div>
                <div class="login_btn">
                    <input type="submit" value="登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录">
                </div>
            </form>

        </div>

        <div id="cd-signup"  >
            <div class="cd-zhuce">
                <form class="cd-form" action="{{url('home/login/zhuce')}}" method="post">
                    <div class="login_putin" >
                        <ul >
                            <li>用&nbsp;户&nbsp;名:&nbsp;&nbsp;<input type="text" name="uname" placeholder="请输入您的用户名">
                                <span id='text'> *请输入8~16位用户名</span>
                            </li>
                            <li>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;&nbsp;<input type="password" name="password" placeholder="请输入您的密码">
                                <span> *请输入8~12位密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </li>
                            <li>确认密码:&nbsp;&nbsp;<input type="password" name="repassword" placeholder="再输入一次您的密码">
                                <span> *请再次输入密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </li>
                            <li>手&nbsp;机&nbsp;号:&nbsp;&nbsp;<input type="text" name="phone" placeholder="请输入您的手机号">
                                <span id="tel"> *请输入手机号码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </li>
                            <li>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱:&nbsp;&nbsp;<input type="text" name="email" placeholder="请输入您的常用邮箱">
                                <span id="email"> *请输入邮箱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </li>
                        </ul>
                    </div>
                    <div class="login_btn">
                        <input type="hidden" name="yhvalue" value="10,">
                        {{ csrf_field() }}
                        <input type="submit" value="注&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;册">
                    </div>
                </form>
            </div>
        </div>
    </div>
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
<script>
    jQuery(document).ready(function($){
        var $form_modal = $('.cd-user-modal'),
            $form_login = $form_modal.find('#cd-login'),
            $form_signup = $form_modal.find('#cd-signup'),
            $form_modal_tab = $('.cd-switcher'),
            $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
            $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
            $main_nav = $('#main_nav');

//弹出窗口
        $main_nav.on('click', function(event){

            if( $(event.target).is($main_nav) ) {
// on mobile open the submenu
                $(this).children('a').toggleClass('is-visible');
            } else {
// on mobile close submenu
                $main_nav.children('ul').removeClass('is-visible');
//show modal layer
                $form_modal.addClass('is-visible');
//show the selected form
                ( $(event.target).is('.cd-signup') ) ? signup_selected() : login_selected();
            }

        });

//关闭弹出窗口
        $('.cd-user-modal').on('click', function(event){
            if( $(event.target).is($form_modal) || $(event.target).is('.cd-close-form') ) {
                $form_modal.removeClass('is-visible');
            }
        });
//使用Esc键关闭弹出窗口
        $(document).keyup(function(event){
            if(event.which=='27'){
                $form_modal.removeClass('is-visible');
            }
        });

//切换表单
        $form_modal_tab.on('click', function(event) {
            event.preventDefault();
            ( $(event.target).is( $tab_login ) ) ? login_selected() : signup_selected();
        });

        function login_selected(){
            $form_login.addClass('is-selected');
            $form_signup.removeClass('is-selected');
//            $form_forgot_password.removeClass('is-selected');
            $tab_login.addClass('selected');
            $tab_signup.removeClass('selected');
        }

        function signup_selected(){
            $form_login.removeClass('is-selected');
            $form_signup.addClass('is-selected');
//            $form_forgot_password.removeClass('is-selected');
            $tab_login.removeClass('selected');
            $tab_signup.addClass('selected');
        }

    });
    var TU = false;
    var PU = false;
    var NU = false;
    var CU = false;
    var AU = false;
    var DU = false;
    //文本框  获取焦点
    $('input[name=uname]').focus(function(){
        //让边框变颜色
        $(this).css('border','solid 2px blue');
    })
    //失去焦点
    $('input[name=uname]').blur(function(){

        //获取文本框的值
        var tv = $(this).val();
        //正则表达式
        var reg = /^\w{6,16}$/;
        //把输入框的$(this)付给一个变量
        var tx = $(this);
        //判断
        if(!reg.test(tv)){

            $(this).css('border','solid 2px red');

            $('#text').text(' *输入的用户名格式不正确').css('color','red');
            TU= false;
        } else {

            //发送ajax
            {{--$.post("{{url('admin/link/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data)--}}
            $.post("{{url('home/login/yanzhenguname')}}",{'uname':tv,'_token':'{{csrf_token()}}'},function(data){

//                console.log(data);
                if(data == 1){

                    tx.css('border','solid 2px red');

                    $('#text').text(' *用户已存在').css('color','red');

                    TU = false;

                } else {

                    tx.css('border','solid 2px green');

                    $('#text').text(' √用户可以使用').css('color','green');

                    TU = true;
                }
            })
        }
    })

    //密码
    //获取焦点
    $('input[name=password]').focus(function(){

        $(this).addClass('cur');
    })

    //失去焦点
    $('input[name=password]').blur(function(){

        var pv = $(this).val();

        var reg = /^\S{8,12}$/;

        if(!reg.test(pv)){

            $(this).css('border','solid 2px red');
            $(this).next().text(' *输入的密码格式不正确').css('color','red');

            PU= false;
        } else {

            $(this).css('border','solid 2px green').next().text(' √密码格式正确').css('color','green');

            PU = true;
        }
    })

    //重复密码
    $('input[name=repassword]').focus(function(){

        $(this).addClass('cur');

    })

    //失去焦点
    $('input[name=repassword]').blur(function(){
        //获取第一次的输入的密码
        var pass = $('input[name=password]').val();

        //获取当前输的密码
        var repass = $(this).val();

        if( repass !=pass){
            $(this).css('border','solid 2px red');
            $(this).next().text(' *两次密码不一致').css('color','red');
        } else {
            $(this).css('border','solid 2px green');
            $(this).next().text(' √两次密码一致').css('color','green');
        }
    })

    //邮箱
    $('input[name=email]').focus(function(){

        $(this).addClass('cur');
    })

    //失去焦点
    $('input[name=email]').blur(function(){

        var ehv = $(this).val();

        var reg = /^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/;
        //把输入框的$(this)付给一个变量
        var ex = $(this);

        if(!reg.test(ehv)){

            $(this).css('border','solid 2px red');
            $(this).next().text(' *输入的email格式不正确').css('color','red');

            CU = false;
        } else {
            $.post("{{url('home/login/yanzhengemail')}}",{'email':ehv,'_token':'{{csrf_token()}}'},function(data){
//                console.log(data);
                if(data == 1){

                    ex.css('border','solid 2px red');

                    $('#email').text(' *email已被占用').css('color','red');

                    CU = false;

                } else {

                    ex.css('border','solid 2px green');

                    $('#email').text(' √邮箱可以使用').css('color','green');

                    CU = true;
                }

            })

        }
    })

    $('input[name=phone]').focus(function(){

        $(this).addClass('cur');
    })

    //失去焦点
    $('input[name=phone]').blur(function(){

        var phv = $(this).val();

        var reg = /^1[34578]\d{9}$/;

        //把输入框的$(this)付给一个变量
        var px = $(this);

        if(!reg.test(phv)){

            $(this).css('border','solid 2px red');
            $(this).next().text(' *输入的手机号码格式不正确').css('color','red');

            NU = false;
        } else {
            $.post("{{url('home/login/yanzhengphone')}}",{'phone':phv,'_token':'{{csrf_token()}}'},function(data){
//                console.log(data);
                if(data == 1){

                    px.css('border','solid 2px red');

                    $('#tel').text(' *手机号已被注册').css('color','red');

                    NU = false;

                } else {

                    px.css('border','solid 2px green');

                    $('#tel').text(' √手机号可以使用').css('color','green');

                    NU = true;
                }
            })

        }
    })

    //提交事件
    $('#forms').submit(function(){

        if(TU && PU && NU && CU){

            return true;
        }

        return false;
    })
    var av = '';
    //文本框  获取焦点
    $('input[name=duname]').focus(function(){
        //让边框变颜色
        $(this).css('border','solid 2px blue');
    })
    //失去焦点
    $('input[name=duname]').blur(function(){

        //获取文本框的值
        av = $(this).val();
        //正则表达式
        var reg = /^\w{6,16}$/;
        //把输入框的$(this)付给一个变量
        var ax = $(this);
        //判断
        if(!reg.test(av)){

            $(this).css('border','solid 2px red');

            $('#duname').text(' *输入的用户名格式不正确').css('color','red');
            AU= false;
        } else {

            //发送ajax
            {{--$.post("{{url('admin/link/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data)--}}
            $.post("{{url('home/login/dyanzhenguname')}}",{'duname':av,'_token':'{{csrf_token()}}'},function(data){

//                console.log(data);
                if(data == 0){

                    ax.css('border','solid 2px red');

                    $('#duname').text(' *用户不存在').css('color','red');

                    AU = false;

                } else {

                    ax.css('border','solid 2px green');

                    $('#duname').text(' √').css('color','green');

                    AU = true;
                }
            })
        }
    })
    //密码
    //获取焦点
    $('input[name=dpassword]').focus(function(){
        $(this).css('border','solid 2px blue');
//        $(this).addClass('cur');
    })

    //失去焦点
    $('input[name=dpassword]').blur(function(){

        var dv = $(this).val();

        var reg = /^\S{8,12}$/;
        var dx = $(this);

        if(!reg.test(dv)){
//            alert(111);

            dx.css('border','solid 2px red');
            dx.next().text(' *输入的密码格式不正确').css('color','red');

            DU= false;
        } else {
            dx.css('border','solid 2px green');
            dx.next().text(' √输入的密码格式正确').css('color','green');
            DU= true;
        }

    })


</script>

</body>

</html>
