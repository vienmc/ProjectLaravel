@extends('layout')
@section('content')
    <div class="blog-post-area">
        <h2 class="title text-center">Latest From our Blog</h2>
        <div class="single-blog-post">
            <h3>“Tiết lộ” 10 cách phối đồ hàn quốc nữ HOT TREND 2020</h3>
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
                <img src="https://vnn-imgs-a1.vgcloud.vn/cdn.24h.com.vn/upload/4-2019/images/2019-10-18/1571360606-190-1-1571283956-width650height813.jpg" alt="">
            </a>
            <p>Phong cách thời trang Hàn Quốc từ lâu đã nổi tiếng và được phổ biến rộng rãi đến mức người người nhà nhà ai cũng hay nói rằng : Anh B/Chị C mặc đẹp như người xứ sở kim chi.

                Thế nhưng họ không biết rằng, góp công lớn nhất trong việc nâng tầm phong cách Hàn Quốc đó là sự xuất hiện của các loại phục trang nổi bật như : đầm baby doll, chân váy xếp ly, áo thun, đầm vintage,….</p>
            <a class="btn btn-primary" href="">Read More</a>
        </div>
        <div class="single-blog-post">
            <h3>Tổng Hợp 10 Kiểu Áo Dài Cách Tân Được Yêu Thích Nhất</h3>
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
            <p>Áo dài là loại trang phục truyền thống của người Việt Nam, hiện nay áo dài cách tân đã được làm mới lại để người mặc cảm thấy thoải mái và tiện lợi hơn.

                Nếu bạn vẫn còn đang băn khoăn không biết đâu là những mẫu áo dài phổ biến nhất, hãy cùng E-Shopper tham khảo bài viết : Tổng Hợp 10 Kiểu Áo Dài Cách Tân Được Yêu Thích Nhất để nắm rõ nội dung hơn nhé!.</p>
            <a class="btn btn-primary" href="">Read More</a>
        </div>
        <div class="single-blog-post">
            <h3>10 Ý Tưởng Phối Đồ Với Túi Đeo Chéo Độc Đáo, Thời Thượng</h3>
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
            <p>Ở bài viết trước, chúng ta đã tìm hiểu về khái niệm và các shop bán túi đeo chéo nam nữ hot nhất. Bên cạnh 2 yếu tố nói trên, cách phối đồ với túi đeo chéo cho nam nữ cũng là chủ đề nhận được nhiều sự quan tâm.

                Qua bài viết này, E-Shopper sẽ gợi ý một số công thức để các bạn có thể dễ dàng phối đồ cùng các mẫu túi đeo chéo nam nữ thật đẹp và phong cách. Hãy cùng theo dõi nhé!</p>
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
