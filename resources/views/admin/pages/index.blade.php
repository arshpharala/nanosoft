@extends('admin.layouts.app')
@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Pages</h2>
        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">+ Add New Page</a>
    </div>
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Status</th>
                <th>Last Updated</th>
                <th width="130">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->title }}</td>
                <td>{{ $page->slug }}</td>
                <td>{!! $page->is_active ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-secondary">Inactive</span>' !!}</td>
                <td>{{ $page->updated_at->format('d M, Y H:i') }}</td>
                <td>
                    <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form method="POST" action="{{ route('admin.pages.destroy', $page) }}" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Del</button>
                    </form>
                    <a href="{{ url($page->slug) }}" target="_blank" class="btn btn-sm btn-info">View</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
