<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商家注册</title>
    <link rel="stylesheet" href="/home/bs/css/bootstrap.css">
    <link rel="stylesheet" href="/home/bs/css/bootstrap.min.css">
    <script type="text/javascript" src='/home/bs/js/jquery.min.js'></script>
    <script type="text/javascript" src='/home/bs/js/bootstrap.min.js'></script>
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

</head>
<body>
@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li style='list-style:none;font-size:17px'>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container clrfix">
    <div >
        <span><i class="icon-users"></i>商家用户添加</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="{{url('home/saleuser/baocun')}}" method="post" enctype ="multipart/form-data">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">商家名:</label>
                    <div class="mws-form-item">
                        <input class="small" type="text" name='exname'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">店主:</label>
                    <div class="mws-form-item">
                        <input class="small" type="text" name='contacts'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">联系方式:</label>
                    <div class="mws-form-item">
                        <input class="small" type="text" name='exphone'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">店面地址:</label>
                    <div class="mws-form-item">
                        <input class="small" type="text" name='exaddr'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">门店图片:</label>
                    <div class="mws-form-item">
                        <input class="small" type="text" name='eximage'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">营业执照:</label>
                    <div class="mws-form-item">
                        <input class="small" type="text" name='licence1'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">营业许可证:</label>
                    <div class="mws-form-item">
                        <input class="small" type="text" name='licence2'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">商标:</label>
                    <div class="mws-form-item">
                        <input class="small" type="text" name='slogo'>
                    </div>
                </div>
            </div>
            {{ csrf_field() }}
            <div class="mws-button-row">
                <input value="注册商家" class="btn btn-danger" type="submit">

            </div>
        </form>
    </div>
</div>

</form>

</div>
</div>
</body>
</html>