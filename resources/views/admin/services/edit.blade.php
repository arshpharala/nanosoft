@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <!-- Breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Services</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Service</li>
                    </ol>
                </nav>
            </div>
        </div>

        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data"
            class="ajax-form">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="category_id" class="form-label">Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $service->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="title" class="form-label">Service Title</label>
                                <input type="text" class="form-control" name="title"
                                    value="{{ old('title', $service->title) }}" placeholder="write title here....">
                            </div>

                            <div class="mb-4">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug"
                                    value="{{ old('slug', $service->slug) }}" placeholder="write slug here....">
                            </div>

                            <div class="mb-4">
                                <label for="short_description" class="form-label">Short Description</label>
                                <textarea class="form-control rich-editor" name="short_description" cols="4" rows="6"
                                    placeholder="Enter a short description">{{ old('short_description', $service->short_description) }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="why_choose" class="form-label">Why Choose</label>
                                <textarea class="form-control rich-editor" name="why_choose" cols="4" rows="6"
                                    placeholder="write a why choose here..">{{ old('why_choose', $service->why_choose) }}</textarea>
                            </div>



                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">

                            <h5 class="mb-3">Section #1</h5>
                            <div class="mb-4">
                                <label for="section_heading" class="form-label">Section Heading</label>
                                <input type="text" class="form-control" name="section_heading"
                                    value="{{ old('section_heading', $service->section_heading) }}"
                                    placeholder="write section heading here....">
                            </div>

                            <div class="mb-4">
                                <label for="section_content" class="form-label">Section Content</label>
                                <textarea class="form-control rich-editor" name="section_content" cols="4" rows="6"
                                    placeholder="write section content here..">{{ old('section_content', $service->section_content) }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="section_image" class="form-label">Section Image</label>
                                <input type="file" class="form-control" name="section_image" accept=".jpg,.png,.jpeg">

                                @if ($service->section_image)
                                    <div class="mt-2">
                                        <small>Current Image:</small><br>
                                        <img src="{{ asset('storage/' . $service->section_image) }}" width="120"
                                            alt="Uploaded image">
                                    </div>
                                @endif
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Bullet Points</h5>

                                <div id="bullet-point-wrapper">
                                    @php $oldBulletPoints = old('section_bullet_points', json_decode($service->section_bullet_points, true) ?? []); @endphp

                                    @forelse($oldBulletPoints as $index => $point)
                                        <div class="bullet-point-item border rounded p-3 mb-3">
                                            <div class="mb-2">
                                                <label>Title</label>
                                                <input type="text" name="section_bullet_points[{{ $index }}][title]"
                                                    class="form-control" value="{{ $point['title'] ?? '' }}"
                                                    placeholder="Enter bullet point title">
                                            </div>
                                            <div class="mb-2">
                                                <label>Description</label>
                                                <textarea name="section_bullet_points[{{ $index }}][description]" class="form-control" rows="2"
                                                    placeholder="Enter bullet point description">{{ $point['description'] ?? '' }}</textarea>
                                            </div>
                                            <button type="button"
                                                class="btn btn-sm btn-danger remove-bullet">Remove</button>
                                        </div>
                                    @empty
                                        <div class="bullet-point-item border rounded p-3 mb-3">
                                            <div class="mb-2">
                                                <label>Title</label>
                                                <input type="text" name="section_bullet_points[0][title]" class="form-control"
                                                    placeholder="Enter bullet point title">
                                            </div>
                                            <div class="mb-2">
                                                <label>Description</label>
                                                <textarea name="section_bullet_points[0][description]" class="form-control" rows="2"
                                                    placeholder="Enter bullet point description"></textarea>
                                            </div>
                                            <button type="button"
                                                class="btn btn-sm btn-danger remove-bullet">Remove</button>
                                        </div>
                                    @endforelse
                                </div>

                                <button type="button" class="btn btn-outline-primary mt-2" id="add-bullet-point">+ Add
                                    Bullet Point</button>
                            </div>


                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">

                            <h5 class="mb-3">Section #2</h5>
                            <div class="mb-4">
                                <label for="section_2_heading" class="form-label">Section Heading</label>
                                <input type="text" class="form-control" name="section_2_heading"
                                    value="{{ old('section_2_heading', $service->section_2_heading) }}"
                                    placeholder="write section heading here....">
                            </div>

                            <div class="mb-4">
                                <label for="section_2_content" class="form-label">Section Content</label>
                                <textarea class="form-control rich-editor" name="section_2_content" cols="4" rows="6"
                                    placeholder="write section content here..">{{ old('section_2_content', $service->section_2_content) }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="section_2_image" class="form-label">Section Image</label>
                                <input type="file" class="form-control" name="section_2_image"
                                    accept=".jpg,.png,.jpeg">

                                @if ($service->section_2_image)
                                    <div class="mt-2">
                                        <small>Current Image:</small><br>
                                        <img src="{{ asset('storage/' . $service->section_2_image) }}" width="120"
                                            alt="Uploaded image">
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3">
                                <a href="{{ route('admin.services.index') }}" class="btn btn-outline-danger flex-fill">
                                    <i class="bi bi-x-circle me-2"></i>Discard
                                </a>
                                <button type="submit" class="btn btn-outline-primary flex-fill">
                                    <i class="bi bi-send me-2"></i>Update
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="mb-4">
                                        <h5 class="mb-3">Banner</h5>
                                        <input type="file" class="form-control" name="banner"
                                            accept=".jpg,.png,.jpeg, .webp">

                                        @if ($service->banner)
                                            <div class="mt-2">
                                                <small>Current Banner:</small><br>
                                                <img src="{{ asset('storage/' . $service->banner) }}" width="120"
                                                    alt="Uploaded banner">
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3">Icon</h5>
                                        <input type="file" class="form-control" name="icon"
                                            accept=".jpg,.png,.jpeg, .webp">

                                        @if ($service->icon)
                                            <div class="mt-2">
                                                <small>Current Icon:</small><br>
                                                <img src="{{ asset('storage/' . $service->icon) }}" width="120"
                                                    alt="Uploaded icon">
                                            </div>
                                        @endif
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
                                        value="{{ old('meta_title', optional($service->meta)->meta_title) }}"
                                        placeholder="Meta Title">
                                </div>
                                <div class="col-12">
                                    <label for="meta-description" class="form-label">Meta Description</label>
                                    <textarea class="form-control" name="meta_description" cols="4" rows="6"
                                        placeholder="Write a description here..">{{ old('meta_description', optional($service->meta)->meta_description) }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label for="keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keywords" id="keywords"
                                        value="{{ old('meta_keywords', optional($service->meta)->meta_keywords) }}"
                                        placeholder="Keywords">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </form>
    </div>
@endsection

@push('script')
    <script>
        let bulletIndex = {{ count($oldBulletPoints) > 0 ? count($oldBulletPoints) : 1 }};

        document.getElementById('add-bullet-point').addEventListener('click', function() {
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

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-bullet')) {
                e.target.closest('.bullet-point-item').remove();
            }
        });
    </script>
@endpush
