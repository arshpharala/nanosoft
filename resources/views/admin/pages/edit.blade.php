@extends('admin.layouts.app')
@section('content')
<div class="main-content">
    <form action="{{ route('admin.pages.update', $page->id) }}" method="POST" class="ajax-form">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Page Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $page->title }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="form-control rich-editor" rows="10">{{ $page->content }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Page</button>
            </div>
        </div>
    </form>
</div>
@endsection
