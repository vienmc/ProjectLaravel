@extends('layout')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="active">Thanh toán giỏ hàng</li>
                </ol>
            </div>

            <div class="register-req">
                <p>Hãy đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
            </div><!--/register-req-->

            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <p>Thông tin gửi hàng</p>
                            <div class="form-one">
                                <form action="{{URL::to('save-checkout-customer')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="email" name="shipping_email" placeholder="Email">
                                    <input type="text" name="shipping_name" placeholder="Họ và tên">
                                    <input type="text" name="shipping_address" placeholder="Địa chỉ">
                                    <input type="text" name="shipping_phone" placeholder="Số điện thoại">
                                    <textarea name="shipping_notes" placeholder="Ghi chú đơn hàng" rows="16"></textarea>
                                    <input type="submit" value="Gủi" name="send_order" class="btn btn-primary btn-sm">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="review-payment">
                <h2>Xem lại giỏ hàng</h2>
            </div>

{{--            <div class="table-responsive cart_info">--}}
{{--                <?php--}}
{{--                $content = Cart::content();--}}
{{--                $tax_rate = 10;--}}
{{--                config(['cart.tax' => $tax_rate]);--}}
{{--                ?>--}}
{{--                <table class="table table-responsive">--}}
{{--                    <thead>--}}
{{--                    <tr class="cart_menu">--}}
{{--                        <td class="image" style="width: 10%">Hình ảnh</td>--}}
{{--                        <td class="description" style="width: 35%">Mô tả</td>--}}
{{--                        <td class="price" style="width: 15%">Giá</td>--}}
{{--                        <td class="quantity" style="width: 20%">Số lượng</td>--}}
{{--                        <td class="total" style="width: 15%">Tổng tiền</td>--}}
{{--                        <td style="width: 5%"></td>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($content as $v_content)--}}
{{--                        <tr>--}}
{{--                            <td class="cart_product">--}}
{{--                                <a href=""><img src="{{URL::to('/public/uploads/product/'.$v_content->options->image)}}"--}}
{{--                                                width="50" height="50" alt=""></a>--}}
{{--                            </td>--}}
{{--                            <td class="cart_description">--}}
{{--                                <h4><a href="">{{$v_content->name}}</a></h4>--}}
{{--                                <p>ID sản phẩm: {{$v_content->id}}</p>--}}
{{--                            </td>--}}
{{--                            <td class="cart_price">--}}
{{--                                <p>{{number_format($v_content->price)}}</p>--}}
{{--                            </td>--}}
{{--                            <td class="cart_quantity">--}}
{{--                                <div class="cart_quantity_button">--}}
{{--                                    <form action="{{URL::to('/update-cart-quantity')}}" method="post">--}}
{{--                                        {{csrf_field()}}--}}
{{--                                        <input class="cart_quantity_input" type="number" name="update_cart_quantity"--}}
{{--                                               value="{{$v_content->qty}}" min="1"--}}
{{--                                               style="width: 30%; margin-right: 5px">--}}
{{--                                        <input type="submit" value="Cập nhập" name="update_quantity"--}}
{{--                                               class="btn btn-default btn-sm">--}}
{{--                                        <input type="hidden" value="{{$v_content->rowId}}" name="rowId_in_cart">--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="cart_total">--}}
{{--                                <p class="cart_total_price">--}}
{{--                                    <?php--}}
{{--                                    /** @var TYPE_NAME $v_content */--}}
{{--                                    $total = $v_content->price * $v_content->qty;--}}
{{--                                    echo number_format($total);--}}
{{--                                    ?>--}}
{{--                                </p>--}}
{{--                            </td>--}}
{{--                            <td class="cart_delete">--}}
{{--                                <a class="cart_quantity_delete"--}}
{{--                                   href="{{URL::to('/delete-item-in-cart/'.$v_content->rowId)}}"><i--}}
{{--                                        class="fa fa-times"></i></a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--            <div class="payment-options">--}}
{{--					<span>--}}
{{--						<label><input type="checkbox"> Direct Bank Transfer</label>--}}
{{--					</span>--}}
{{--                <span>--}}
{{--						<label><input type="checkbox"> Check Payment</label>--}}
{{--					</span>--}}
{{--                <span>--}}
{{--						<label><input type="checkbox"> Paypal</label>--}}
{{--					</span>--}}
{{--            </div>--}}
        </div>
    </section> <!--/#cart_items-->
@endsection
