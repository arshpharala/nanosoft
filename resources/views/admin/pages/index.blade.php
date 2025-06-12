@extends('admin.layouts.app')
@section('content')
<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>Static Pages</h4>
        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">Add Page</a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                        <tr>
                            <td>{{ $page->title }}</td>
                            <td>
                                @if($page->is_active)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $page->url->url }}</td>
                            <td>
                                <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <button type="button" class="btn btn-sm btn-danger btn-delete" data-url="{{ route('admin.pages.destroy', $page->id) }}">Delete</button>
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
