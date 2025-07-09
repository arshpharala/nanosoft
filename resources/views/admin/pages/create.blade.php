@extends('admin.layouts.app')

@section('content')
<div class="main-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Create Page</div>
    </div>

    <form method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Tagline</label>
                            <input type="text" name="tagline" value="{{ old('tagline') }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Slug (URL)</label>
                            <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}> Active
                        </div>
                        <div class="mb-4">
                            <label>Banner Image</label>
                            <input type="file" class="form-control" name="banner" accept=".jpg, .png, .webp, image/jpeg, image/png">
                        </div>
                    </div>
                </div>

                @for ($key = 0; $key < 2; $key++)
                    @include('admin.includes.section', ['key' => $key])
                @endfor
            </div>

            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-3">
                            <a href="{{ route('admin.pages.index') }}" class="btn btn-outline-danger flex-fill">Discard</a>
                            <button type="submit" class="btn btn-outline-primary flex-fill">Create</button>
                        </div>
                    </div>
                </div>

                {{-- Meta Section --}}
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="mb-3">Meta</h5>
                        <div class="mb-3">
                            <label>Meta Title</label>
                            <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}">
                        </div>
                        <div class="mb-3">
                            <label>Meta Description</label>
                            <textarea class="form-control" name="meta_description" rows="4">{{ old('meta_description') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label>Meta Keywords</label>
                            <input type="text" class="form-control" name="meta_keywords" value="{{ old('meta_keywords') }}">
                        </div>
                    </div>
                </div>
                {{-- End Meta Section --}}
            </div>
        </div>
    </form>
</div>
@endsection
