@extends('Admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Sửa thương hiệu sản phẩm
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
                        <form role="form" action="/brand/{{$obj->id}}" method="post">
                            {{csrf_field()}}
                            @method('put')
                            <div class="form-group">
                                <label for="product_name">Tên thương hiệu sản phẩm</label>
                                <input type="text" class="form-control"
                                       placeholder="Tên thương hiệu sản phẩm" name="brand_name"
                                       value="{{$obj->brand_name}}"
                                       required >
                                @if($errors -> has('product_name'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('product_name')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="brand_desc">Mô tả thương hiệu sản phẩm</label>
                                <textarea style="resize: none" rows="5" class="form-control"
                                          id="ckeditor1"
                                          placeholder="Mô tả sản phẩm" name="brand_desc"
                                          >{{$obj->brand_desc}}</textarea>
                                @if($errors -> has('brand_desc'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('brand_desc')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="brand_status">Trạng thái</label>
                                <select name="brand_status" class="form-control input-sm m-bot15">
                                    @if($obj -> brand_status ==1)
                                        <option selected value="1">Hiện</option>
                                        <option value="0">Ẩn</option>
                                    @else
                                        <option value="1">Hiện</option>
                                        <option selected value="0">Ẩn</option>
                                    @endif
                                </select>
                            </div>
                            <div style="text-align: center">
                                <button type="submit" name="add_brand" class="btn btn-info">Sửa sản phẩm
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
