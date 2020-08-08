@extends('layout')
@section('content')
    <section id="cart_items">
        <div class="container col-sm-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quản lý đơn hàng</li>
                </ol>
            </nav>
        </div>
        <table class="table container col-sm-12 response-area">
            <thead>
            <tr>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Ngày mua</th>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Trạng thái đơn hàng</th>
            </tr>
            </thead>
            @foreach($obj as $item)
            <tbody>
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->created_at}}</td>
                <td></td>
                <td>{{$item->total_money}}</td>
                <td>
                    @if($item->shipping_status == 0)
                        <span>Chưa xác nhận đơn hàng</span>
                    @elseif($item->shipping_status ==1)
                        <span>Đã xác nhận, đang đợi ship</span>
                    @endif
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>
        <span>{{$obj->links()}}</span>
    </section> <!--/#cart_items-->
@endsection
