@extends('layout')
@section('content')
    <section id="cart_items">
        <div class="container col-sm-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Đơn Hàng</li>
                </ol>
            </nav>

            <div class="review-payment">
                <h4 style="margin: 40px 0; font-size: 20px">Xác nhận Đơn hàng</h4>
                <form method="post" action="{{URL::to('change-shipping')}}">
                    {{csrf_field()}}
                    <input type="submit" value="XÁC NHẬN" name="change_shipping">
                </form>
            </div>
    </section> <!--/#cart_items-->
@endsection
