@extends('back-end.master')
@section('title', 'Slider')

@section('content')
<div class="main-content app-content">
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Slider</h1>
            <div class="ms-md-1 ms-0">
                <a href="{{ route('slider.create') }}" class="btn btn-primary">Add Slider Image</a>
            </div>
        </div>
        <div class="table-responsive mt-5">
            <table class="table text-nowrap">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Slider Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection