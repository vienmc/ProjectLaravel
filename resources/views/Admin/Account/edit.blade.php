@extends('Admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhập tài khoản
                </header>
{{--                <div style="color: red">--}}
{{--                    <span>{{$account}}</span>--}}
{{--                </div>--}}
                <div class="panel-body">
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo '<span style="color:red;font-size:17px;width: 100%;text-align: center;font-weight: bold;">' . $message . '</span>';
                        Session::put('message', null);
                    }
                    ?>

                        <div class="position-center">
                            <form role="form" action="{{URL::to('/update-account/'.$account->id)}}"
                                  method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="brand_product_name">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Tên thương hiệu" value="{{$account->email}}"
                                           name="email" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="brand_product_name">Tên</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="Tên" value="{{$account->name}}"
                                           name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="brand_product_name">Số điện thoại</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="Số điện thoại" value="{{$account->phone}}"
                                           name="phone" required>
                                </div>

                                <div class="form-group">
                                    <label for="roles">Quyền</label>
                                    <select name="roles" class="form-control input-sm m-bot15">
                                        <?php
                                        /** @var TYPE_NAME $account */
                                        if ($account->role == 1) {
                                        ?>
                                        <option value="1" selected>Admin</option>
                                        <option value="0">Người dùng</option>
                                        <?php
                                        }else{
                                        ?>
                                        <option value="1">Admin</option>
                                        <option value="0" selected>Người dùng</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div style="text-align: center">
                                    <button type="submit" name="update" class="btn btn-info">Cập nhập
                                    </button>
                                </div>
                            </form>
                        </div>

                </div>
            </section>

        </div>
    </div>
@endsection
