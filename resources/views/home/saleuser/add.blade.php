<!DOCTYPE html>
<html class="no-js" lang="zh">
<head>
    <meta charset="utf-8" />
    <title>注册-register.html</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="饿了么是中国最专业的网上订餐平台，提供各类中式、日式、韩式、西式等优质美食。" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link class="usemin" rel="stylesheet" href="/home/sh/css/global_rebuild.a739f3af.css" />
    <link class="usemin" rel="stylesheet" href="/home/sh/css/account_rebuild.54cf8909.css" />
</head>
<body class="page-account">
<header class="header" style="height:0px">
    <h1 class="header-hd" title="ele.me | 商家入驻？快来加入我们!">
             <a href="{{url('admin/login')}}">后台入口<img src="/home/img/shangjiarukou.png" alt="" style="width:60px;height:80px;position:absolute;top:20px"></a>
    </h1>
</header>
<div class="container clrfix">
    <aside class="banner">
        <img class="img" src="/home/sh/images/banner-app.75596728.png" alt="随时随地轻松订餐" />
    </aside>
    <div class="panel">
        <div class="panel-hd clrfix">
            <h2 class="title">商家注册</h2>
        </div>
        @if (count($errors) > 0)
            <div class="mws-form-message error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style='list-style:none;font-size:17px'>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="panel-bd">
            <form id="register_form" class="form" method="post"  action="{{url('home/saleuser/baocun')}}">
                <div class="form-item">
                    <input id="register_username" class="inputbox js_inputbox async" name="sname" type="text" minlength="5" maxlength="16" placeholder="用户名" required="" />
                    <div class="g-error-tip hide"></div>
                </div>
                <div class="form-item">
                    <input id="register_email" class="inputbox js_inputbox async" name="semail" type="text" placeholder="电子邮箱" required="" />
                    <div class="g-error-tip hide"></div>
                </div>
                <div class="form-item">
                    <input id="register_email" class="inputbox js_inputbox async" name="sphone" type="text" placeholder="请输入常用手机号" required="" />
                    <div class="g-error-tip hide"></div>
                </div>
                <div class="form-item">
                    <input id="register_password" class="inputbox js_inputbox" name="spassword" type="password" minlength="6" maxlength="20" placeholder="密码" required="" />
                    <div class="g-error-tip hide"></div>
                </div>
                <div class="form-item">
                    <input id="register_repeat_password" class="inputbox js_inputbox" name="repassword" type="password" minlength="6" maxlength="20" placeholder="确认密码" required="" />
                    <div class="g-error-tip hide"></div>
                </div>
                {{--<div class="form-item clrfix">--}}
                    {{--<input id="captcha_input" class="inputbox input-captcha" type="text" name="captcha" minlength="4" maxlength="4" placeholder="验证码" autocomplete="off" required="" />--}}
                    {{--<div class="g-error-tip hide"></div>--}}
                    {{--<img id="captcha_img" class="captcha-img" data-action="register" src="//v5.ele.me/captcha?action=register" alt="验证码" title="请填写验证码" />--}}
                {{--</div>--}}
                <div class="form-helper form-text">
                    <a class="g-link" href="{{url('home/agreement')}}" target="_blank">使用条款和协议</a>
                </div>
                {{ csrf_field() }}
                <button class="g-btn g-btn-l g-btn-submit" type="submit">同意协议并注册</button>
            </form>
        </div>

        <div id="loading_mask" class="ui-wave-loader-mask hide">
            <i class="ui-wave-loader left"></i>
            <i class="ui-wave-loader middle"></i>
            <i class="ui-wave-loader right"></i>
        </div>
    </div>

</div>

<footer class="site-footer group" role="contentinfo">
    <div class="container">
        <p class="sfooter-line"> <a class="sfooter-link" href="http://kaidian.ele.me">我要开店</a> | <a class="sfooter-link" href="contact.html">联系我们</a> | <a class="sfooter-link" href="http://ele.me/about/agreement">服务条款和协议</a> | <a class="sfooter-link" href="sitemaps.html">站点地图</a> | <a class="sfooter-link" href="http://ele.me/jobs">加入我们</a> </p>
        <p class="sfooter-line"> 增值电信业务许可证：<a class="sfooter-link sfooter-link-zero" target="_blank" rel="nofollow" href="http://www.shca.gov.cn">沪B2-20150033</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.miibeian.gov.cn">沪ICP备 09007032</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823">上海工商行政管理</a> Copyright &copy;2008-2015 ele.me, All Rights Reserved. </p>
    </div>
</footer>


<!-- UBT -->

<!-- fingerprint -->
<script>

</script>
</body>
</html>