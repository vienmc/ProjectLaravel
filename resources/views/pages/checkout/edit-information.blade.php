@extends('layout')
@section('content')
    <div class="signup-form"><!--sign up form-->
        <h2>Sửa thông tin tài khoản</h2>
        <?php
        $message = Session::get('message');
        if ($message) {
            echo '<span style="color:#ff0000;font-size:17px;width: 100%;text-align: center;font-weight: bold;">' . $message . '</span>';
            Session::put('message', null);
        }
        ?>
        @if($errors -> has('phone'))
            <span class="error" style="color: red">
                                {{$errors -> first('phone')}}
                                    </span>
        @endif

        <form action="{{URL::to('/edit-information')}}" method="post" style="width: 35%">
            {{csrf_field()}}
            <input type="text" value="{{$account->name}}" required name="name" placeholder="Tên người dùng"/>

            <input type="text" value="{{$account->phone}}" required name="phone" placeholder="Số điện thoại"/>


            <input type="password" name="old_password" required placeholder="Mật khẩu cũ"/>

            <input type="password" name="new_password" required placeholder="Mật khẩu mới"/>

            <input type="password" name="confirm_password" required placeholder="Nhập lại mật khẩu"/>

            <button type="submit" class="btn btn-success">Hoàn thành</button>

        </form>
    </div>
@endsection
