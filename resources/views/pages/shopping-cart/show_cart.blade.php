@extends('layout')
@section('content')
    <section id="cart_items">
        <div class="container col-sm-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                </ol>
            </nav>
            @if($shoppingCart !=null)
            <div class="table-responsive cart_info">
                @php
                    $totalMoney = 0;
                @endphp
                <table class="table table-responsive ">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image" style="padding-right: 50px">Hình ảnh</td>
                        <td class="description" style="width: 200px">Mô tả</td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Thành tiền</td>
                        <td>Lựa chọn</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shoppingCart as $key => $cartItem)
                        <tr>
                            <td class="cart_product">
                                <a href="/chi-tiet-san-pham/{{$cartItem['id']}}"><img src="{{$cartItem['thumbnail']}}"></a>
                            </td>
                            <td class="cart_description">
                                <a href="/chi-tiet-san-pham/{{$cartItem['id']}}"> {{$cartItem['product_name']}}</a>
                            </td>
                            <td class="cart_price">
                                <p>{{number_format($cartItem['product_price']).' VNĐ'}}</p>
                            </td>
                            <td class="cart_quantity">
                                <div style="display: inline">
                                <a class="fa fa-minus" href="/shopping-cart/add?id={{$cartItem['id']}}&quantity=-1"></a>&nbsp;
                                <span style="font-size: 1.5em">{{$cartItem['quantity']}}</span>&nbsp;
                                <a class="fa fa-plus" href="/shopping-cart/add?id={{$cartItem['id']}}&quantity=1"></a>
                                </div>
                            </td>
                            <td class="cart_total" style="font-size: 1.2em">
                                {{number_format($cartItem['quantity'] * $cartItem['product_price']).' VNĐ'}}
                                @php
                                    $totalMoney += $cartItem['quantity'] * $cartItem['product_price'];
                                @endphp
                            </td>
{{--                            nút xóa--}}
                            <td style="text-align: center">
                                <a href="/shopping-cart/remove?id={{$cartItem['id']}}"><span
                                        class="fa fa-trash-o"></span></a>&nbsp;
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->
    <section id="do_action">
        <div class="container col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Tạm tính <span>{{number_format($totalMoney).' VNĐ'}}</span></li>
                            <li>Phí vận chuyển <span>Free</span></li>
                            <li>Thành tiền <span style="color: #D81B60; font-size: 1.3em">{{number_format($totalMoney).' VNĐ'}}</span></li>
                        </ul>
                        <a class="btn btn-default update" href="/checkout">Tiến hành đặt hàng</a>

                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
    @else
    <div>Bạn chưa chọn mua sản phẩm nào. <a href="/">Quay lại</a></div>
    @endif
@endsection
