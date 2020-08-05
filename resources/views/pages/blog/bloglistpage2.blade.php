@extends('layout')
@section('content')
    <div class="blog-post-area">
        <h2 class="title text-center">Latest From our Blog</h2>
        <div class="single-blog-post">
            <h3>Girls Pink T Shirt arrived in store</h3>
            <div class="post-meta">
                <ul>
                    <li><i class="fa fa-user"></i> Mac Doe</li>
                    <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                    <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                </ul>
                <span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
            </div>
            <a href="">
                <img src="https://lh3.googleusercontent.com/proxy/gUpAcE56OESD3pVOotbN_gwDvxcFe8-WPsp0_AC-cKl9IMxtrURTcrk-yT-fHKysdSXm4g-SP6e0RGQXdEymxzgu2F1-3oiNWiwJjmEX8Z0UJZCuhBhgr6Kd9kjHxkaOArJOKJ1M6CM" alt="">
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a class="btn btn-primary" href="">Read More</a>
        </div>
        <div class="single-blog-post">
            <h3>Girls Pink T Shirt arrived in store</h3>
            <div class="post-meta">
                <ul>
                    <li><i class="fa fa-user"></i> Mac Doe</li>
                    <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                    <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                </ul>
                <span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
            </div>
            <a href="">
                <img src="https://i.pinimg.com/736x/e6/08/c6/e608c6d838d5f57bb2b899860aab8e1d.jpg" alt="">
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a class="btn btn-primary" href="">Read More</a>
        </div>
        <div class="single-blog-post">
            <h3>Girls Pink T Shirt arrived in store</h3>
            <div class="post-meta">
                <ul>
                    <li><i class="fa fa-user"></i> Mac Doe</li>
                    <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                    <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                </ul>
                <span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
            </div>
            <a href="">
                <img src="https://i.pinimg.com/736x/2a/15/d3/2a15d384d964fa9ccbf613122a64ac39.jpg" alt="">
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a class="btn btn-primary" href="">Read More</a>
        </div>
        <div class="pagination-area">
            <ul class="pagination">
                <li><a href="{{URL::to('/blog-list-page1')}}">1</a></li>
                <li><a href="{{URL::to('/blog-list-page2')}}" class="active" >2</a></li>
                <li><a href="{{URL::to('/blog-list-page3')}}" >3</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
@endsection
