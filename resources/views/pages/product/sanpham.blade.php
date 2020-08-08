@extends('layout')
@section('content')
    <div class="table-agile-info">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/san-pham" method="get" id="product_form">
                            @csrf
                            <div class="form-body">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlSelect1">Thể loại</label>
                                        <select name="category_id" class="form-control" id="categorySelect">
                                            <option value="0">All</option>
                                            @foreach($categories as $cate)
                                                <option value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlSelect1">Nhãn hiệu</label>
                                        <select name="brand_id" class="form-control" id="brandSelect">
                                            <option value="0">All</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}" {{$brand->id == $brand_id ? 'selected':''}}>{{$brand->brand_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlSelect1">Khoảng giá</label>

                                            <div>
                                                <input class="form-control" value="{{$price_min}}"  type="text" placeholder="Từ" name="price_min" style="width: 45%;text-align: center;float: left"><input class="form-control" value="{{$price_max}}" placeholder="đến" name="price_max" type="text" style="width: 45%;text-align: center;float: right">
                                            </div>


                                    </div>
                                </div>

                                    <div class="col-md-3">
                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlSelect1">Tìm kiếm sản phẩm</label>
                                            <input value="{{$keyword}}" type="text" name="keyword" class="form-control" placeholder="Nhập sản phẩm cần tìm">
                                            <input type="submit" style="visibility: hidden;" />
                                        </div>
                                    </div>



                                </div>


                            </div>


                            <input type="submit" class="btn btn-sm btn-warning button-search" style="width: auto"
                                   value="Tìm Kiếm"/>


                        </form>





                    </div>
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

