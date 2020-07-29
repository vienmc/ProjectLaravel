@extends('Admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Tạo loại sản phẩm
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
                        <form role="form" action="{{URL::to('/categories')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="brand_product_name">Tên</label>
                                <input type="text" class="form-control"
                                       placeholder="Mật khẩu" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="brand_product_name">Mô tả</label>
                                <input type="text" class="form-control"
                                       placeholder="Mô tả" name="description" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select name="status" class="form-control input-sm m-bot15">
                                    <option value="1">Kích hoạt</option>
                                    <option value="0">Khóa</option>
                                </select>
                            </div>
                            <div style="text-align: center">
                                <button type="submit" name="add_brand_product" class="btn btn-info">Tạo
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
