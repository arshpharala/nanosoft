@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Testimonials</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-medium flex-wrap font-text1">
            <a href="javascript:;"><span class="me-1">All</span><span class="text-secondary">({{ $testimonials->count() }})</span></a>
        </div>

        <div class="row g-3">
            <div class="col-auto">
                <div class="position-relative">
                    <input class="form-control px-5" type="search" placeholder="Search">
                    <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
                </div>
            </div>
            <div class="col-auto flex-grow-1 overflow-auto"></div>
            <div class="col-auto">
                <div class="d-flex align-items-center gap-2 justify-content-lg-end">
                    <a class="btn btn-primary px-4" href="{{ route('admin.testimonials.create') }}"><i class="bi bi-plus-lg me-2"></i>Add Testimonial</a>
                </div>
            </div>
        </div><!--end row-->

        <div class="card mt-4">
            <div class="card-body">
                <div class="product-table">
                    <div class="table-responsive white-space-nowrap">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Testimonial</th>
                                    <th>Company Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->designation }}</td>
                                        <td>{{ Str::limit($testimonial->testimonial, 60) }}</td>
                                        <td>
                                            @if($testimonial->company_icon)
                                                <img src="{{ asset('storage/' . $testimonial->company_icon) }}" width="50">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger btn-delete"
                                                data-url="{{ route('admin.testimonials.destroy', $testimonial->id) }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $testimonials->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
