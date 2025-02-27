@extends('Admin.layout')
@section('content')
    <div class="table-agile-info">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/order-admin" method="get" id="order_form">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlSelect1">Chọn theo trạng thái đơn
                                                hàng</label>
                                            <select name="shipping_status" class="form-control" id="order">
                                                <option value="0">Tất cả</option>
                                                <option value="1" {{$shipping_status == 1 ? 'selected':''}}>Chờ xác
                                                    nhận
                                                </option>
                                                <option value="2" {{$shipping_status == 2 ? 'selected':''}}>Đang vận
                                                    chuyển
                                                </option>
                                                <option value="3" {{$shipping_status == 3 ? 'selected':''}}>Hoàn thành
                                                </option>
                                                <option value="4" {{$shipping_status == 4 ? 'selected':''}}>Đã hủy
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tìm kiếm theo mã đơn hàng</label>
                                            <input value="{{$keyword_madonhang}}" type="text" name="keyword_madonhang"
                                                   class="form-control" placeholder="Search by keyword">
                                            <input type="submit" style="visibility: hidden;"/>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tìm kiếm theo tên khách
                                                hàng</label>
                                            <input value="{{$keyword_tenkhachhang}}" type="text"
                                                   name="keyword_tenkhachhang" class="form-control"
                                                   placeholder="Search by keyword">
                                            <input type="submit" style="visibility: hidden;"/>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tìm kiếm theo số điện
                                                thoại</label>
                                            <input value="{{$keyword_sodienthoai}}" type="text"
                                                   name="keyword_sodienthoai" class="form-control"
                                                   placeholder="Search by keyword">
                                            <input type="submit" style="visibility: hidden;"/>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="width: 500px;">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tìm kiếm theo thời gian</label>
                                            <input type="text" name="dates" class="form-control">
                                            <input type="hidden" name="start">
                                            <input type="hidden" name="end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách đơn hàng
            </div>

            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span style="color: green;font-size:17px;width: 100%;text-align: center;font-weight: bold;">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Mã khách hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Tên sản phẩm</th>
                        <th>Số điện thoại</th>
                        <th>Thành tiền</th>
                        <th>Trạng thái</th>
                        <th>Chi Tiết</th>
                    </tr>
                    </thead>
                    @foreach( $list as $item)
                        <tbody>
                        <td>{{$item -> id}}</td>
                        <td>{{$item -> account_id}}</td>
                        <td>{{$item -> shipping_name}}</td>
                        <td>@foreach($item->order_detail as $detail)
                                <div>{{$detail ->product_name}}</div>
                            @endforeach</td>
                        <td>{{$item -> shipping_phone}}</td>
                        <td>{{number_format($item-> total_money).' VNĐ'}}</td>

                            <td>
                                <form action={{URL::to('/change-status/'.$item->id)}} method="get" id="changestatus" style="width: 170px">
                                    @csrf
                                <select  onchange='this.form.submit()' name="ship_status" class="form-control" id="status">
                                    <option  value="1" {{$item->shipping_status ==1 ? 'selected':''}}>Chờ xác
                                        nhận
                                    </option>
                                    <option value="2" {{$item->shipping_status ==2 ? 'selected':''}}>Đang vận
                                        chuyển
                                    </option>
                                    <option value="3" {{$item->shipping_status ==3 ? 'selected':''}}>Hoàn thành
                                    </option>
                                    <option value="4" {{$item->shipping_status ==4 ? 'selected':''}}>Đã hủy
                                    </option>

                                </select>
                                </form>


                            </td>


                        <td>
                            <a href="{{URL::to('/order-admin/'.$item->id)}}"
                               class="active styling-edit" ui-toggle-class=""><i
                                    class="fa fa-info-circle text-success text-active"></i>
                            </a>
                        </td>
                        </tbody>
                    @endforeach
                </table>

            </div>
            <br>
            <span class="text-center">{{$list->links()}}</span>
        </div>
    </div>
    {{--    <script type="text/javascript">--}}
    {{--        $("#order_status").on('change',function (e){--}}
    {{--            console.log(e);--}}
    {{--            var order_status= e.target.value;--}}
    {{--            alert(order_status);--}}
    {{--        })--}}
    {{--    </script>--}}
@section('script')
    <script>
        $('input[name="dates"]').daterangepicker(
            {
                locale: {
                    format: 'DD/MM/YYYY'
                },
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }
        );
        $('#order').change(function () {
            $('#order_form').submit();
        })


        $('#status').change(function () {
            $(this).parents('#changestatus').submit();
        })


        $('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
            $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
            $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
            $('#order_form').submit();
            $('input[name="dates"]').val(setValue(picker.endDate.format('YYYY-MM-DD')));

        });
    </script>
@endsection
@endsection


