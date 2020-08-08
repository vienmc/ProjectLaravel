@extends('layout')
@section('content')
    <section id="cart_items">
        <div class="container col-sm-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Xác nhận Đơn hàng</li>
                </ol>
            </nav>
            <div>
                <div class="review-payment">
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
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\Illuminate\Support\Facades\Session::get('shoppingCart') as  $cartItem)
                                <tr>
                                    <td class="cart_product">
                                        <a href="/chi-tiet-san-pham/{{$cartItem['id']}}"><img
                                                src="{{$cartItem['thumbnail']}}"></a>
                                    </td>
                                    <td class="cart_description">
                                        <a href="/chi-tiet-san-pham/{{$cartItem['id']}}"> {{$cartItem['product_name']}}</a>
                                    </td>
                                    <td class="cart_price">
                                        <p>{{number_format($cartItem['product_price']).' VNĐ'}}</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div style="display: inline">
                                            <span style="font-size: 1.5em">{{$cartItem['quantity']}}</span>&nbsp;
                                        </div>
                                    </td>
                                    <td class="cart_total" style="font-size: 1.2em">
                                        {{number_format($cartItem['quantity'] * $cartItem['product_price']).' VNĐ'}}
                                        @php
                                            $totalMoney += $cartItem['quantity'] * $cartItem['product_price'];
                                        @endphp
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="col-sm-4">
                        <div class="title" style="background-color: #90C9DC;padding: 10px">Địa chỉ người nhận</div>
                        <div class="content" style="margin-top: 10px; ">
                            <p class="name">Lê Hoàng Trình</p>
                            <p><span>Địa chỉ: </span>Chung Cư Sinh Viên Vinh Trung, Phường Trung Đô,
                                Thành phố Vinh, Nghệ An, Việt Nam</p>
                            <p class="phone"><span>Điện thoại: </span>0911549898</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="title" style="background-color: #90C9DC;padding: 10px">Hình thức giao hàng</div>
                        <div class="content" style="margin-top: 10px">
                            <p>Giao hàng vào thứ 3</p>
                            <p>Miễn phí vận chuyển</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="title" style="background-color: #90C9DC;padding: 10px">Hình thức thanh toán</div>
                        <div class="content" style="margin-top: 10px">
                            <p>Thanh toán tiền mặt khi nhận hàng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Tạm tính <span>{{number_format($totalMoney).' VNĐ'}}</span></li>
                        <li>Phí vận chuyển <span>Free</span></li>
                        <li>Tổng cộng <span
                                style="color: #D81B60; font-size: 1.3em">{{number_format($totalMoney).' VNĐ'}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="review-payment" style="text-align: center;">
                <form method="post" action="{{URL::to('change-shipping')}}">
                    {{csrf_field()}}
                    <input type="submit" value="XÁC NHẬN" name="change_shipping" style="padding:10px 20px; background-color: #dd4444">
                </form>
            </div>
    </section> <!--/#cart_items-->
@endsection
