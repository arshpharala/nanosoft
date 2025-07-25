@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">News</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add News</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="ajax-form">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="mb-3">Category</h5>
                                <select name="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="mb-4">
                                <label for="is_guide">
                                    <input type="checkbox" name="is_guide" id="is_guide">
                                    Is Educational Guide?
                                </label>
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Title</h5>
                                <input type="text" class="form-control" name="title"
                                    placeholder="write title here....">
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Slug</h5>
                                <input type="text" class="form-control" name="slug" placeholder="write slug here....">
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Intro</h5>
                                <textarea class="form-control" name="intro" cols="4" rows="6" placeholder="write intro here.."></textarea>
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Content</h5>
                                <textarea class="form-control rich-editor" name="content" cols="4" rows="6"
                                    placeholder="write a content here.."></textarea>
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Image</h5>
                                <input type="file" class="form-control" name="image"
                                    accept=".jpg, .png, .webp, image/jpeg, image/png">
                            </div>

                            <div class="md-4">
                                <h5 class="mb-3">Tags</h5>
                                <select name="tags[]" id="tags" class="form-control" multiple>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3">
                                <a href="{{ route('admin.services.index') }}" class="btn btn-outline-danger flex-fill"><i
                                        class="bi bi-x-circle me-2"></i>Discard</a>
                                <button type="submit" class="btn btn-outline-primary flex-fill"><i
                                        class="bi bi-send me-2"></i>Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">Meta</h5>
                            <div class="row g-3">

                                <div class="col-12">
                                    <label for="meta-title" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title" id="meta-title"
                                        placeholder="Meta Title">
                                </div>
                                <div class="col-12">
                                    <label for="meta-description" class="form-label">Meta Description</label>
                                    <textarea class="form-control" name="meta_description" cols="4" rows="6"
                                        placeholder="Write a description here.."></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keywords" id="keywords"
                                        placeholder="Keywords">
                                </div>
                            </div><!--end row-->
                        </div>
                    </div>

                </div>

            </div><!--end row-->
        </form>
    </div>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $('#tags').select2({
            tags: true,
            placeholder: 'Select or type tags',
            tokenSeparators: [',']
        });
    });
</script>
@endpush
