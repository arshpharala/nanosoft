@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Services</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Service</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data" class="ajax-form">
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
                                <h5 class="mb-3">Service Title</h5>
                                <input type="text" class="form-control" name="title"
                                    placeholder="write title here....">
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Slug</h5>
                                <input type="text" class="form-control" name="slug" placeholder="write slug here....">
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Short Description</h5>
                                <textarea class="form-control rich-editor" name="short_description" cols="4" rows="3"
                                    placeholder="Enter a short description"></textarea>
                            </div>


                            <div class="mb-4">
                                <h5 class="mb-3">Why Choose</h5>
                                <textarea class="form-control rich-editor" name="why_choose" cols="4" rows="6"
                                    placeholder="write a why choose here.."></textarea>
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

                                    <div class="mb-4">
                                        <h5 class="mb-3">Bullet Points</h5>

                                        <div id="bullet-point-wrapper">
                                            <div class="bullet-point-item border rounded p-3 mb-3">
                                                <div class="mb-2">
                                                    <label>Title</label>
                                                    <input type="text" name="section_bullet_points[0][title]"
                                                        class="form-control" placeholder="Enter bullet point title">
                                                </div>
                                                <div class="mb-2">
                                                    <label>Description</label>
                                                    <textarea name="section_bullet_points[0][description]" class="form-control" rows="2"
                                                        placeholder="Enter bullet point description"></textarea>
                                                </div>
                                                <button type="button"
                                                    class="btn btn-sm btn-danger remove-bullet">Remove</button>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-outline-primary mt-2" id="add-bullet-point">+
                                            Add Bullet Point</button>
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
                                <a href="{{ route('admin.services.index') }}" class="btn btn-outline-danger flex-fill"><i
                                        class="bi bi-x-circle me-2"></i>Discard</a>
                                <button type="submit" class="btn btn-outline-primary flex-fill"><i
                                        class="bi bi-send me-2"></i>Save</button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="mb-4">
                                        <h5 class="mb-3">Icon</h5>
                                        <input type="file" class="form-control" name="icon"
                                            accept=".jpg, .png, .webp, image/jpeg, image/png">
                                    </div>

                                    <div class="mb-4">
                                        <h5 class="mb-3">Banner Image</h5>
                                        <input type="file" class="form-control" name="banner"
                                            accept=".jpg, .png, .webp, image/jpeg, image/png">
                                    </div>
                                </div>
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
    let bulletIndex = 1;

    document.getElementById('add-bullet-point').addEventListener('click', function () {
        const wrapper = document.getElementById('bullet-point-wrapper');
        const html = `
            <div class="bullet-point-item border rounded p-3 mb-3">
                <div class="mb-2">
                    <label>Title</label>
                    <input type="text" name="section_bullet_points[${bulletIndex}][title]" class="form-control" placeholder="Enter bullet point title">
                </div>
                <div class="mb-2">
                    <label>Description</label>
                    <textarea name="section_bullet_points[${bulletIndex}][description]" class="form-control" rows="2" placeholder="Enter bullet point description"></textarea>
                </div>
                <button type="button" class="btn btn-sm btn-danger remove-bullet">Remove</button>
            </div>`;
        wrapper.insertAdjacentHTML('beforeend', html);
        bulletIndex++;
    });

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-bullet')) {
            e.target.closest('.bullet-point-item').remove();
        }
    });
</script>
@endpush

