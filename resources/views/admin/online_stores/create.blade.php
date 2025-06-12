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
                        <li class="breadcrumb-item active" aria-current="page">Add New Store</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <form action="{{ route('admin.online-stores.store') }}" method="POST" enctype="multipart/form-data"
            class="ajax-form">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Store Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter store name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Store URL</label>
                        <input type="url" name="url" class="form-control" placeholder="https://example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Logo/Image</label>
                        <input type="file" name="logo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control rich-editor"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection
