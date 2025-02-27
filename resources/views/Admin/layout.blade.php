<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- bootstrap-css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/css/morris.css')}}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('backend/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('backend/js/raphael-min.js')}}"></script>
    <script src="{{asset('backend/js/morris.js')}}"></script>

</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="{{URL::to('/dashboard')}}" class="logo">
                ADMIN
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->

        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">

                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown"  href="#">
                        <img alt="" src="{{('backend/images/2.png')}}">
                        <span class="username">
                    <?php
                            $name = Session::get('admin_name');
                            if ($name) {
                                echo $name;
                            }
                            ?>
                </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="{{URL::to('/account')}}"><i class=" fa fa-suitcase"></i>Hồ sơ</a></li>
                        <li><a href="{{URL::to('/account')}}"><i class="fa fa-cog"></i> Cài đặt</a></li>
                        <li><a href="{{URL::to('/logout-adm')}}"><i class="fa fa-key"></i> Đăng xuất</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="{{URL::to('/dashboard')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Tổng quan</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Quản lý đơn hàng</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/order-admin')}}">Danh sách đơn hàng</a></li>
                            {{--                            <li><a href="{{URL::to('/all-category-product')}}">Liệt kê doanh mục sản phẩm</a></li>--}}
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-product-hunt"></i>
                            <span>Sản phẩm</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/product/create')}}">Thêm sản phẩm</a></li>
                            <li><a href="{{URL::to('/product')}}">Liệt kê sản phẩm</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-list"></i>
                            <span>Danh mục sản phẩm</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/categories/create')}}">Thêm danh mục sản phẩm</a></li>
                            <li><a href="{{URL::to('/categories')}}">Liệt kê doanh mục sản phẩm</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-star-half-o  "></i>
                            <span>Thương hiệu sản phẩm</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/brand/create')}}">Thêm thương hiệu sản phẩm</a></li>
                            <li><a href="{{URL::to('/brand')}}">Liệt kê thương hiệu sản phẩm</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-users"></i>
                            <span>Quản lý tài khoản</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/account/create')}}">Thêm tài khoản</a></li>
                            <li><a href="{{URL::to('/account')}}">Danh sách tài khoản</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
        </section>
    </section>
    <!--main content end-->
</section>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
<script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!--[if lte IE 8]>
<script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->
<script>
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
    CKEDITOR.replace('ckeditor3');
    CKEDITOR.replace('ckeditor4');
    CKEDITOR.replace('ckeditor5');
    CKEDITOR.replace('ckeditor6');
    CKEDITOR.replace('ckeditor7');
    CKEDITOR.replace('ckeditor8');
</script>
<script>
    $(document).ready(function () {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function () {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function () {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function () {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }
    });
</script>
@yield('script')
</body>
</html>
