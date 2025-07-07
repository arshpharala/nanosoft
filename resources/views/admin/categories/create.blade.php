@extends('admin.layouts.app')
@section('content')
    <div class="main-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Categories</div>
        </div>

        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="category-name" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="category-name" name="name"
                                    placeholder="Category name" required>
                            </div>
                            <div class="mb-4">
                                <label for="category-slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="category-slug" name="slug"
                                    placeholder="Category slug (auto if empty)">
                            </div>
                            <div class="mb-4">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" cols="4" rows="6"
                                    placeholder="Write a description here.."></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="icon" class="form-label">Icon</label>
                                <input type="file" class="form-control" name="icon" accept=".jpg,.jpeg,.png,.svg,.webp">
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

                    {{-- Meta Section --}}
                    <div class="card mt-3">
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
                            </div>
                        </div>
                    </div>
                    {{-- End Meta Section --}}
                </div>
            </div>
        </form>
    </div>

    {{-- Slug auto generation script --}}
    @push('script')
        <script>
            $(function() {
                var isSlugEdited = false;

                $('#category-slug').on('input', function() {
                    isSlugEdited = $(this).val().length > 0;
                });

                $('#category-name').on('input', function() {
                    if (!isSlugEdited) {
                        let slug = $(this).val()
                            .toLowerCase()
                            .replace(/[^a-z0-9]+/g, '-')
                            .replace(/^-+|-+$/g, '')
                            .replace(/--+/g, '-');
                        $('#category-slug').val(slug);
                    }
                });

                $('#category-slug').on('blur', function() {
                    if ($(this).val() === '') {
                        isSlugEdited = false;
                        $('#category-name').trigger('input');
                    }
                });
            });
        </script>
    @endpush
@endsection
