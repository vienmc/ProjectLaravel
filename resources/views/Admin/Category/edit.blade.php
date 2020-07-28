@extends('Admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhập loại sản phẩm
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
                        <form role="form" action="{{URL::to('/update-categories/'.$categories->id)}}"
                              method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="brand_product_name">Tên</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="Tên" value="{{$categories->name}}"
                                       name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="brand_product_name">Mô tả</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="Mô tả" value="{{$categories->description}}"
                                       name="description" required>
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
