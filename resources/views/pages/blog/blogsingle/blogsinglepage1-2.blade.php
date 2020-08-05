@extends('layout')
@section('content')
    <div class="col-sm-9">
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
                    <img src="https://i.pinimg.com/originals/d2/bb/72/d2bb72011b401805573550589faea721.jpg" alt="">
                </a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> <br>

                <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> <br>

                <p>
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> <br>

                <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
                <div class="pager-area">
                    <ul class="pager pull-right">
                        <li><a href="{{URL::to('/blog-single-1')}}">Pre</a></li>
                        <li><a href="{{URL::to('/blog-single-3')}}">Next</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/blog-post-area-->

        <div class="rating-area">
            <ul class="ratings">
                <li class="rate-this">Rate this item:</li>
                <li>
                    <i class="fa fa-star color"></i>
                    <i class="fa fa-star color"></i>
                    <i class="fa fa-star color"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </li>
                <li class="color">(6 votes)</li>
            </ul>
            <ul class="tag">
                <li>TAG:</li>
                <li><a class="color" href="">Pink <span>/</span></a></li>
                <li><a class="color" href="">T-Shirt <span>/</span></a></li>
                <li><a class="color" href="">Girls</a></li>
            </ul>
        </div><!--/rating-area-->

        <div class="socials-share">
            <a href=""><img src="images/blog/socials.png" alt=""></a>
        </div><!--/socials-share-->

        <div class="media commnets">
            <a class="pull-left" href="#">
                <img class="media-object" src="data:image/jpeg;base64,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" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Annie Davis</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="blog-socials">
                    <ul>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                    <a class="btn btn-primary" href="">Other Posts</a>
                </div>
            </div>
        </div><!--Comments-->
        <div class="response-area">
            <h2>3 RESPONSES</h2>
            <ul class="media-list">
                <li class="media">

                    <a class="pull-left" href="#">
                        <img class="media-object" src="https://avatarfiles.alphacoders.com/148/thumb-14824.png" alt="">
                    </a>
                    <div class="media-body">
                        <ul class="sinlge-post-meta">
                            <li><i class="fa fa-user"></i>Janis Gallagher</li>
                            <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                            <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
                    </div>
                </li>
                <li class="media second-media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="https://avatarfiles.alphacoders.com/223/thumb-22359.png" alt="">
                    </a>
                    <div class="media-body">
                        <ul class="sinlge-post-meta">
                            <li><i class="fa fa-user"></i>Janis Gallagher</li>
                            <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                            <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
                    </div>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSVA4DUbzmDMYadBkl1y_qer8HJsLIb07Ac0yJxqySR69UZrxLrArSgZ4YSvKDQd1NJptd-oti2G2xiPtemHThfa6lgTaaYfbZwgA0b&usqp=CAU&ec=45688580" alt="">
                    </a>
                    <div class="media-body">
                        <ul class="sinlge-post-meta">
                            <li><i class="fa fa-user"></i>Janis Gallagher</li>
                            <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                            <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
                    </div>
                </li>
            </ul>
        </div><!--/Response-area-->
        <div class="replay-box">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Leave a replay</h2>
                    <form>
                        <div class="blank-arrow">
                            <label>Your Name</label>
                        </div>
                        <span>*</span>
                        <input type="text" placeholder="write your name...">
                        <div class="blank-arrow">
                            <label>Email Address</label>
                        </div>
                        <span>*</span>
                        <input type="email" placeholder="your email address...">
                        <div class="blank-arrow">
                            <label>Web Site</label>
                        </div>
                        <input type="email" placeholder="current city...">
                    </form>
                </div>
                <div class="col-sm-8">
                    <div class="text-area">
                        <div class="blank-arrow">
                            <label>Your Name</label>
                        </div>
                        <span>*</span>
                        <textarea name="message" rows="11"></textarea>
                        <a class="btn btn-primary" href="">post comment</a>
                    </div>
                </div>
            </div>
        </div><!--/Repaly Box-->
    </div>
@endsection
