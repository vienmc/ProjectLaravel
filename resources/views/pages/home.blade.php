@extends('layout')
@section('left-sidebar')
    <div class="left-sidebar">
        <h2>Danh mục sản phẩm</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            @foreach($category as $key => $cate)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a
                                href="{{URL::to('/danh-muc-san-pham/'.$cate->id)}}">{{$cate->name}}</a>
                        </h4>
                    </div>
                </div>
            @endforeach
        </div>
        <!--/category-products-->

        <div class="brands_products"><!--brands_products-->
            <h2>Thương hiệu sản phẩm</h2>
            @foreach($brand as $key => $brand_product)
                <div class="brands-name">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand_product->id)}}">
                                            <span class="pull-right">
                                            @foreach($brand_product->product_brand as $count_brand)
                                                    {{$count_brand->brand_id}}
                                                @endforeach
                                            </span>{{$brand_product->brand_name}}
                            </a></li>
                    </ul>
                </div>
            @endforeach
        </div><!--/brands_products-->

        <div class="price-range"><!--price-range-->
            <h2>Price Range</h2>
            <div class="well text-center">
                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                       data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br/>
                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
            </div>
        </div><!--/price-range-->

        <div class="shipping text-center"><!--shipping-->
            <img src="{{asset('frontend/images/shipping.jpg')}}" alt=""/>
        </div><!--/shipping-->

    </div>
@endsection
@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Sản phẩm mới</h2>
        @foreach($all_product as $key =>$product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->id)}}">
                                    <img src="{{$product->small_photo}}" alt="" class="rounded-circle" style="width: 100px;height: 120px ">
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
        <br>
        <span class="text-center">{{$all_product->links()}}</span>

    </div><!--features_items-->
@endsection
