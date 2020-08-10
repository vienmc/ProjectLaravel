@extends('layout')
@section('content')
    <h2 class="title text-center">Thông tin tài khoản</h2>
    <?php
    $message = Session::get('message');
    if ($message) {
        echo '<span style="color: limegreen;font-size:17px;width: 100%;text-align: center;font-weight: bold;">' . $message . '</span>';
        Session::put('message', null);
    }
    ?>
<div class="title text-left" style="margin: 50px;">
    <h2>Email: {{$account->email}}</h2>
    <h2>Tên Người dùng: {{$account->name}}</h2>
    <h2>Số điện thoại: {{$account->phone}}</h2>
    <h2>Mật khẩu: **********</h2>

    <a href="/edit-information"><button class="btn btn-warning">Sửa thông tin tài khoản</button></a>

</div>
@endsection
