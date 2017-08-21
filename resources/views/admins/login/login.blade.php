<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">

<title>管理员后台登入</title>
    <meta charset="utf-8">

    <!-- Viewport Metatag -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Required Stylesheets -->

    <link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

    <link rel="stylesheet" type="text/css" href="/admins/css/login.css" media="screen">

    <link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">

    <title>管理员登录</title>

</head>

<body>

    {{--<div id="mws-login-wrapper">--}}
        {{--<div id="mws-login">--}}
            {{--<h1>Login</h1>--}}
            {{--<div class="mws-login-lock"><i class="icon-lock"></i></div>--}}
            {{--<div id="mws-login-form">--}}
                {{--<form class="mws-form" action="dashboard.html" method="post">--}}
                    {{--<div class="mws-form-row">--}}
                        {{--<div class="mws-form-item">--}}
                            {{--<input type="text" name="username" class="mws-login-username required" placeholder="username">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="mws-form-row">--}}
                        {{--<div class="mws-form-item">--}}
                            {{--<input type="password" name="password" class="mws-login-password required" placeholder="password">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="mws-login-remember" class="mws-form-row mws-inset">--}}
                        {{--<ul class="mws-form-list inline">--}}
                            {{--<li>--}}
                                {{--<input id="remember" type="checkbox"> --}}
                                {{--<label for="remember">Remember me</label>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="mws-form-row">--}}
                        {{--<input type="submit" value="Login" class="btn btn-success mws-login-button">--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- JavaScript Plugins -->
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admins/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admins/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/admins/js/core/login.js"></script>
<div id="mws-login-wrapper">
    <div id="mws-login">
        <h1 >管理员登录</h1>
        <div class="mws-login-lock"><i class="icon-lock"></i></div>
        <div id="mws-login-form">
                <div class="mws-form-item">
                    @if(session('error'))
                        <p style="color:red">{{session('error')}}</p>
                    @endif
                    </div>

            <form class="mws-form" action="{{url('admins/dologin')}}" method="post">
                <div class="mws-form-row">

                    {{csrf_field()}}
                    <div class="mws-form-item">
                        <input type="text" name="aname" class="mws-login-username required" placeholder="用户名">
                    </div>
                </div>
                <div class="mws-form-row">
                    <div class="mws-form-item">
                        <input type="password" name="apassword" class="mws-login-password required" placeholder="密码">
                    </div>
                </div>
                <div class="mws-form-row">
                    <div class="checkcode" style="width:100px;margin-right:30px" style="float: left;">
                        <input type="text" id="J_codetext" style="width:150px;float:left;margin-right:5px;height:35px;" placeholder="验证码" maxlength="6" class="login_txtbx"  name="code">
                        {{--<canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>--}}

                    </div>
                    <img src="{{ url('/admins/captcha') }}" style="float:left;" onclick="this.src='{{url('/admins/captcha')}}?'+Math.random()"">

                    {{--<input type="button" value="验证码核验" class="ver_btn" onClick="validate();">--}}
                </div>
                {{--<div id="mws-login-remember" class="mws-form-row mws-inset">--}}
                    {{--<ul class="mws-form-list inline">--}}
                        {{--<li>--}}
                            {{--<input id="remember" type="checkbox">--}}
                            {{--<label for="remember">记住密码</label>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                <div class="mws-form-row">
                    <input type="submit" value="登录" class="btn btn-success mws-login-button">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript Plugins -->
<script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
<script src="/admins/js/libs/jquery.placeholder.min.js"></script>
<script src="/admins/custom-plugins/fileinput.js"></script>

<!-- jQuery-UI Dependent Scripts -->
<script src="/admins/jui/js/jquery-ui-effects.min.js"></script>

<!-- Plugin Scripts -->
<script src="/admins/plugins/validate/jquery.validate-min.js"></script>

<!-- Login Script -->
<script src="/admins/js/core/login.js"></script>

</body>
</html>
