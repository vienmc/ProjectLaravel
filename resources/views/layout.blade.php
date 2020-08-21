<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-Shoper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/jquery.toast.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('frontend/images/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{asset('frontend/images/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{asset('frontend/images/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed"
          href="{{asset('frontend/images/apple-touch-icon-57-precomposed.png')}}">
    <style>
        panel-heading:hover {
            color: red;
        }
    </style>
</head><!--/head-->
<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i>  project </a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> project@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/profile.php?id=100007104165477"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{URL::to('/')}}"><img src="{{asset('frontend/images/logo.png')}}" alt=""/></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                VN
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </button>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                VND
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <?php
                            $customer_id = Session::get('customer_id');

                            $customer_username = Session::get('customer_username');
                            if ($customer_id != null && $shipping_id == null){
                            ?>
                            <li><a href="{{URL::to('/checkout')}}"><i class=" fa fa-crosshairs"></i> Thanh toán</a></li>
                            <?php
                            }elseif ($customer_id != null && $shipping_id != null){
                            ?>
                            <li><a href="{{URL::to('/payment')}}"><i class=" fa fa-crosshairs"></i> Thanh toán</a></li>
                            <?php
                            }else{
                            ?>
                            <li><a href="{{URL::to('/login-checkout')}}"><i class=" fa fa-lock"></i> Thanh toán</a></li>
                            <?php } ?>
                            <li><a href="{{URL::to('/shopping-cart/show')}}"><i class="fa fa-shopping-cart"></i> Giỏ
                                    hàng</a>
                            </li>
                            <?php
                            $customer_id = Session::get('customer_id');
                            if ($customer_id != null){
                            ?>
                                <li>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                            {{$customer_username}}
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="/information">Thông tin tài khoản</a></li>
                                            <li><a href="{{URL::to('/order-management')}}">Thông tin đơn hàng</a></li>
                                            <li><a href="{{URL::to('/logout-checkout')}}">Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                </li>
                            <?php
                            }else{
                            ?>
                            <li><a href="{{URL::to('/information')}}"><i class=" fa fa-lock"></i> Đăng nhập</a></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{URL::to('/')}}" class="active">Trang chủ</a></li>
                            <li><a href="{{URL::to('/san-pham')}}">Sản Phẩm</a></li>
                            <li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{URL::to('/blog-list-page1')}}">Blog List</a></li>
                                    <li><a href="{{URL::to('/blog-single-1')}}">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="/q&a">Q&A</a></li>
                            <li><a href="/about-us">About us</a></li>
                            <li><a href="/contact-us">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2></h2>
                                <p>Lấy cảm hứng từ sự lãng mạn và tình yêu của người phụ nữ - SHOPPER tạo nên một bộ sưu tập đậm nét cổ điển nhưng không thiếu phần hiện đại và thời thượng</p>
                                <a href="/san-pham"><button type="button" class="btn btn-default get">Mua ngay</button></a>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('frontend/images/girl1.jpg')}}" class="girl img-responsive"
                                     alt=""/>
                                <img src="{{asset('frontend/images/pricing.png')}}" class="pricing" alt=""/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2></h2>
                                <p>Qua rồi mùa hè với sắc màu rực rỡ của những buổi tiệc, Thu là khi sự nhẹ nhàng tinh tế lên ngôi. Mùa thu năm nay, SHOPPER mang về giai đoạn thời trang phồn thịnh nhất của Sài Gòn năm xưa với chất liệu ren và vài thô sọc.</p>
                                <a href="/san-pham"><button type="button" class="btn btn-default get">Mua ngay</button></a>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('frontend/images/girl2.jpg')}}" class="girl img-responsive"
                                     alt=""/>
                                <img src="{{asset('frontend/images/pricing.png')}}" class="pricing" alt=""/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2></h2>
                                <p>Vẫn những kiểu dáng được ưa chuộng như áo croptop, culottes, đầm chiết eo, etc. nhưng nay thay đổi chất liệu và chi tiết; tất cả đều mang đến sự mới mẻ và thời thượng.</p>
                                <a href="/san-pham"><button type="button" class="btn btn-default get">Mua ngay</button></a>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('frontend/images/girl3.jpg')}}" class="girl img-responsive"
                                     alt=""/>
                                <img src="{{asset('frontend/images/pricing.png')}}" class="pricing" alt=""/>
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

                <div class="left-sidebar">
                    <h2>Danh mục sản phẩm</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($category1 as $key => $cate)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a
                                            href="{{URL::to('/danh-muc-san-pham/'.$cate->id)}}">{{$cate->name}}</a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                        @if(sizeof($category2) > 0)
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" style="width: 250px" type="button"
                                        data-toggle="dropdown">Xem thêm
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu" style="width: 250px">
                                    @foreach($category2 as $key => $cate2)
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a
                                                        href="{{URL::to('/danh-muc-san-pham/'.$cate2->id)}}">{{$cate2->name}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Thương hiệu sản phẩm</h2>
                        @foreach($brand1 as $key => $brand_product)
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand_product->id)}}">
                                            <div style="display: none">
                                                <?php
                                                $count = 0;
                                                ?>
                                                @foreach($brand_product->product_brand as $count_brand)
                                                    {{$count_brand->brand_id}}
                                                    {{$count++}}
                                                @endforeach
                                            </div>
                                            <span class="pull-right">{{$count}}</span>
                                            {{$brand_product->brand_name}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                        @if(sizeof($brand2) > 0)
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" style="width: 250px" type="button"
                                        data-toggle="dropdown">Xem thêm
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    @foreach($brand2 as $key => $brand_product)
                                        <div class="brands-name" style="width: 250px">
                                            <ul class="nav nav-pills nav-stacked">
                                                <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand_product->id)}}">
                                                        <div style="display: none">
                                                            <?php
                                                            $count = 0;
                                                            ?>
                                                            @foreach($brand_product->product_brand as $count_brand)
                                                                {{$count_brand->brand_id}}
                                                                {{$count++}}
                                                            @endforeach
                                                        </div>
                                                        <span class="pull-right">{{$count}}</span>
                                                        {{$brand_product->brand_name}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div><!--/brands_products-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="{{asset('frontend/images/shipping.jpg')}}" alt=""/>
                    </div><!--/shipping-->

                </div>

            </div>

            <div class="col-sm-9">
                @yield('content')
            </div>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>e</span>-shopper</h2>
                        <p style="color: #D81B60; font-size: 18px">Luôn luôn lắng nghe <br> Luôn luôn thấu hiểu</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('frontend/images/iframe1.png')}}" alt=""/>
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Sự kiện</p>
                            <h2>15-05-2017</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('frontend/images/iframe2.png')}}" alt=""/>
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Sự kiện</p>
                            <h2>15-05-2018</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('frontend/images/iframe3.png')}}" alt=""/>
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Sự kiện</p>
                            <h2>15-05-2019</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('frontend/images/iframe4.png')}}" alt=""/>
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Sự kiện</p>
                            <h2>15-05-2020</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="{{asset('frontend/images/map.png')}}" alt=""/>
                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>DỊCH VỤ</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Trợ giúp trực tuyến</a></li>
                            <li><a href="#">Liên hệ chúng tôi</a></li>
                            <li><a href="#">Tình trạng đặt hàng</a></li>
                            <li><a href="#">Thay đổi địa điểm</a></li>
                            <li><a href="#">Câu hỏi thường gặp</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>CHÍNH SÁCH</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Điều khoản sử dụng</a></li>
                            <li><a href="#">Chính sách đặc quyền</a></li>
                            <li><a href="#">Chính sách hoàn tiền</a></li>
                            <li><a href="#">Hệ thống thanh toán</a></li>
                            <li><a href="#">Hệ thống tích điểm</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>GIỚI THIỆU VỀ CỬA HÀNG</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Thông tin công ty</a></li>
                            <li><a href="#">Nghề nghiệp</a></li>
                            <li><a href="#">Vị trí cửa hàng</a></li>
                            <li><a href="#">Chương trình liên kết</a></li>
                            <li><a href="#">Bản quyền</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>ĐĂNG KÝ NHẬN TIN TỨC TỪ CHÚNG TÔI</h2>
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo '<span style="color:#ff0000;font-size:17px;width: 100%;text-align: center;font-weight: bold;">' . $message . '</span>';
                            Session::put('message', null);
                        }
                        ?>
                        <form action="{{URL::to('/a')}}" class="searchform" method="post">
                            @csrf
                            <input type="text" name="email_subscribers" placeholder="Địa chỉ email của bạn"/>
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i>
                            </button>
                            <p>Nhận các bản cập nhật mới nhất từ <br/>trang web của chúng tôi và được tự cập nhật ...
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2020 E-SHOPPER Inc. All rights reserved.</p>

            </div>
        </div>
    </div>

</footer><!--/Footer-->


<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontend/js/price-range.js')}}"></script>
<script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/jquery.toast.js')}}"></script>

<script>
    $('#categorySelect').change(function () {
        $('#product_form').submit();
    })
    $('#brandSelect').change(function () {
        $('#product_form').submit();
    })
    $('.add-to-cart').on('click', function (e) {
        $.toast({
            text: "Thêm sản phẩm vào giỏ hàng thành công!", // Text that is to be shown in the toast
            heading: 'Chúc mừng', // Optional heading to be shown on the toast
            icon: 'success', // Type of toast icon
            showHideTransition: 'plain', // fade, slide or plain
            allowToastClose: true, // Boolean value true or false
            hideAfter: 2000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
            stack: 1, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
            position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
            textAlign: 'left',  // Text alignment i.e. left, right or center
            loader: true,  // Whether to show loader or not. True by default
            loaderBg: '#9EC600',  // Background color of the toast loader
        });
    });


    $("img.img-small").click(function () {
        var ele = $(this);
        var src = ele.attr('src');
        $("img#large-photo").attr('src', src);

    })


</script>
</body>
</html>
