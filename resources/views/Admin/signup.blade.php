<!DOCTYPE html>
<head>
    <title>Đăng ký tài khoản admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{('backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Đăng ký tài khoản</h2>
        @if(strlen($msgcheck)>0)
            <div style="color: red">{{$msgcheck}}</div>
        @endif

        <div style="color: red">
            <ul>
                @foreach($errors->all() as $msg)
                    <li>{{$msg}}</li>
                @endforeach
            </ul>
        </div>
        <form action="{{URL::to('/do-signup')}}" method="post">
            {{csrf_field()}}
            <input type="email" class="ggg" name="email" placeholder="Điền Email" value="{{old('email')}}" required>
            <input type="password" class="ggg" name="password" placeholder="Điền mật khẩu" required>
            <input type="password" class="ggg" name="confirm_password" placeholder="Nhập lại mật khẩu" required>
            <input type="text" class="ggg" name="name" value="{{old('name')}}" placeholder="Điền tên" required>
            <input type="text" class="ggg" name="phone" value="{{old('phone')}}" placeholder="Điền số điện thoại" required>
            <div class="clearfix"></div>
            <input type="submit" value="Đăng ký" name="login">
        </form>
    </div>
</div>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]>
<script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
