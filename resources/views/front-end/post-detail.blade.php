@extends('front-end.master')
@section('title', 'Post Detail')
@section('content')
    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="post-details-content mb-100">
                        <div class="blog-thumbnail mb-50">
                            <img src="{{ asset($post->image) }}" alt="" width="100">
                        </div>
                        <div class="blog-content">
                            <a href="#" class="post-tag">Healthy Food</a>
                            <h4 class="post-title">{{ $post->title }}</h4>
                            <div class="post-meta mb-50">
                                <a href="#" class="post-date">{{ $post->published_date }}</a>
                                <a href="#" class="post-author">By {{ $post->user->name }}</a>
                            </div>
                            <p>{!! $post->long_description !!}</p>
                        </div>
                    </div>

                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mb-100">
                        <h4 class="mb-50">Comments</h4>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="{{ asset('front-end/img/bg-img/32.jpg') }}" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <div class="d-flex">
                                            <a href="#" class="post-author">Jane Smith</a>
                                            <a href="#" class="post-date">July 11, 2018</a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                        <p>Consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla
                                            placerat, tinci dunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet
                                            neque. Fusce sagittis sus cipit sem a consequat.</p>
                                    </div>
                                </div>

                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="{{ asset('front-end/img/bg-img/33.jpg') }}" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <div class="d-flex">
                                                    <a href="#" class="post-author">{{ $post->user->name }}</a>
                                                    <a href="#" class="post-date">{{ $post->published_date }}</a>
                                                    <a href="#" class="reply">Reply</a>
                                                </div>
                                                <p>Consectetur adipiscing elit. Praesent vel tortor facilisis, Nullam vel
                                                    orci dui. Su spendisse sit amet laoreet neque.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/32.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <div class="d-flex">
                                            <a href="#" class="post-author">Cris Williams</a>
                                            <a href="#" class="post-date">July 11, 2018</a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor
                                            facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Su
                                            spendisse sit amet laoreet neque. Fusce sagittis suscipit.</p>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <div class="post-a-comment-area mb-30 clearfix">
                        <h4 class="mb-50">Leave a reply</h4>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" placeholder="Name*">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email" placeholder="Email*">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="subject" placeholder="Website">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn bueno-btn mt-30" type="submit">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xl-3">
                    <div class="sidebar-area">

                        <!-- Single Widget Area -->
                        <div class="single-widget-area author-widget mb-30">
                            <div class="background-pattern bg-img"
                                style="background-image: url({{ asset('front-end/img/core-img/pattern2.png') }});">
                                <div class="author-thumbnail">
                                    <img src="{{ asset('front-end/img/bg-img/23.jpg') }}" alt="">
                                </div>
                                <p>My name is <span>{{ $post->user->name }}</span>, I’m a passionate cook with a love for
                                    vegan food.</p>
                            </div>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>


                        <!-- Single Widget Area -->
                        <div class="single-widget-area post-widget mb-30">
                            <!-- Single Post Area -->
                            @foreach ($allPosts as $value)
                                <div class="single-post-area d-flex">
                                    <!-- Blog Thumbnail -->
                                    <div class="blog-thumbnail">
                                        <img src="{{ asset($value->image) }}" alt="">
                                    </div>
                                    <!-- Blog Content -->
                                    <div class="blog-content">
                                        <a href="#" class="post-title">{{ $value->title }}</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-date">{{ $value->published_date }}</a>
                                            <a href="#" class="post-author">By {{ $value->user->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
@endsection
