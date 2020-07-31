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
                        <form role="form" action="{{URL::to('/product')}}" method="post" id="product_form">
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

                            <div class="form-group" style="max-width: 150px">
                                <label for="category_id">Danh mục sản phẩm</label>
                                <select name="category_id" class="form-control input-sm m-bot15">
                                    @foreach($category as $cate)
                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors -> has('category_id'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('category_id')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="brand_id">Thương hiệu sản phẩm</label>
                                <select name="brand_id" class="form-control input-sm m-bot15"  style="max-width: 150px">
                                    @foreach($brand as $bran)
                                        <option value="{{$bran->id}}">{{$bran->brand_name}}</option>
                                    @endforeach
                                </select>
                                @if($errors -> has('brand_id'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('brand_id')}}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group"  style="max-width: 150px">
                                <label for="product_price">Giá</label>
                                <input type="text" class="form-control" onChange="format_curency(this);"
                                       placeholder="Giá" name="product_price" required>
                                @if($errors -> has('product_price'))
                                    <span class="error" style="color: red">
                                {{$errors -> first('product_price')}}
                                    </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label >Hình ảnh</label>
                                    <div class="form-group">
                                        <button type="button" id="upload_widget" class="btn btn-primary">Thêm ảnh
                                        </button>
                                        <div class="thumbnails"></div>
                                    </div>
                                </div>
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

                            <div class="form-group" style="max-width: 150px">
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
@section('script')
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget(
            {
                cloudName: 'hoadaica',
                uploadPreset: 'hoadaica',
                multiple: true,
                form: '#product_form',
                fieldName: 'thumbnails[]',
                thumbnails: '.thumbnails'
            }, function (error, result) {
                if (!error && result && result.event === "success") {
                    console.log('Done! Here is the image info: ', result.info.url);
                    var arrayThumnailInputs = document.querySelectorAll('input[name="thumbnails[]"]');
                    for (let i = 0; i < arrayThumnailInputs.length; i++) {
                        arrayThumnailInputs[i].value = arrayThumnailInputs[i].getAttribute('data-cloudinary-public-id');
                    }
                }
            }
        );
        $('#upload_widget').click(function () {
            myWidget.open();
        })
        // xử lý js trên dynamic content.
        $('body').on('click', '.cloudinary-delete', function () {
            var splittedImg = $(this).parent().find('img').attr('src').split('/');
            var imgName = splittedImg[splittedImg.length - 1];
            imgName = imgName.replace('.jpg', '');
            $('input[data-cloudinary-public-id="' + imgName + '"]').remove();
        });
    </script>
{{--    <script type="text/javascript">--}}
{{--        function format_curency(a) {--}}
{{--            a.value = a.value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");--}}
{{--        }--}}
{{--    </script>--}}
@endsection
