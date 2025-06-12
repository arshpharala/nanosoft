@extends('admin.layouts.app')
@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Online Store</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Store</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <form action="{{ route('admin.online-stores.update', $online_store->id) }}" method="POST"
            enctype="multipart/form-data" class="ajax-form">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Store Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $online_store->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Store URL</label>
                        <input type="url" name="url" class="form-control" value="{{ $online_store->url }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Logo/Image</label>
                        <input type="file" name="logo" class="form-control">
                        @if ($online_store->logo)
                            <img src="{{ asset('storage/' . $online_store->logo) }}" width="100" class="mt-2"
                                alt="logo">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control rich-editor">{{ $online_store->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
