@extends('theme.layouts.master')
@section('content')
<div class="container py-4">
    <div class="dynamic-page-content">
        <h1 class="mb-4">{{ $page->title }}</h1>
        {!! render_editorjs($page->content) !!}
    </div>
</div>
@endsection
