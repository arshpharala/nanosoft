@extends('admin.layouts.app')
@section('content')
    <div class="main-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Edit Page</div>
        </div>
        <form method="POST" action="{{ route('admin.pages.update', $page) }}">

            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" value="{{ old('title', $page->title ?? '') }}"
                                    class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Tagline</label>
                                <input type="text" name="tagline" value="{{ old('tagline', $page->title ?? '') }}"
                                    class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Slug (URL)</label>
                                <input type="text" name="slug" value="{{ old('slug', $page->slug ?? '') }}"
                                    class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <input type="checkbox" name="is_active" value="1"
                                    {{ isset($page) && $page->is_active ? 'checked' : '' }}> Active
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Banner Image</h5>
                                <input type="file" class="form-control" name="banner"
                                    accept=".jpg, .png, .webp, image/jpeg, image/png">
                                @if ($page->banner)
                                    <div class="mt-2">
                                        <small>Current Banner:</small><br>
                                        <img src="{{ asset('storage/' . $page->banner) }}" width="120"
                                            alt="Uploaded banner">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">

                            <h5 class="mb-3">Section #1</h5>
                            <div class="mb-4">
                                <label for="section_heading" class="form-label">Section Heading</label>
                                <input type="text" class="form-control" name="section_heading"
                                    value="{{ old('section_heading', $page->section_heading) }}"
                                    placeholder="write section heading here....">
                            </div>

                            <div class="mb-4">
                                <label for="section_content" class="form-label">Section Content</label>
                                <textarea class="form-control rich-editor" name="section_content" cols="4" rows="6"
                                    placeholder="write section content here..">{{ old('section_content', $page->section_content) }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="section_image" class="form-label">Section Image</label>
                                <input type="file" class="form-control" name="section_image" accept=".jpg,.png,.jpeg">

                                @if ($page->section_image)
                                    <div class="mt-2">
                                        <small>Current Image:</small><br>
                                        <img src="{{ asset('storage/' . $page->section_image) }}" width="120"
                                            alt="Uploaded image">
                                    </div>
                                @endif
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Bullet Points</h5>

                                <div id="bullet-point-wrapper">
                                    @php $oldBulletPoints = old('section_bullet_points', json_decode($page->section_bullet_points, true) ?? []); @endphp

                                    @forelse($oldBulletPoints as $index => $point)
                                        <div class="bullet-point-item border rounded p-3 mb-3">
                                            <div class="mb-2">
                                                <label>Title</label>
                                                <input type="text"
                                                    name="section_bullet_points[{{ $index }}][title]"
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
                                    value="{{ old('section_2_heading', $page->section_2_heading) }}"
                                    placeholder="write section heading here....">
                            </div>

                            <div class="mb-4">
                                <label for="section_2_content" class="form-label">Section Content</label>
                                <textarea class="form-control rich-editor" name="section_2_content" cols="4" rows="6"
                                    placeholder="write section content here..">{{ old('section_2_content', $page->section_2_content) }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="section_2_image" class="form-label">Section Image</label>
                                <input type="file" class="form-control" name="section_2_image"
                                    accept=".jpg,.png,.jpeg">

                                @if ($page->section_2_image)
                                    <div class="mt-2">
                                        <small>Current Image:</small><br>
                                        <img src="{{ asset('storage/' . $page->section_2_image) }}" width="120"
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
                                        value="{{ old('meta_title', optional($page->meta)->meta_title) }}"
                                        placeholder="Meta Title">
                                </div>
                                <div class="col-12">
                                    <label for="meta-description" class="form-label">Meta Description</label>
                                    <textarea class="form-control" name="meta_description" cols="4" rows="6"
                                        placeholder="Write a description here..">{{ old('meta_description', optional($page->meta)->meta_description) }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label for="keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keywords" id="keywords"
                                        value="{{ old('meta_keywords', optional($page->meta)->meta_keywords) }}"
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
@endsection
@push('script')
@endpush
