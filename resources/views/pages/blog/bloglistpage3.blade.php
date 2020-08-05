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
                <img src="data:image/jpeg;base64,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" alt="">
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTk1LmmT1DmMNCffBXU3j4MR_hvZWe3l3kXe7A8V12v-wsE-u54vLSP8lmfQazqFy6TRbCfhvA4y8R5DrBrmM6Ebp8T8N73oqJMadQf&usqp=CAU&ec=45688580" alt="">
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
                <img src="https://i.pinimg.com/originals/ed/dc/98/eddc98b2ef7541a05e13b1e4b19090aa.jpg" alt="">
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a class="btn btn-primary" href="">Read More</a>
        </div>
        <div class="pagination-area">
            <ul class="pagination">
                <li><a href="{{URL::to('/blog-list-page1')}}">1</a></li>
                <li><a href="{{URL::to('/blog-list-page2')}}" >2</a></li>
                <li><a href="{{URL::to('/blog-list-page3')}}" class="active">3</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
@endsection
