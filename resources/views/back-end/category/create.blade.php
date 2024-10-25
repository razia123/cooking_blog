@extends('back-end.master')
@section('title', 'Add Category')

@section('content')
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
                        <form action="">
                            @csrf
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Name</label>
                                <input type="text" class="form-control" id="form-text" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="form-password" class="form-label fs-14 text-dark">Description</label>
                                <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="form-password" class="form-label fs-14 text-dark">Parent Category</label>
                                <select name="" id="" class="form-select"></select>
                            </div>
                            <div class="mb-3">
                                <label for="form-password" class="form-label fs-14 text-dark">Logo</label>
                                <input type="file">
                            </div>
                            <div class="mb-3">
                                <label for="form-password" class="form-label fs-14 text-dark">Thumbnail</label>
                                <input type="file">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Create">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
