@extends('front-end.master')
@section('title', 'Home')

@section('content')
    <style>
        .carousel-item {
            height: 500px;
            /* Adjust height as needed */
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
    </style>

    <div class="hero-area">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($sliders as $key => $slide)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset($slide->image) }}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Catagory Area Start ##### -->
    <div class="post-catagory section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Post Catagory -->
                 
                @foreach (@$categories as $category)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-post-catagory mb-30" style="height: 250px; overflow: hidden;">
                            <!-- Set a fixed height -->
                            <img src="{{ asset($category->thumbnail) }}" alt=""
                                style="width: 100%; height: 100%; object-fit: cover;">

                            <!-- Content -->
                            <div class="catagory-content-bg">
                                <div class="catagory-content">
                                    <a href="{{ route('category.post', ['slug' => $category->slug]) }}" class="post-tag">The
                                        Best</a>
                                    <a href="{{ route('category.post', ['slug' => $category->slug]) }}"
                                        class="post-title">{{ $category->name }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </div>
    <!-- ##### Catagory Area End ##### -->

    <!-- ##### Big Posts Area Start ##### -->
    <div class="big-posts-area mb-50">
        <div class="container">
            <!-- Single Big Post Area -->
            @foreach ($posts as $key => $post)
                @if ($key % 2 == 0)
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="big-post-thumbnail mb-50">
                                <img src="{{ asset($post->image) }}" alt="" width="100%" height="250">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="big-post-content text-center mb-50">
                                <a href="#" class="post-tag">Healthy</a>
                                <a href="#" class="post-title">{{ $post->title }}</a>
                                <div class="post-meta">
                                    <a href="#" class="post-date">{{ $post->published_date }}</a>
                                    <a href="#" class="post-author">By {{ $post->user->name }}</a>
                                </div>
                                <p>{!! $post->sort_description !!}</p>
                                <a href="{{ route('post.detail', ['slug' => $post->slug]) }}" class="btn bueno-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @elseif($key % 2 != 0)
                    <!-- Single Big Post Area -->
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="big-post-content text-center mb-50">
                                <a href="#" class="post-tag">The Best</a>
                                <a href="#" class="post-title">{{ $post->title }}</a>
                                <div class="post-meta">
                                    <a href="#" class="post-date">{{ $post->published_date }}</a>
                                    <a href="#" class="post-author">By {{ $post->user_id }}</a>
                                </div>
                                <p>{!! $post->sort_description !!}</p>
                                <a href="{{ route('post.detail', ['slug' => $post->slug]) }}" class="btn bueno-btn">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="big-post-thumbnail mb-50">
                                <img src="{{ asset($post->image) }}" alt="" width="100%" height="250">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach



        </div>
    </div>
    <!-- ##### Big Posts Area End ##### -->

    <!-- ##### Posts Area End ##### -->
    <div class="bueno-post-area mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Area -->
                <div class="col-12 col-lg-8 col-xl-9">
                    @foreach ($mostViewedPosts as $mostViewed)
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-1 d-flex flex-wrap mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="{{ $mostViewed->image }}" alt="" height="200px">
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <a href="#" class="post-tag">The Best</a>
                                <a href="#" class="post-title">{{ $mostViewed->title }}</a>
                                <div class="post-meta">
                                    <a href="#" class="post-date">{{ $mostViewed->published_date }}</a>
                                    <a href="#" class="post-author">By {{ $mostViewed->user->name }}</a>
                                </div>
                                <p>{!! $mostViewed->sort_description !!}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xl-3">
                    <div class="sidebar-area">
                        <!-- Single Widget Area -->
                        <div class="single-widget-area post-widget">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Posts Area End ##### -->
@endsection
