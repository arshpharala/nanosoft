@extends('admin.layouts.app')
@section('content')
<div class="main-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Categories</div>
    </div>

    <div class="row g-3">
        <div class="col-auto">
            <a class="btn btn-primary px-4" href="{{ route('admin.categories.create') }}">
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
                            <th>Icon</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created By</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    @if($category->icon)
                                        <img src="{{ asset('storage/' . $category->icon) }}" width="40" alt="icon">
                                    @endif
                                </td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ optional($category->creator)->name }}</td>
                                <td>{{ $category->created_at->format('M d, H:i A') }}</td>
                                <td>
                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this category?')">Delete</button>
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
