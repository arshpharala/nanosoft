@extends('admin.layouts.app')
@section('content')
    <div class="main-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Create Page</div>
        </div>
        <form method="POST" action="{{ route('admin.pages.store') }}">

            @csrf
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label>Tagline</label>
                                <input type="text" name="tagline" value="{{ old('tagline') }}" class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label>Slug (URL)</label>
                                <input type="text" name="slug" value="{{ old('slug') }}" class="form-control"
                                    required>
                            </div>

                            <div class="mb-3">
                                <input type="checkbox" name="is_active" value="1"> Active
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Banner Image</h5>
                                <input type="file" class="form-control" name="banner"
                                    accept=".jpg, .png, .webp, image/jpeg, image/png">
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">

                            <h5 class="mb-3">Section #1</h5>
                            <div class="row">
                                <div class="col-12">

                                    <div class="mb-4">
                                        <h5 class="mb-3">Section Heading</h5>
                                        <input type="text" class="form-control" name="section_heading"
                                            placeholder="write heading here..">
                                    </div>

                                    <div class="mb-4">
                                        <h5 class="mb-3">Section Content</h5>
                                        <textarea class="form-control rich-editor" name="section_content" cols="4" rows="6"
                                            placeholder="write a content here.."></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <h5 class="mb-3">Section Image</h5>
                                        <input type="file" class="form-control" name="section_image"
                                            accept=".jpg, .png, image/jpeg, image/png">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">

                            <h5 class="mb-3">Section #2</h5>
                            <div class="row">
                                <div class="col-12">

                                    <div class="mb-4">
                                        <h5 class="mb-3">Section Heading</h5>
                                        <input type="text" class="form-control" name="section_2_heading"
                                            placeholder="write heading here..">
                                    </div>

                                    <div class="mb-4">
                                        <h5 class="mb-3">Section Content</h5>
                                        <textarea class="form-control rich-editor" name="section_2_content" cols="4" rows="6"
                                            placeholder="write a content here.."></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <h5 class="mb-3">Section Image</h5>
                                        <input type="file" class="form-control" name="section_2_image"
                                            accept=".jpg, .png, image/jpeg, image/png">
                                    </div>
                                </div>
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
                                <button type="submit" class="btn btn-outline-primary flex-fill">Update</button>
                            </div>
                        </div>
                    </div>

                    {{-- Meta Section --}}
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="mb-3">Meta</h5>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="meta-title" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title" id="meta-title"
                                        value="{{ old('meta_title') }}" placeholder="Meta Title">
                                </div>
                                <div class="col-12">
                                    <label for="meta-description" class="form-label">Meta Description</label>
                                    <textarea class="form-control" name="meta_description" cols="4" rows="6"
                                        placeholder="Write a description here..">{{ old('meta_description') }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label for="keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keywords" id="keywords"
                                        value="{{ old('meta_keywords') }}" placeholder="Keywords">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Meta Section --}}
                </div>
            </div>
        </form>
    </div>
@endsection
@push('script')
@endpush
