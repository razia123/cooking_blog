@extends('back-end.master')
@section('title', 'My Profile')

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
            <h1 class="page-title fw-semibold fs-18 mb-0">My Profile</h1>
            <div class="ms-md-1 ms-0">
                {{-- <a href="{{ route('category.create') }}" class="btn btn-primary">Category</a> --}}
            </div>
        </div>
        <div class="col-12">
            <div class="card custom-card">
                <div class="card-header">
                    <!-- <div class="card-title">Create</div> -->
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="form-text" class="form-label fs-14 text-dark">Full Name</label>
                            <input type="text" name="name" class="form-control" id="form-text" placeholder=""
                                value="{{ $profile->name }}">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="form-text" class="form-label fs-14 text-dark">Email</label>
                                    <input type="email" name="email" class="form-control" id="form-text" placeholder=""
                                        value="{{ $profile->email }}">
                                </div>
                                <div class="col-6">
                                    <label for="form-text" class="form-label fs-14 text-dark">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="form-text" placeholder="" value="{{ @$profile->userInfo->phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="form-password" class="form-label fs-14 text-dark">Address</label>
                            <textarea name="address" class="form-control" id="address" cols="30" rows="10">{{ @$profile->userInfo->address }}</textarea>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="form-text" class="form-label fs-14 text-dark">Facebook</label>
                                    <input type="text" name="facebook" class="form-control" id="form-text"
                                        placeholder="" value="{{ @$profile->userInfo->facebook }}">
                                </div>
                                <div class="col-6">
                                    <label for="form-text" class="form-label fs-14 text-dark">Twitter</label>
                                    <input type="text" name="twitter" class="form-control" id="form-text"
                                        placeholder="" value="{{ @$profile->userInfo->twitter }}">
                                </div>
                                <div class="col-6">
                                    <label for="form-text" class="form-label fs-14 text-dark">LinkedIn</label>
                                    <input type="text" name="linkedIn" class="form-control" id="form-text"
                                        placeholder="" value="{{ @$profile->userInfo->linkedIn }}">
                                </div>
                                <div class="col-6">
                                    <label for="form-text" class="form-label fs-14 text-dark">Instagram</label>
                                    <input type="text" name="instagram" class="form-control" id="form-text"
                                        placeholder="" value="{{ @$profile->userInfo->instagram }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="form-password" class="form-label fs-14 text-dark">Profile Picture</label>
                            <input type="file" name="profile_picture" class="profilePicture">
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1" {{ @$profile->userInfo->gender == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2" {{ @$profile->userInfo->gender == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @push('script')
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
        <script src="{{ asset('/back-end/js/my-js/common.js') }}"></script>


        <script>
            $(document).ready(function () {
                filepondImage(document.querySelector('.profilePicture'));
                summerText('address');
            });
        </script>

    @endpush