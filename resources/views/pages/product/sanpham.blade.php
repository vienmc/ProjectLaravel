@extends('layout')
@section('content')
    <div class="table-agile-info">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/" method="get" id="product_form">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tìm kiếm sản phẩm</label>
                                            <input value="{{$keyword}}" type="text" name="keyword" class="form-control" placeholder="Nhập sản phẩm cần tìm">
                                            <input type="submit" style="visibility: hidden;" />
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </form>




                    </div>
                </div>
            </div>
        </div>
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Danh sách sản phẩm</h2>
        @foreach($all_product as $key =>$product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center" style="height:300px">
                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->id)}}">
                                    <img src="{{$product->small_photo}}" alt="" class="rounded-circle" style="width: 100px;height: 120px ">
                            </a>
                            <h2>{{number_format($product->product_price)}} VNĐ</h2>
                            <p>{{$product->product_name}}</p>
                            <a href="/shopping-cart/add?id={{$product->id}}&quantity=1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào
                                giỏ</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

            </div><!--features_items-->
    <br>
    <span class="text-center">{{$all_product->links()}}</span>
@endsection
