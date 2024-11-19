@extends('back-end.master')
@section('title', 'Create Tag')

@push('css')
@endpush

@section('content')

    <x-alerts.success_alert></x-alerts.success_alert>

    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Create Tag</h1>
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
                        <form action="{{ route('tag.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Title</label>
                                <input type="text" name="tag_title" class="form-control" id="form-text"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Status</label>
                                <select name="tag_status" id="" class="form-select">
                                    <option value="0">Select status...</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
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
@endpush
