@extends('back-end.master')
@section('title', 'Dashboard')

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            @if (session()->has('success'))
                <div class="alert alert-success overflow-hidden p-0 mb-4" role="alert">
                    <div class="p-3 bg-success text-fixed-white d-flex justify-content-between">
                        <h6 class="aletr-heading mb-0">{{ session('success')['title'] ?? 'Success' }}</h6>
                        <button type="button" class="btn-close p-0 text-fixed-white" data-bs-dismiss="alert"
                            aria-label="Close"><i class='bx bx-x'></i></button>
                    </div>
                </div>
            @endif
            <div class="row">
                Dashboard
            </div>
        </div>
    </div>

@endsection
