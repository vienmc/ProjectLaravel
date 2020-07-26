@extends('Admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm sản phẩm
                    <mới></mới>
                </header>
                <div class="panel-body">
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo '<span style="color:red;font-size:17px;width: 100%;text-align: center;font-weight: bold;">' . $message . '</span>';
                        Session::put('message', null);
                    }
                    ?>
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/product')}}" method="post">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="product_name">Tên sản phẩm</label>
                                <input type="text" class="form-control"
                                       placeholder="Tên sản phẩm" name="product_name" required>
                                @if($errors -> has('product_name'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('product_name')}}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="product_category">Danh mục sản phẩm</label>
                                <select name="product_category" class="form-control input-sm m-bot15">
                                    @foreach($category as $cate)
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endforeach
                                </select>
                                @if($errors -> has('product_category'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('product_category')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="product_brand">Thương hiệu sản phẩm</label>
                                <select name="product_brand" class="form-control input-sm m-bot15">
                                    @foreach($brand as $bran)
                                        <option value="{{$bran->brand_id}}">{{$bran->brand_name}}</option>
                                    @endforeach
                                </select>
                                @if($errors -> has('product_brand'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('product_brand')}}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="product_price">Giá</label>
                                <input type="text" class="form-control"
                                       placeholder="Giá" name="product_price" required>
                                @if($errors -> has('product_price'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('product_price')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="product_image">Ảnh</label>
                                <input type="text" class="form-control"
                                       placeholder="Ảnh" name="product_image" required>
                                @if($errors -> has('product_image'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('product_image')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="product_desc">Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="5" class="form-control"
                                          id="ckeditor1"
                                          placeholder="Mô tả sản phẩm" name="product_desc"></textarea>
                                @if($errors -> has('product_desc'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('product_desc')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="product_content">Nội dung sản phẩm</label>
                                <textarea style="resize: none" rows="5" class="form-control"
                                          id="ckeditor2"
                                          placeholder="Nội dung sản phẩm" name="product_content"></textarea>
                                @if($errors -> has('product_content'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('product_content')}}
                                    </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="product_status">Trạng thái</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>

                            <div style="text-align: center">
                                <button type="submit" name="add_product" class="btn btn-info">Tạo sản phẩm
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
