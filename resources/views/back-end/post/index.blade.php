@extends('back-end.master')
@section('title', 'Post')

@section('content')
<div class="main-content app-content">
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Post</h1>
            <div class="ms-md-1 ms-0">
                <a href="{{ route('post.create') }}" class="btn btn-primary">Add Post</a>
            </div>
        </div>
        <div class="table-responsive mt-5">
            <table class="table text-nowrap">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Post Image</th>
                        <th scope="col">Post Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Count Views</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset($post->image) }}" alt="" width="50" height="50">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ @$post->user->name }}</td>
                            <td>{{ $post->count_views }}</td>
                            <td>
                                {{ $post->status == 1 ? 'Active' : 'Inactive' }}
                            </td>
                            <td>
                                <div class="hstack gap-2 fs-15">
                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                            class="ri-download-2-line"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                            class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection