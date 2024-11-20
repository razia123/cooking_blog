@extends('front-end.master')
@section('title', 'Categories')
@push('style')
    
@endpush
@section('content')
    <!-- ##### Catagory Post Area Start ##### -->
    <div class="catagory-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ##### Catagory Area Start ##### -->
                <div class="post-catagory section-padding-100">
                    <div class="container">
                        <div class="row">
                            <!-- Single Post Catagory -->
                            @foreach ($categories as $category)
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-post-catagory mb-30">
                                        <img src="{{ asset($category->thumbnail) }}" alt="" style="height: 300px; width: 100%;object-fit: cover;object-position: center;">
                                        <!-- Content -->
                                        <div class="catagory-content-bg">
                                            <div class="catagory-content">
                                                <a href="#" class="post-tag">The Best</a>
                                                <a href="#" class="post-title">Healthy Food</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="pagination-area mt-70">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ##### Catagory Area End ##### -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="pagination-area mt-70">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">01</a></li>
                                <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Catagory Post Area End ##### -->


@endsection
