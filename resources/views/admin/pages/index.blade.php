@extends('admin.layouts.app')
@section('content')
    <div class="main-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Pages</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->


        <div class="row g-3 mb-3">
            <div class="col-auto">
                <div class="position-relative">
                    <input id="searchInput" class="form-control px-5" type="search" placeholder="Search">
                    <span
                        class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
                </div>
            </div>
            <div class="col-auto flex-grow-1 overflow-auto"></div>
            <div class="col-auto">
                <div class="d-flex align-items-center gap-2 justify-content-lg-end">
                    <a class="btn btn-primary px-4" href="{{ route('admin.pages.create') }}"><i
                            class="bi bi-plus-lg me-2"></i>Create Page</a>
                </div>
            </div>
        </div><!--end row-->



        <div class="card mt-4">
            <div class="card-body">
                <div class="product-table">
                    <div class="table-responsive white-space-nowrap">
                        <table id="servicesTable" class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Last Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                    <tr>
                                        <td>{{ $page->title }}</td>
                                        <td>{{ $page->slug }}</td>
                                        <td>
                                            @if ($page->is_active)
                                                <span
                                                    class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">
                                                    Active
                                                </span>
                                            @else
                                                <span
                                                    class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">
                                                    Inactive
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $page->updated_at->format('M d, H:i A') }}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.pages.edit', $page->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger btn-delete"
                                                data-url="{{ route('admin.pages.destroy', $page->id) }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
