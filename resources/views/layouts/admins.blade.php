<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Viewport Metatag -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Plugin Stylesheets first to ease overrides -->
    <link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/custom-plugins/wizard/wizard.css" media="screen">

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

    <link rel="stylesheet" type="text/css" href="/admins/css/mws-style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/icons/icol16.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/icons/icol32.css" media="screen">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/admins/css/demo.css" media="screen">

    <!-- jQuery-UI Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/admins/jui/css/jquery.ui.all.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/jui/jquery-ui.custom.css" media="screen">

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/themer.css" media="screen">

    <title>饿了么管理员后台管理系统</title>


</head>

<body>

<!-- Themer (Remove if not needed) -->
<div id="mws-themer">

    <div id="mws-themer-css-dialog">
        <form class="mws-form">
            <div class="mws-form-row">
                <div class="mws-form-item">
                    <textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Themer End -->

<!-- Header -->
<div id="mws-header" class="clearfix">

    <!-- Logo Container -->
    <div id="mws-logo-container">

        <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        <div id="mws-logo-wrap">
            <span style='font-size:20px;color:white'>饿了么</span>
        </div>
    </div>

    <!-- User Tools (notifications, logout, profile, change password) -->
    <div id="mws-user-tools" class="clearfix">

        <!-- Notifications -->
        <div id="mws-user-notif" class="mws-dropdown-menu">
            {{--<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>--}}

            {{--<!-- Unread notification count -->--}}
            {{--<span class="mws-dropdown-notif">35</span>--}}

            <!-- Notifications dropdown -->
            <div class="mws-dropdown-box">
                <div class="mws-dropdown-content">
                    <ul class="mws-notifications">
                        <li class="read">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                </span>
                            </a>
                        </li>
                        <li class="read">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                    </ul>
                    <div class="mws-dropdown-viewall">
                        <a href="#">View All Notifications</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages -->
        <div id="mws-user-message" class="mws-dropdown-menu">
            <a href="{{url('admins/pass')}}"  class="mws-dropdown-trigger">修改密码</a>
            {{--data-toggle="dropdown"--}}
            {{--<i class="icon-envelope"></i>--}}
            <!-- Unred messages count -->
            {{--<span class="mws-dropdown-notif">35</span>--}}

            <!-- Messages dropdown -->

            <div class="mws-dropdown-box">
                <div class="mws-dropdown-content">
                    <ul class="mws-messages">
                        <li class="read">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="read">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                    </ul>
                    <div class="mws-dropdown-viewall">
                        <a href="#">View All Messages</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Information and functions section -->
        <div id="mws-user-info" class="mws-inset">

            <!-- User Photo -->

            <div id="mws-user-message" class="mws-dropdown-menu">
                <div class="mws-dropdown-trigger">
                    欢迎您:
                    @if( session('useradmin')){{session('useradmin')->aname}} @else
                        <a class="mws-dropdown-trigger" href="#0" style="font-size:12px;">请登录</a>

                    @endif
                </div>

            </div>
            <div id="mws-user-photo">
                <img src="/home/img/head_180.jpg" alt="User Photo">
            </div>

            <!-- Username and Functions -->
            <div id="mws-user-message" class="mws-dropdown-menu">
                <a href="{{url('admins/quit')}}"  class="mws-dropdown-trigger">安全退出</a>
            </div>
        </div>
    </div>
</div>

<!-- Start Main Wrapper -->
<div id="mws-wrapper">

    <!-- Necessary markup, do not remove -->
    <div id="mws-sidebar-stitch"></div>
    <div id="mws-sidebar-bg"></div>

    <!-- Sidebar Wrapper -->
    <div id="mws-sidebar">

        <!-- Hidden Nav Collapse Button -->
        <div id="mws-nav-collapse">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Searchbox -->
        {{--<div id="mws-searchbox" class="mws-inset">--}}
            {{--<form action="typography.html">--}}
                {{--<input type="text" class="mws-search-input" placeholder="Search...">--}}
                {{--<button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>--}}
            {{--</form>--}}
        {{--</div>--}}

        <!-- Main Navigation -->
        <div id="mws-navigation">
            <ul>
                <li>
                    <a href="#"><i class="icon-users"></i>管理员管理  </a>
                    <ul>
                        <li>
                            <a href="#"><i class="icon-users"></i>用户管理  </a>
                            <ul>
                                <li><a href="/admins/admin/create" style=" color: #ffffff !important;display: block;font-size: 12px;margin-left: 10px;padding: 4px 0 4px 40px;text-decoration: none;text-shadow: none;">用户添加</a></li>
                                <li><a href="/admins/admin" style=" color: #ffffff !important;display: block;font-size: 12px;margin-left: 10px;padding: 4px 0 4px 40px;text-decoration: none;text-shadow: none;">用户列表</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#"><i class="icon-lock"></i>权限管理  </a>
                            <ul>
                                <li><a href="/admins/permission/create" style=" color: #ffffff !important;display: block;font-size: 12px;margin-left: 10px;padding: 4px 0 4px 40px;text-decoration: none;text-shadow: none;">权限添加</a></li>
                                <li><a href="/admins/permission" style=" color: #ffffff !important;display: block;font-size: 12px;margin-left: 10px;padding: 4px 0 4px 40px;text-decoration: none;text-shadow: none;">权限列表</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#"><i class="icon-github-3"></i>角色管理  </a>
                            <ul>
                                <li><a href="/admins/role/create" style=" color: #ffffff !important;display: block;font-size: 12px;margin-left: 10px;padding: 4px 0 4px 40px;text-decoration: none;text-shadow: none;">角色添加</a></li>
                                <li><a href="/admins/role" style=" color: #ffffff !important;display: block;font-size: 12px;margin-left: 10px;padding: 4px 0 4px 40px;text-decoration: none;text-shadow: none;">角色列表</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-users"></i>普通用户管理  </a>
                    <ul>
                        <li><a href="/admins/user/create">用户添加</a></li>
                        <li><a href="/admins/user">用户列表</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-users"></i>商家管理  </a>
                    <ul>
                        <li>
                            <a href="#"><i class="icon-users"></i>用户管理  </a>
                            <ul>
                                <li><a href="/admins/saleuser/create" style=" color: #ffffff !important;display: block;font-size: 12px;margin-left: 10px;padding: 4px 0 4px 40px;text-decoration: none;text-shadow: none;">用户添加</a></li>
                                <li><a href="/admins/saleuser" style=" color: #ffffff !important;display: block;font-size: 12px;margin-left: 10px;padding: 4px 0 4px 40px;text-decoration: none;text-shadow: none;">用户列表</a></li>
                                <li><a href="/admins/xianshi" style=" color: #ffffff !important;display: block;font-size: 12px;margin-left: 10px;padding: 4px 0 4px 40px;text-decoration: none;text-shadow: none;">用户审核</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-list"></i>商家分类</a>
                    <ul>
                        <li><a href="{{url('admins/cate/create')}}">增加列表</a></li>
                        <li><a href="{{url('admins/cate')}}">分类列表</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-users"></i>友情链接表  </a>
                    <ul>
                        <li><a href="/admins/youqing/create">添加链接</a></li>
                        <li><a href="/admins/youqing">查看链接</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-list"></i>网站配置</a>
                    <ul>
                        <li><a href="{{url('admins/config')}}">网站配置</a></li>

                </li>
            </ul>
        </div>
    </div>
    <!-- Main Container Start -->
    <div id="mws-container" class="clearfix">

        <!-- Inner Container Start -->
        <div class="container">
            @section('content')


            @show
        </div>
        <!-- Inner Container End -->

        <!-- Footer -->
        <div id="mws-footer">
            Copyright Your Website 2012. All Rights Reserved.
        </div>

    </div>
    <!-- Main Container End -->

</div>

<!-- JavaScript Plugins -->
<script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
<script src="/admins/js/libs/jquery.mousewheel.min.js"></script>
<script src="/admins/js/libs/jquery.placeholder.min.js"></script>
<script src="/admins/custom-plugins/fileinput.js"></script>

<!-- jQuery-UI Dependent Scripts -->
<script src="/admins/jui/js/jquery-ui-1.9.2.min.js"></script>
<script src="/admins/jui/jquery-ui.custom.min.js"></script>
<script src="/admins/jui/js/jquery.ui.touch-punch.js"></script>

<!-- Plugin Scripts -->
<script src="/admins/plugins/datatables/jquery.dataTables.min.js"></script>
<!--[if lt IE 9]>
<script src="/admins/js/libs/excanvas.min.js"></script>
<![endif]-->
<script src="/admins/plugins/flot/jquery.flot.min.js"></script>
<script src="/admins/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
<script src="/admins/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
<script src="/admins/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
<script src="/admins/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
<script src="/admins/plugins/colorpicker/colorpicker-min.js"></script>
<script src="/admins/plugins/validate/jquery.validate-min.js"></script>
<script src="/admins/custom-plugins/wizard/wizard.min.js"></script>

<!-- Core Script -->
<script src="/admins/bootstrap/js/bootstrap.min.js"></script>
<script src="/admins/js/core/mws.js"></script>

<!-- Themer Script (Remove if not needed) -->
<script src="/admins/js/core/themer.js"></script>

<!-- Demo Scripts (remove if not needed) -->
<script src="/admins/js/demo/demo.dashboard.js"></script>
<script src="/layer/layer.js" ></script>

</body>
</html>