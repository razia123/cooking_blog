@extends('back-end.master')
@section('title', 'Create Post')

@push('css')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
@endpush

@section('content')

<x-alerts.success_alert></x-alerts.success_alert>

<div class="main-content app-content">
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Create Post</h1>
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
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="form-text" class="form-label fs-14 text-dark">Title</label>
                            <input type="text" name="post_title" class="form-control" id="form-text" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="form-password" class="form-label fs-14 text-dark">Sort Description</label>
                            <textarea name="sort_description" class="form-control" id="sortDescription" cols="30"
                                rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="form-password" class="form-label fs-14 text-dark">Long Description</label>
                            <textarea name="long_description" class="form-control" id="longDescription" cols="30"
                                rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="form-password" class="form-label fs-14 text-dark">Category</label>
                            <select name="category" id="" class="form-select">
                                <option value="0">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="form-password" class="form-label fs-14 text-dark">Featur Image</label>
                            <input type="file" name="feature_image" class="filepond">
                            <!-- <input type="file" name="category_logo"> -->
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
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>

    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        function filepondImage(imageId) {
            FilePond.create(imageId, {
                labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
                imagePreviewHeight: 270,
                imageCropAspectRatio: "1:1",
                imageResizeTargetWidth: 200,
                imageResizeTargetHeight: 200,
                styleLoadIndicatorPosition: "center bottom",
                styleProgressIndicatorPosition: "right bottom",
                styleButtonRemoveItemPosition: "center bottom",
                styleButtonProcessItemPosition: "right bottom",
                storeAsFile: true,
                allowReorder: true,
            });
        }
        filepondImage(document.querySelector('.filepond'));
        filepondImage(document.querySelector('.filepond1'));

    </script>

    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#sortDescription').summernote({
                height: 300,
                minHeight: 200,
                maxHeight: 500,
                focus: true
            });
            $('#longDescription').summernote({
                height: 300,
                minHeight: 200,
                maxHeight: 500,
                focus: true
            });
        });
    </script>
@endpush