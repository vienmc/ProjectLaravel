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
{{--                                    <div class="col-md-4">--}}
{{--                                        <div class="form-group mb-3">--}}
{{--                                            <label for="exampleFormControlSelect1">Chọn theo danh mục sản phẩm</label>--}}
{{--                                            <select name="category_id" class="form-control" id="categorySelect">--}}
{{--                                                <option value="0">Tất cả</option>--}}
{{--                                                @foreach($categories as $cate)--}}
{{--                                                    <option value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tìm kiếm theo mã đơn hàng</label>
                                            <input value="{{$keyword}}" type="text" name="keyword" class="form-control" placeholder="Search by keyword">
                                            <input type="submit" style="visibility: hidden;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tìm kiếm theo thời gian</label>
                                            <input type="text" name="dates" class="form-control">
                                            <input type="hidden" name="start" >
                                            <input type="hidden" name="end" >
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
                    echo '<span style="color:#1b6d85;font-size:17px;width: 100%;text-align: center;font-weight: bold;">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <table class="table table-striped b-t b-light" >
                    <thead>
                    <tr>
                        <th >Mã đơn hàng</th>
                        <th >Mã khách hàng</th>
                        <th >Tên khách hàng</th>
                        <th >Tên sản phẩm</th>
                        <th>Số điện thoại</th>
                        <th>Trạng thái</th>
                        <th>Quản lý</th>
                    </tr>
                    </thead>
                    @foreach( $list as $item)
                        <tbody>
                        <td>{{$item -> id}}</td>
                        <td>{{$item -> account_id}}</td>
                        <td>{{$item -> shipping_name}}</td>
                        <td>{{$item -> shipping_name}}</td>
                        <td>{{$item -> shipping_phone}}</td>
                        <td>{{$item -> shipping_status}}</td>
                        <td>
                            <a href="{{URL::to('/order-admin/'.$item->id.'/edit')}}"
                               class="active styling-edit" ui-toggle-class=""><i
                                    class="fa fa-pencil-square-o text-success text-active"></i>
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
    <script>
        var btnDeletes = document.getElementsByClassName('active styling-delete');
        for(var i = 0; i < btnDeletes.length; i++){
            btnDeletes[i].onclick = function(){
                if(confirm('Bạn có chắc muốn xóa sản phẩm này?')){
                    var id = this.getAttribute('title');
                    var xhr = new XMLHttpRequest();
                    xhr.open('DELETE', '/product/' + id);
                    xhr.setRequestHeader('X-CSRF-TOKEN', '{{csrf_token()}}');
                    xhr.onreadystatechange = function(){
                        if(xhr.readyState == 4 && xhr.status == 200) {
                            alert('Xóa thành công');
                            window.location.reload();
                        }
                    }
                    xhr.send();
                }
            }
        }
    </script>
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
        $('#categorySelect').change(function () {
            $('#order_form').submit();
        })
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
            $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
            $('#order_form').submit();
            $('input[name="dates"]').val(setValue(picker.endDate.format('YYYY-MM-DD')));

        });
    </script>
@endsection
@endsection


