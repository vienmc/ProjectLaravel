@extends('Admin.layout')
@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
               Chi tiết đơn hàng
            </div>
            <table class="table table-striped b-t b-light">
                <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Tên sản phẩm</th>
                    <th>Số điện thoại</th>
                    <th>Thành tiền</th>
                    <th>Ngày/giờ tạo</th>
                    <th>Trạng thái</th>
                </tr></thead>
            <tbody>
            <td>{{$obj -> id}}</td>
            <td>{{$obj -> account_id}}</td>
            <td>{{$obj -> shipping_name}}</td>
            <td>{{$obj -> shipping_address}}</td>
            <td>@foreach($obj->order_detail as $detail)
                    <div>{{$detail ->product_name}}</div>
                @endforeach</td>
            <td>{{$obj -> shipping_phone}}</td>
            <td>{{number_format($obj-> total_money).' VNĐ'}}</td>
            <td>{{$obj -> updated_at}}</td>
            <td>
               @if($obj->shipping_status == 1)Chờ xác nhận
                @elseif($obj->shipping_status == 2)Đang vận chuyển
                @elseif($obj->shipping_status == 3)Hoàn thành
                @elseif($obj->shipping_status == 4)Đã hủy
                @endif
            </td>
            </tbody>
            </table>
{{--        {{$obj->name}}--}}
    </div>
    </div>
    </body>
@endsection
