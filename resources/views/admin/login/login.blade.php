<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="/admin/css/style.css" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="/admin/js/jquery.js"></script>
<script src="/admin/js/verificationNumbers.js"></script>
<script src="/admin/js/Particleground.js"></script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
  //测试提交，对接程序删除即可
//  $(".submit_btn").click(function(){
//	  location.href="login.blade.php";
//	  });
  function re_captcha() {
      $url = "{{ URL('/code/captcha') }}";
      $url = $url + "/" + Math.random();
      document.getElementById('127ddf0de5a04167a9e427d883690ff6').src = $url;
  }
});

</script>
</head>

<body>
<dl class="admin_login">
 <dt>
  <strong>elm 商家后台管理系统</strong>
  <em>Management System</em>
 </dt>
 @if(session('error'))
  <p style="color:red">{{session('error')}}</p>
 @endif



 <form action="{{url('/admin/dologin')}}" method="post">
 <dd class="user_icon">
  <input type="text" name = 'sname' placeholder="账号" class="login_txtbx"/>
  {{csrf_field()}}
 </dd>
 <dd class="pwd_icon">
  <input type="password" name = 'spassword' placeholder="密码" class="login_txtbx"/>
 </dd>
 <dd class="val_icon">
  <div class="checkcode" style="width:100px;margin-right:30px">
    <input type="text" id="J_codetext" placeholder="验证码" maxlength="6" class="login_txtbx"  name="code">
      {{--<canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>--}}
  </div>
     <img src="{{ url('/admin/captcha') }}" onclick="this.src='{{url('/admin/captcha')}}?'+Math.random()"">
  {{--<input type="button" value="验证码核验" class="ver_btn" onClick="validate();">--}}
 </dd>
 <dd>
  <input type="submit" value="立即登录" class="submit_btn"/>
 </dd>
 </form>
 <dd>
  <p>© 2015-2016 DeathGhost 版权所有</p>
  <p>陕B2-20080224-1</p>
 </dd>
</dl>

</body>
</html>
