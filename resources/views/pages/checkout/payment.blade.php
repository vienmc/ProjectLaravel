@extends('layout')
@section('content')
    <section id="cart_items">
        <div class="container col-sm-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hình thức thanh toán</li>
                </ol>
            </nav>

            <div class="review-payment">
                <h4 style="margin: 40px 0; font-size: 20px">Hình thức thanh toán</h4>
                <form method="post" action="{{URL::to('/order-place')}}">
                    {{csrf_field()}}
                    <div class="payment-options">
                        <span class="fa fa-money col-sm-2" style="font-size: 5em"></span>
                        <br>
						<label class="col-sm-2"><input name="payment_option" value="1" type="checkbox"> Tiền mặt</label>
                        <button type="submit" class="btn btn-dark col-sm-3"
                                style="background-color: #dc3545; font-size: 1.6em">
                            HOÀN TẤT
                        </button>
                    </div>

                </form>
            </div>
    </section> <!--/#cart_items-->
@endsection
