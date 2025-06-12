@extends('admin.layouts.app')

@section('content')
<div class="main-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Testimonials</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>

    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="ajax-form">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Designation</label>
                    <input type="text" name="designation" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Testimonial</label>
                    <textarea name="testimonial" class="form-control" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Company Icon (optional)</label>
                    <input type="file" name="company_icon" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-send me-2"></i>Save</button>
            </div>
        </div>
    </form>
</div>
@endsection
