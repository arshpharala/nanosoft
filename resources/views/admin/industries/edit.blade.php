@extends('admin.layouts.app')
@section('content')
<div class="main-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Industries</div>
    </div>

    <form action="{{ route('admin.industries.update', $industry->id) }}" method="POST" enctype="multipart/form-data" class="ajax-form">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="mb-3">Industry Name</h5>
                            <input type="text" class="form-control" id="industry-name" name="name" value="{{ old('name', $industry->name) }}" required>
                        </div>
                        <div class="mb-4">
                            <h5 class="mb-3">Image</h5>
                            <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png,.svg">
                            @if($industry->image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $industry->image) }}" width="60" alt="icon">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-3">
                            <a href="{{ route('admin.industries.index') }}" class="btn btn-outline-danger flex-fill">Discard</a>
                            <button type="submit" class="btn btn-outline-primary flex-fill">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
