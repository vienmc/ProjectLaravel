@extends('layout')
@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Sản phẩm mới</h2>
        @foreach($all_product as $key =>$product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" width="100"
                                     height="250" alt=""/>
                            </a>
                            <h2>{{number_format($product->product_price)}} VNĐ</h2>
                            <p>{{$product->product_name}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào
                                giỏ</a>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Thêm vào yêu thích</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Thêm vào so sánh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div><!--features_items-->

    {{--                    <div class="category-tab"><!--category-tab-->--}}
    {{--                        <div class="col-sm-12">--}}
    {{--                            <ul class="nav nav-tabs">--}}
    {{--                                <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>--}}
    {{--                                <li><a href="#blazers" data-toggle="tab">Blazers</a></li>--}}
    {{--                                <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>--}}
    {{--                                <li><a href="#kids" data-toggle="tab">Kids</a></li>--}}
    {{--                                <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                        <div class="tab-content">--}}
    {{--                            <div class="tab-pane fade active in" id="tshirt" >--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery1.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery2.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery3.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery4.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="tab-pane fade" id="blazers" >--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery4.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery3.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery2.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery1.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="tab-pane fade" id="sunglass" >--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery3.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery4.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery1.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery2.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="tab-pane fade" id="kids" >--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery1.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery2.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery3.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery4.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="tab-pane fade" id="poloshirt" >--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery2.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery4.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery3.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-3">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{('public/frontend/images/gallery1.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div><!--/category-tab-->--}}

    {{--                    <div class="recommended_items"><!--recommended_items-->--}}
    {{--                        <h2 class="title text-center">recommended items</h2>--}}

    {{--                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">--}}
    {{--                            <div class="carousel-inner">--}}
    {{--                                <div class="item active">--}}
    {{--                                    <div class="col-sm-4">--}}
    {{--                                        <div class="product-image-wrapper">--}}
    {{--                                            <div class="single-products">--}}
    {{--                                                <div class="productinfo text-center">--}}
    {{--                                                    <img src="{{('public/frontend/images/recommend1.jpg')}}" alt="" />--}}
    {{--                                                    <h2>$56</h2>--}}
    {{--                                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                                </div>--}}

    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-sm-4">--}}
    {{--                                        <div class="product-image-wrapper">--}}
    {{--                                            <div class="single-products">--}}
    {{--                                                <div class="productinfo text-center">--}}
    {{--                                                    <img src="{{('public/frontend/images/recommend2.jpg')}}" alt="" />--}}
    {{--                                                    <h2>$56</h2>--}}
    {{--                                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                                </div>--}}

    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-sm-4">--}}
    {{--                                        <div class="product-image-wrapper">--}}
    {{--                                            <div class="single-products">--}}
    {{--                                                <div class="productinfo text-center">--}}
    {{--                                                    <img src="{{('public/frontend/images/recommend3.jpg')}}" alt="" />--}}
    {{--                                                    <h2>$56</h2>--}}
    {{--                                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                                </div>--}}

    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="item">--}}
    {{--                                    <div class="col-sm-4">--}}
    {{--                                        <div class="product-image-wrapper">--}}
    {{--                                            <div class="single-products">--}}
    {{--                                                <div class="productinfo text-center">--}}
    {{--                                                    <img src="{{('public/frontend/images/recommend1.jpg')}}" alt="" />--}}
    {{--                                                    <h2>$56</h2>--}}
    {{--                                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                                </div>--}}

    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-sm-4">--}}
    {{--                                        <div class="product-image-wrapper">--}}
    {{--                                            <div class="single-products">--}}
    {{--                                                <div class="productinfo text-center">--}}
    {{--                                                    <img src="{{('public/frontend/images/recommend2.jpg')}}" alt="" />--}}
    {{--                                                    <h2>$56</h2>--}}
    {{--                                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                                </div>--}}

    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-sm-4">--}}
    {{--                                        <div class="product-image-wrapper">--}}
    {{--                                            <div class="single-products">--}}
    {{--                                                <div class="productinfo text-center">--}}
    {{--                                                    <img src="{{('public/frontend/images/recommend3.jpg')}}" alt="" />--}}
    {{--                                                    <h2>$56</h2>--}}
    {{--                                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                                </div>--}}

    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">--}}
    {{--                                <i class="fa fa-angle-left"></i>--}}
    {{--                              </a>--}}
    {{--                              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">--}}
    {{--                                <i class="fa fa-angle-right"></i>--}}
    {{--                              </a>--}}
    {{--                        </div>--}}
    {{--                    </div><!--/recommended_items-->--}}

@endsection
