@extends('admin.layouts.app')
@section('head')
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/grapesjs-component-code-editor/dist/grapesjs-component-code-editor.min.css"
        rel="stylesheet" />
    <style>
        #gjs {
            min-height: 600px;
            border: 1px solid #ccc;
        }
    </style>
@endsection
@section('content')
    <div class="container py-4">
        <h2>{{ isset($page) ? 'Edit' : 'Create' }} Page</h2>
        <form method="POST" action="{{ isset($page) ? route('admin.pages.update', $page) : route('admin.pages.store') }}">
            @csrf
            @if (isset($page))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title', $page->title ?? '') }}" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label>Slug (URL)</label>
                <input type="text" name="slug" value="{{ old('slug', $page->slug ?? '') }}" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label>Page Builder</label>
                <div id="gjs">{!! isset($page) ? $page->content : '' !!}</div>
                <input type="hidden" name="content" id="page-content">
            </div>
            <div class="mb-3">
                <input type="checkbox" name="is_active" value="1"
                    {{ isset($page) && $page->is_active ? 'checked' : '' }}> Active
            </div>
            <button type="submit" class="btn btn-primary">Save Page</button>
        </form>
    </div>
@endsection
@push('script')
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="https://unpkg.com/grapesjs-component-code-editor"></script>
    <script src="https://unpkg.com/grapesjs-parser-postcss"></script>
    <script>
        const editor = grapesjs.init({
            height: "100%",
            container: "#gjs",
            showOffsets: true,
            fromElement: true,
            noticeOnUnload: false,
            storageManager: false,
            selectorManager: {
                componentFirst: true
            },
            plugins: ["grapesjs-component-code-editor", "grapesjs-parser-postcss"],
            pluginsOpts: {
                "grapesjs-component-code-editor": {
                    /* Test here your options  */
                }
            }
        });

        const pn = editor.Panels;
        const panelViews = pn.addPanel({
            id: "views"
        });
        panelViews.get("buttons").add([{
            attributes: {
                title: "Open Code"
            },
            className: "fa fa-file-code-o",
            command: "open-code",
            togglable: false, //do not close when button is clicked again
            id: "open-code"
        }]);
    </script>
@endpush
