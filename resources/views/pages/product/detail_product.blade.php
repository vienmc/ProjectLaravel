@extends('layout')
@section('content')

        <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                        <img src="{{$detail_product->large_photo}}" alt="">
                </div>
                <div id="similar-product" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            @foreach($detail_product->smalls_photos as $p)
                                <a href=""> <img src="{{$p}}" alt=""></a>
                            @endforeach

                        </div>
                        <div class="item">
                            @foreach($detail_product->smalls_photos as $p)
                                <a href=""> <img src="{{$p}}" alt=""></a>
                            @endforeach
                        </div>
                        <div class="item">
                            @foreach($detail_product->smalls_photos as $p)
                                <a href=""> <img src="{{$p}}" alt=""></a>
                            @endforeach
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left item-control" href="#similar-product" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-product" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    <img src="https://res.cloudinary.com/hoadaica/image/upload/v1596458004/new_u2jwsl.jpg" class="newarrival" alt=""/>
                    <h2>{{$detail_product->product_name}}</h2>
                    <p>ID sản phẩm: {{$detail_product->id}}</p>
                    <img src="https://res.cloudinary.com/hoadaica/image/upload/v1596458169/rating_t4idd3.png" alt=""/>
                    <form method="get" action="/shopping-cart/add?id=?&quantity=?" role="form">
                        {{csrf_field()}}
                        <span>
									<span>{{number_format($detail_product->product_price)}} VNĐ</span>
									<label>Số lượng:</label>
									<input type="number" name="quantity" min="1" value="1"/>
									<input type="hidden" name="id" value="{{$detail_product->id}}"/>
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng
									</button>
								</span>
                    </form>
                    <p><b>Tình trạng:</b> Còn hàng</p>
                    <p><b>Điều kiện:</b> Mới</p>
                    <p><b>Thương hiệu:</b> {{$detail_product->brand->brand_name}}</p>
                    <p><b>Danh mục:</b> {{$detail_product->category->name}}</p>
                    <a href=""><img src="https://res.cloudinary.com/hoadaica/image/upload/v1596458563/share_fpdyfe.png" class="share img-responsive"
                                    alt=""/></a>
                </div><!--/product-information-->
            </div>
        </div><!--/product-details-->

        <div class="category-tab shop-details-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">Mô tả sản phẩm</a></li>

                    <li><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="details">
                    <p>{{$detail_product->product_desc}}</p>
                </div>



                <div class="tab-pane fade" id="reviews">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                        </ul>
                        <p>Xấu</p>
                        <p><b>Write Your Review</b></p>

                        <form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
                            <textarea name=""></textarea>
                            <b>Rating: </b> <img src="{{asset('public/frontend/images/rating.png')}}" alt=""/>
                            <button type="button" class="btn btn-default pull-right">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div><!--/category-tab-->


    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">Sản phẩm gợi ý</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    @foreach($relate->chunk(3)[0] as $key => $item)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{URL::to('/chi-tiet-san-pham/'.$item->id)}}">
                                            <img src="{{$item->large_photo}}"
                                                 width="100"
                                                 height="250" alt=""/>
                                        </a>
                                        <h2>{{number_format($item->product_price)}} VNĐ</h2>
                                        <p>{{$item->product_name}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if(count($relate->chunk(3)->toArray())>1)
                <div class="item">
                    @foreach($relate->chunk(3)[1] as $key => $item)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{URL::to('/chi-tiet-san-pham/'.$item->id)}}">
                                            <img src="{{$item->large_photo}}"
                                                 width="100"
                                                 height="250" alt=""/>
                                        </a>
                                        <h2>{{number_format($item->product_price)}} VNĐ</h2>
                                        <p>{{$item->product_name}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
                @if(count($relate->chunk(3)->toArray())>2)
                <div class="item">
                    @foreach($relate->chunk(3)[2] as $key => $item)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{URL::to('/chi-tiet-san-pham/'.$item->id)}}">
                                            <img src="{{$item->large_photo}}"
                                                 width="100"
                                                 height="250" alt=""/>
                                        </a>
                                        <h2>{{number_format($item->product_price)}} VNĐ</h2>
                                        <p>{{$item->product_name}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                @endif











                {{--                <div class="item">--}}
                {{--                    <div class="col-sm-4">--}}
                {{--                        <div class="product-image-wrapper">--}}
                {{--                            <div class="single-products">--}}
                {{--                                <div class="productinfo text-center">--}}
                {{--                                    <img src="{{asset('public/frontend/images/recommend1.jpg')}}" alt=""/>--}}
                {{--                                    <h2>$56</h2>--}}
                {{--                                    <p>Easy Polo Black Edition</p>--}}
                {{--                                    <button type="button" class="btn btn-default add-to-cart"><i--}}
                {{--                                            class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng--}}
                {{--                                    </button>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="col-sm-4">--}}
                {{--                        <div class="product-image-wrapper">--}}
                {{--                            <div class="single-products">--}}
                {{--                                <div class="productinfo text-center">--}}
                {{--                                    <img src="{{asset('public/frontend/images/recommend2.jpg')}}" alt=""/>--}}
                {{--                                    <h2>$56</h2>--}}
                {{--                                    <p>Easy Polo Black Edition</p>--}}
                {{--                                    <button type="button" class="btn btn-default add-to-cart"><i--}}
                {{--                                            class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng--}}
                {{--                                    </button>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="col-sm-4">--}}
                {{--                        <div class="product-image-wrapper">--}}
                {{--                            <div class="single-products">--}}
                {{--                                <div class="productinfo text-center">--}}
                {{--                                    <img src="{{asset('public/frontend/images/recommend3.jpg')}}" alt=""/>--}}
                {{--                                    <h2>$56</h2>--}}
                {{--                                    <p>Easy Polo Black Edition</p>--}}
                {{--                                    <button type="button" class="btn btn-default add-to-cart"><i--}}
                {{--                                            class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng--}}
                {{--                                    </button>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>

            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div><!--/recommended_items-->
@endsection

