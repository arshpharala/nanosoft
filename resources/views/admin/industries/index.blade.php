@extends('admin.layouts.app')
@section('content')
<div class="main-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Industries</div>
    </div>

    <div class="row g-3">
        <div class="col-auto">
            <a class="btn btn-primary px-4" href="{{ route('admin.industries.create') }}">
                <i class="bi bi-plus-lg me-2"></i>Add Category
            </a>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <div class="table-responsive white-space-nowrap">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Created By</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($industries as $industry)
                            <tr>
                                <td>
                                    @if($industry->image)
                                        <img src="{{ asset('storage/' . $industry->image) }}" width="40" alt="icon">
                                    @endif
                                </td>
                                <td>{{ $industry->name }}</td>
                                <td>{{ optional($industry->creator)->name }}</td>
                                <td>{{ $industry->created_at->format('M d, H:i A') }}</td>
                                <td>
                                    <a href="{{ route('admin.industries.edit', $industry->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.industries.destroy', $industry->id) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this industry?')">Delete</button>
                                    </form>
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
