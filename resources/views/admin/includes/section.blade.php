@if (!empty($section->id))
    <input type="hidden" name="section[{{ $key }}][id]" value="{{ $section->id }}">
@endif

<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Section #{{ $key + 1 }}</h5>
        <div class="row">
            <div class="col-12">
                {{-- Section Heading --}}
                <div class="mb-4">
                    <label class="mb-2">Section Heading</label>
                    <input type="text" class="form-control"
                           name="section[{{ $key }}][heading]"
                           value="{{ old("section.$key.heading", $section->heading ?? '') }}"
                           placeholder="Write heading here...">
                </div>

                {{-- Section Content --}}
                <div class="mb-4">
                    <label class="mb-2">Section Content</label>
                    <textarea class="form-control rich-editor" name="section[{{ $key }}][content]" rows="6"
                              placeholder="Write content here...">{{ old("section.$key.content", $section->content ?? '') }}</textarea>
                </div>

                {{-- Section Image --}}
                <div class="mb-4">
                    <label class="mb-2">Section Image</label>
                    <input type="file" class="form-control"
                           name="section[{{ $key }}][image]"
                           accept=".jpg, .png, image/jpeg, image/png">

                    @if (!empty($section->image))
                        <img src="{{ asset('storage/' . $section->image) }}" class="mt-2" width="150">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
