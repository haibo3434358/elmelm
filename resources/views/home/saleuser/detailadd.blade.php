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
    <style type="text/css">
        #preview  {width:100px;height:100px;border:1px solid #000;overflow:hidden;}
        #imghead  {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=image);}
        #preview1 {width:100px;height:100px;border:1px solid #000;overflow:hidden;}
        #imghead1 {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=image);}
        #preview2 {width:100px;height:100px;border:1px solid #000;overflow:hidden;}
        #imghead2 {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=image);}
        #preview3 {width:100px;height:100px;border:1px solid #000;overflow:hidden;}
        #imghead3 {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=image);}
    </style>
</head>
<body class="page-account">
<header class="header">
    <h1 class="header-hd" title="ele.me | 叫外卖？上饿了么!"> <a class="logo" role="logo" href="{{url('home/shouye')}}">
            <svg class="logo-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="306px" height="36px" fill="#0097ec" viewbox="0 0 306 36">

            </svg> <img class="logo-img" src="/home/sh/images/logo.b38593f4.png" alt="ele.me| 叫外卖？上饿了么！" /> </a> </h1>
</header>
<div class="container clrfix">
    @if (count($errors) > 0)
        <div class="mws-form-message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style='list-style:none;font-size:17px'>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="banner">
        <div class="panel-hd clrfix">
            <h2 class="title">商家入驻需提交材料</h2>
        </div>
        <div class="panel-bd">
            <form id="register_form" class="form" method="post"  action="{{url('admins/saleuser/yanzheng')}}" enctype ="multipart/form-data">
                <div class="form-item">
                    <label style="font-size:18px">商家店铺名:</label>
                    <input id="register_username" class="inputbox js_inputbox async" name="exname" type="text" minlength="5" maxlength="16" placeholder="店铺名" required="" />

                    <div class="g-error-tip hide"></div>

                </div>
                <div class="form-item">
                    <label style="font-size:18px">经&nbsp;&nbsp;&nbsp;营&nbsp;&nbsp;&nbsp;人 :</label>
                    <input id="register_email" class="inputbox js_inputbox async" name="contacts" type="text" placeholder="店铺经营人" required="" />
                    <div class="g-error-tip hide"></div>
                </div>
                <div class="form-item">
                    <label style="font-size:18px">联系&nbsp;&nbsp;方式 :</label>
                    <input id="register_email" class="inputbox js_inputbox async" name="exphone" type="text" placeholder="请输入常用手机号" required="" />
                    <div class="g-error-tip hide"></div>
                </div>
                <div class="form-item">
                    <label style="font-size:18px">店面&nbsp;&nbsp;地址 :</label>
                    <input id="register_password" class="inputbox js_inputbox" name="exaddr" type="text" minlength="6" maxlength="20" placeholder="店面地址" required="" />
                    <div class="g-error-tip hide"></div>
                </div>
                <div class="form-item" >
                    <label style="font-size:18px">门店&nbsp;&nbsp;图片 :</label>

                    <input  iclass="inputbox js_inputbox" name="eximage" type="file" minlength="6" maxlength="20"  required="" onchange="previewImage(this)" />
                    <div id="preview" ><img id="imghead" border=0 src="/home/img/head_180.jpg" width="100" height="100" /></div>
                    <div class="g-error-tip hide" ></div>
                </div>
                <div class="form-item">
                    <label style="font-size:18px">营业&nbsp;&nbsp;执照 :</label>
                    <input id="register_password" class="inputbox js_inputbox" name="licence1" type="file" minlength="6" maxlength="20"  required="" onchange="previewImage1(this)" />
                    <div id="preview1" ><img id="imghead1" border=0 src="/home/img/head_180.jpg" width="100" height="100" /></div>
                    <div class="g-error-tip hide"></div>
                </div>
                <div class="form-item">
                    <label style="font-size:18px">餐饮许可证:</label>
                    <input id="register_password" class="inputbox js_inputbox" name="licence2" type="file" minlength="6" maxlength="20"  required="" onchange="previewImage2(this)" />
                    <div id="preview2" ><img id="imghead2" border=0 src="/home/img/head_180.jpg" width="100" height="100" /></div>
                    <div class="g-error-tip hide"></div>
                </div>
                <div class="form-item">
                    <label style="font-size:18px">商&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;标:</label>
                    <input id="register_password" class="inputbox js_inputbox" name="slogo" type="file" minlength="6" maxlength="20"  required=""  onchange="previewImage3(this)" />
                    <div id="preview3" ><img id="imghead3" border=0 src="/home/img/head_180.jpg" width="100" height="100" /></div>
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
                <input type="hidden" name="status" value="0">
                <button class="g-btn g-btn-l g-btn-submit" type="submit">同意协议并提交</button>
            </form>
        </div>

        <div id="loading_mask" class="ui-wave-loader-mask hide">
            <i class="ui-wave-loader left"></i>
            <i class="ui-wave-loader middle"></i>
            <i class="ui-wave-loader right"></i>
        </div>
    </div>
    <aside class="panel">
        <img class="img" style="width:450px;height: 600px" src="/home/sh/images/banner-app.75596728.png" alt="随时随地轻松订餐" />
    </aside>
</div>
<footer class="site-footer group" role="contentinfo">
    <div class="container">
        <p class="sfooter-line"> <a class="sfooter-link" href="http://kaidian.ele.me">我要开店</a> | <a class="sfooter-link" href="contact.html">联系我们</a> | <a class="sfooter-link" href="http://ele.me/about/agreement">服务条款和协议</a> | <a class="sfooter-link" href="sitemaps.html">站点地图</a> | <a class="sfooter-link" href="http://ele.me/jobs">加入我们</a> </p>
        <p class="sfooter-line"> 增值电信业务许可证：<a class="sfooter-link sfooter-link-zero" target="_blank" rel="nofollow" href="http://www.shca.gov.cn">沪B2-20150033</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.miibeian.gov.cn">沪ICP备 09007032</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823">上海工商行政管理</a> Copyright &copy;2008-2015 ele.me, All Rights Reserved. </p>
    </div>
</footer>


<!-- UBT -->

<!-- fingerprint -->
<script language="javascript" type="text/javascript">

    function previewImage(file)
    {
        var MAXWIDTH  = 100;
        var MAXHEIGHT = 100;
        var div = document.getElementById('preview');


        if (file.files && file.files[0])
        {
            div.innerHTML ='<img id=imghead>';
            var img = document.getElementById('imghead');
            img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                img.style.marginTop = rect.top+'px';
            }
            var reader = new FileReader();
            reader.onload = function(evt){img.src = evt.target.result;}
            reader.readAsDataURL(file.files[0]);
        }
    }
    function previewImage1(file)
    {
        var MAXWIDTH  = 100;
        var MAXHEIGHT = 100;
        var div = document.getElementById('preview1');


        if (file.files && file.files[0])
        {
            div.innerHTML ='<img id=imghead1>';
            var img = document.getElementById('imghead1');
            img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                img.style.marginTop = rect.top+'px';
            }
            var reader = new FileReader();
            reader.onload = function(evt){img.src = evt.target.result;}
            reader.readAsDataURL(file.files[0]);
        }
    }
    function previewImage2(file)
    {
        var MAXWIDTH  = 100;
        var MAXHEIGHT = 100;
        var div = document.getElementById('preview2');


        if (file.files && file.files[0])
        {
            div.innerHTML ='<img id=imghead2>';
            var img = document.getElementById('imghead2');
            img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                img.style.marginTop = rect.top+'px';
            }
            var reader = new FileReader();
            reader.onload = function(evt){img.src = evt.target.result;}
            reader.readAsDataURL(file.files[0]);
        }
    }
    function previewImage3(file)
    {
        var MAXWIDTH  = 100;
        var MAXHEIGHT = 100;
        var div = document.getElementById('preview3');


        if (file.files && file.files[0])
        {
            div.innerHTML ='<img id=imghead3>';
            var img = document.getElementById('imghead3');
            img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                img.style.marginTop = rect.top+'px';
            }
            var reader = new FileReader();
            reader.onload = function(evt){img.src = evt.target.result;}
            reader.readAsDataURL(file.files[0]);
        }
    }

    function clacImgZoomParam( maxWidth, maxHeight, width, height ){
        var param = {top:0, left:0, width:width, height:height};
        if( width>maxWidth || height>maxHeight )
        {
            rateWidth = width / maxWidth;
            rateHeight = height / maxHeight;

            if( rateWidth > rateHeight )
            {
                param.width =  maxWidth;
                param.height = Math.round(height / rateWidth);
            }else
            {
                param.width = Math.round(width / rateHeight);
                param.height = maxHeight;
            }
        }

        param.left = Math.round((maxWidth - param.width) / 2);
        param.top = Math.round((maxHeight - param.height) / 2);
        return param;
    }

</script>
</body>
</html>