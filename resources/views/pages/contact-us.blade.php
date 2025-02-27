@extends('layout')
@section('content')
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Liên hệ <strong>với chúng tôi</strong></h2>
{{--                    <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">--}}
{{--                        <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"--}}
{{--                                style="border:0" allowfullscreen></iframe>--}}
{{--                    </div>--}}

                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-15">
                    <div class="contact-form">
                        <h2 class="title text-center">Liên lạc</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            @csrf
                            <div class="form-group col-md-6">
                                <input type="text" name="ContactUs_name" class="form-control" required="required" placeholder="Tên">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="ContactUs_email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="ContactUs_subject" class="form-control" required="required" placeholder="Chủ đề">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="ContactUs_message" id="message" required="required" class="form-control" rows="8" placeholder="Nội dung"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gửi ">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>

            </div>
            <div class="col-sm-15">
                <div class="contact-info">
                    <h2 class="title text-center">Thông tin liên hệ</h2>
                    <address style="text-align: center">
                        <p >E-Shopper Inc.</p>
                        <p>Số 8 , Tôn thất Thuyết</p>
                        <p>Hà Nội</p>
                        <p>Mobile: +84 788 7243</p>
                        <p>Fax: 1-714-252-0026</p>
                        <p>Email: info@e-shopper.com</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Mạng xã hội</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
@endsection
