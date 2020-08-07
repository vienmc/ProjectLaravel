@extends('layout')
@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Đăng nhập tài khoản</h2>
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo '<span style="color:#ff0000;font-size:17px;width: 100%;text-align: center;font-weight: bold;">' . $message . '</span>';
                            Session::put('message', null);
                        }
                        ?>
                        <form action="{{URL::to('/login-customer')}}" method="post">
                            {{csrf_field()}}
                            <input type="text" name="login_email" placeholder="Tài khoản"/>
                            <input type="password" name="login_password" placeholder="Mật khẩu"/>
                            <span>
								<input type="checkbox" class="checkbox">
								Ghi nhớ
							</span>
                            <button type="submit" class="btn btn-default">Login</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">Hoặc</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Đăng ký tài khoản</h2>
                        <?php
                        $message = Session::get('message1');
                        if ($message) {
                            echo '<span style="color:#ff0000;font-size:17px;width: 100%;text-align: center;font-weight: bold;">' . $message . '</span>';
                            Session::put('message', null);
                        }
                        ?>

                        <form action="{{URL::to('/add-customer')}}" method="post">
                            {{csrf_field()}}
                            <input type="text" name="name" placeholder="Tên người dùng"/>
                            @if($errors -> has('name'))
                                <span class="error" style="color: red">
                                {{$errors -> first('name')}}
                                    </span>
                            @endif
                            <input type="text" name="phone" placeholder="Số điện thoại"/>
                            @if($errors -> has('phone'))
                                <span class="error" style="color: red">
                                {{$errors -> first('phone')}}
                                    </span>
                            @endif
                            <input type="email" name="email" placeholder="Địa chỉ email"/>
                            @if($errors -> has('email'))
                                <span class="error" style="color: red">
                                {{$errors -> first('email')}}
                                    </span>
                            @endif
                            <input type="password" name="password" placeholder="Password"/>
                            @if($errors -> has('password'))
                                <span class="error" style="color: red">
                                {{$errors -> first('password')}}
                                    </span>
                            @endif
                            <input type="password" name="confirm_password" placeholder="Nhập lại pass"/>
                            @if($errors -> has('confirm_password'))
                                <span class="error" style="color: red">
                                {{$errors -> first('confirm_password')}}
                                    </span>
                            @endif
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection
