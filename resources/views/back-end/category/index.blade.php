@extends('back-end.master')
@section('title', 'Category')

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Category</h1>
                <div class="ms-md-1 ms-0">
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
                </div>
            </div>
            <div class="table-responsive mt-5">
                <table class="table text-nowrap">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">User Name</th>
                            <th scope="col">Transaction Id</th>
                            <th scope="col">Created</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Harshrath</th>
                            <td>#5182-3467</td>
                            <td>24 May 2022</td>
                            <td>
                                <div class="hstack gap-2 fs-15">
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                            class="ri-download-2-line"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                            class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Zozo Hadid</th>
                            <td>#5182-3412</td>
                            <td>02 July 2022</td>
                            <td>
                                <div class="hstack gap-2 fs-15">
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                            class="ri-download-2-line"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                            class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Martiana</th>
                            <td>#5182-3423</td>
                            <td>15 April 2022</td>
                            <td>
                                <div class="hstack gap-2 fs-15">
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                            class="ri-download-2-line"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                            class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Alex Carey</th>
                            <td>#5182-3456</td>
                            <td>17 March 2022</td>
                            <td>
                                <div class="hstack gap-2 fs-15">
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                            class="ri-download-2-line"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                            class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
