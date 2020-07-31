@extends('Admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Tạo tài khoản
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
                        <form role="form" action="{{URL::to('/account')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="brand_product_name">Email</label>
                                <input type="email" class="form-control"
                                       placeholder="Email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="brand_product_name">Mật khẩu</label>
                                <input type="password" class="form-control"
                                       placeholder="Mật khẩu" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="brand_product_name">Tên</label>
                                <input type="text" class="form-control"
                                       placeholder="Mật khẩu" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="brand_product_name">Số điện thoại</label>
                                <input type="text" class="form-control"
                                       placeholder="Mật khẩu" name="phone" required style="max-width: 150px">
                            </div>

                            <div class="form-group">
                                <label for="roles">Quyền</label>
                                <select name="roles" class="form-control input-sm m-bot15" style="max-width: 100px">
                                    <option value="1">Admin</option>
                                    <option value="0">Người dùng</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select name="status" class="form-control input-sm" style="max-width: 100px">
                                    <option value="1">Kích hoạt</option>
                                    <option value="0">Khóa</option>
                                </select>
                            </div>

                            <div style="text-align: center">
                                <button type="submit" name="add_brand_product" class="btn btn-info">Tạo tài khoản
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
