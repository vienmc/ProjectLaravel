@extends('layout')
@section('content')
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Liên hệ <strong>với chúng tôi</strong></h2>
{{--                    <div id="gmap" class="contact-map">--}}
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

            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Contact Info</h2>
                    <address>
                        <p>E-Shopper Inc.</p>
                        <p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
                        <p>Newyork USA</p>
                        <p>Mobile: +2346 17 38 93</p>
                        <p>Fax: 1-714-252-0026</p>
                        <p>Email: info@e-shopper.com</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Social Networking</h2>
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
