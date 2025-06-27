@extends('admin.layouts.app')
@section('content')
    <div class="main-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Benefits</div>
        </div>

        <form action="{{ route('admin.service.benefits.update', ['service' => $service, 'benefit' => $benefit]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="mb-3">Title </h5>
                                <input type="text" class="form-control" id="category-name" name="title" value="{{$benefit->title}}"
                                    placeholder="Title" required>
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Short Description</h5>
                                <textarea class="form-control rich-editor" name="short_description" cols="4" rows="6"
                                    placeholder="write a description here..">{{ $benefit->short_description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3">
                                <a href="{{ route('admin.categories.index') }}"
                                    class="btn btn-outline-danger flex-fill">Discard</a>
                                <button type="submit" class="btn btn-outline-primary flex-fill">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
