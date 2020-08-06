@extends('layout')
@section('content')
<div class="blog-post-area">
    <h2 class="title text-center">Latest From our Blog</h2>
    <div class="single-blog-post">
        <h3>Bật mí cách mix đồ với chân váy ĐƠN GIẢN nhưng “CHANH SẢ’ hết nấc</h3>
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
            <img src="https://gumac.vn/image/01/onpage5/30/cach-phoi-do-voi-chan-vay-ngan111120190907214827.jpg" alt="">
        </a>
        <p>Nhưng nếu vẫn chưa biết nhiều cách phối đồ với váy thì ngay bây giờ E-Shopper sẽ bật mí những cách mix đồ với chân váy ĐƠN GIẢN nhưng SANH CHẢNH hết mức mà các nàng nhất định phải biết. Hãy cùng xem đó là những bí quyết gì nhé!</p>
        <a class="btn btn-primary" href="{{URL::to('/blog-single-1')}}">Read More</a>
    </div>
    <div class="single-blog-post">
        <h3>Lưu ngay 2 cách phối đồ với quần yếm nữ đẹp đỉnh cao</h3>
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
            <img src="https://bumshop.com.vn/wp-content/uploads/2019/05/cach-phoi-do-quan-yem-nu-1.jpg" alt="">
        </a>
        <p>Nếu trong tủ đồ đang có những item như : áo thun, áo hoodie, giày, phụ kiện,… thì xin chúc mừng, các bạn nữ đã nắm được trong tay các cách phối đồ với quần yếm đỉnh nhất hiện nay.

            Nhưng chưa hết đâu, ngoài những item trên E-Shopper vẫn còn rất nhiều bí quyết phối đồ cùng quần yếm cực đẹp mà các cô nàng có thể tham khảo ngay qua bài viết : Lưu ngay 10 cách phối đồ với quần yếm nữ đẹp đỉnh cao.</p>
        <a class="btn btn-primary" href="{{URL::to('/blog-single-2')}}">Read More</a>
    </div>
    <div class="single-blog-post">
        <h3>Gợi ý 10 “bí quyết” phối đồ đi chơi mùa hè mát mẻ, thoải mái và năng động</h3>
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
        <p>“Nhắm mắt thấy mùa hè”, thế là một mùa hè nữa lại sắp đến, các bạn đã lên ý tưởng để chuẩn bị cho những cách phối đồ mùa hè để đi chơi chưa?

            Nhằm mục đích giúp các bạn tiết kiệm thời gian, hôm nay Bum Shop sẽ Gợi ý 10 “bí quyết” phối đồ đi chơi mùa hè mát mẻ và năng động cho cả nam và nữ.

            Nếu bạn sắp có chuyến đi chơi cùng bạn bè, người thân mà đang “bí” cách phối đồ mùa hè, hãy tham khảo bài viết trên để có ngay câu trả lời nhé.</p>
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
