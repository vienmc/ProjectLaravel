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
            <img src="https://i.imgur.com/6Ci0Pwg.jpg" alt="">
        </a>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <a class="btn btn-primary" href="{{URL::to('/blog-single-1')}}">Read More</a>
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
            <img src="https://i.pinimg.com/originals/d2/bb/72/d2bb72011b401805573550589faea721.jpg" alt="">
        </a>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <a class="btn btn-primary" href="{{URL::to('/blog-single-2')}}">Read More</a>
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
            <img src="https://i0.wp.com/www.themasculinetraveler.com/wp-content/uploads/2019/01/korean-girl2.jpg?resize=550%2C733&ssl=1" alt="">
        </a>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <a class="btn btn-primary" href="{{URL::to('/blog-single-3')}}">Read More</a>
    </div>
    <div class="pagination-area">
        <ul class="pagination">
            <li><a href="{{URL::to('/blog-list-page1')}}" class="active">1</a></li>
            <li><a href="{{URL::to('/blog-list-page2')}}" >2</a></li>
            <li><a href="{{URL::to('/blog-list-page3')}}" >3</a></li>
            <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
        </ul>
    </div>
</div>
@endsection
