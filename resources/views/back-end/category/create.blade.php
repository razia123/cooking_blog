@extends('back-end.master')
@section('title', 'Add Category')

@push('css')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endpush

@section('content')

    <x-alerts.success_alert></x-alerts.success_alert>

    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Add Category</h1>
                <div class="ms-md-1 ms-0">
                    {{-- <a href="{{ route('category.create') }}" class="btn btn-primary">Category</a> --}}
                </div>
            </div>
            <div class="col-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Create</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Name</label>
                                <input type="text" name="category_name" class="form-control" id="form-text"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="form-password" class="form-label fs-14 text-dark">Description</label>
                                <div id="editor" style="height: 200px;"></div>
                                <input type="hidden" name="content" id="quill-content">

                                <!-- <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea> -->
                            </div>
                            <div class="mb-3">
                                <label for="form-password" class="form-label fs-14 text-dark">Parent Category</label>
                                <select name="parent_category" id="" class="form-select">
                                    <option value="0">Select Parent Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="form-password" class="form-label fs-14 text-dark">Logo</label>
                                <input type="file" name="category_logo" class="categoryLogo">
                            </div>
                            <div class="mb-3">
                                <label for="form-password" class="form-label fs-14 text-dark">Thumbnail</label>
                                <input type="file" name="category_thumbnail" class="categoryThumbnail">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Create">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>
    <script src="{{ asset('/back-end/js/my-js/filepond.js') }}"></script>
    <script>
        filepondImage(document.querySelector('.categoryLogo'));
        filepondImage(document.querySelector('.categoryThumbnail'));
    </script>
@endpush
