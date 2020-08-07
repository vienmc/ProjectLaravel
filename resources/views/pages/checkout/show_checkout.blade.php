@extends('layout')
@section('content')
    <section id="cart_items">
        <div class="container col-sm-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thanh toán giỏ hàng</li>
                </ol>
            </nav>
            @if(\Illuminate\Support\Facades\Session::has('shoppingCart')!=null && \Illuminate\Support\Facades\Session::get('shoppingCart') !=null)
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
            <div class="shopper-informations">
                <div class="row col-sm-12">
                    <div>
                        <div class="bill-to">
                            <p>Thông tin gửi hàng</p>
                            <div class="form-one">
                                <form action="{{URL::to('save-checkout-customer')}}" method="post">
                                    {{csrf_field()}}
                                    <input required="required" type="email" name="shipping_email" placeholder="Email">
                                    @if($errors -> has('shipping_email'))
                                        <span class="error" style="color: red">
                                {{$errors -> first('shipping_email')}}
                                    </span>
                                    @endif
                                    <input required="required" type="text" name="shipping_name" placeholder="Họ và tên">
                                    @if($errors -> has('shipping_name'))
                                        <span class="error" style="color: red">
                                {{$errors -> first('shipping_name')}}
                                    </span>
                                    @endif
                                    <input required="required" type="text" name="shipping_address"
                                           placeholder="Địa chỉ">
                                    @if($errors -> has('shipping_address'))
                                        <span class="error" style="color: red">
                                {{$errors -> first('shipping_address')}}
                                    </span>
                                    @endif
                                    <input required="required" type="text" name="shipping_phone"
                                           placeholder="Số điện thoại">
                                    @if($errors -> has('shipping_phone'))
                                        <span class="error" style="color: red">
                                {{$errors -> first('shipping_phone')}}
                                    </span>
                                    @endif
                                    <textarea name="shipping_notes" placeholder="Ghi chú đơn hàng" rows="3"></textarea>
                                    @if($errors -> has('shipping_notes'))
                                        <span class="error" style="color: red">
                                {{$errors -> first('shipping_notes')}}
                                    </span>
                                    @endif
                                    <div>
                                        <button type="submit" class="btn btn-dark"
                                                style="background-color: #dc3545; margin-top: 10px; font-size: 1.6em">
                                            ĐẶT MUA
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="total_area">
                            <ul>
                                <li>Tạm tính <span>{{number_format($totalMoney).' VNĐ'}}</span></li>
                                <li>Phí vận chuyển <span>Free</span></li>
                                <li>Thành tiền <span
                                        style="color: #D81B60; font-size: 1.3em">{{number_format($totalMoney).' VNĐ'}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div>Không có sản phẩm nào được chọn, <a href="/">Quay lại</a></div>
            @endif
        </div>
    </section> <!--/#cart_items-->
@endsection
