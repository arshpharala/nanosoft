@extends('theme.layouts.master')
@push('head')
    @include('theme.components.banner', [
        'banner' => $page->banner ? asset('storage/' . $page->banner) : asset('assets/img/service-banner.png'),
        'hasBanner' => !empty($page->banner)
    ])
@endpush
@section('content')
    <section class="services-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <h6 class="sub-heading">{{ $page->name ?? 'About Us' }}</h6>
                    <h2 class="title py-5">{{ $page->name ?? 'About Us' }}</h2>
                    <a href="{{ route('contact') }}" class="button secondary-btn" style="width: fit-content;">Schedule a free
                        Consultation</a>
                </div>
            </div>
        </div>
    </section>

    @if (!empty($page))
        <section class="about-us py-5 bg-white">
            <div class="container">
                @foreach ($page->sections as $section)
                    <div class="row align-items-center g-4 mb-5 {{ ($loop->even) ? 'flex-row-reverse' : 'flex-row' }}">
                        <div class="col-md-5">
                            @if ($section->image)
                                <img src="{{ asset('storage/' . $section->image) }}" alt="NanoSoft Image"
                                    class="img-fluid rounded shadow">
                            @endif
                        </div>
                        <div class="col-md-7">
                            <h4 class="mb-4">{{ $section->heading }}</h4>
                            <p>
                                {!! $section->content !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif


    @include('theme.components.contact', ['services' => services()])
@endsection
