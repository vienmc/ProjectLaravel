@extends('layout')
@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Sản phẩm mới</h2>
        @foreach($all_product as $key =>$product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->id)}}">
                                @foreach($product->small_photos as $p)
                                    <img src="{{$p}}" alt="" class="rounded-circle" style="width: 100px">
                                @endforeach
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
@endsection
