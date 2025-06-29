@extends('layouts.master')
@push('head')
    <link rel="stylesheet" href="{{ asset('/assets/style/services.css') }}">
@endpush
@section('content')
    <section class="services-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <h6 class="sub-heading">Solutions</h6>
                    <h2 class="title">{{ $service->title }}</h2>
                    <p class="text">{!! $service->short_description !!}</p>
                    <a href="{{ route('contact') }}" class="button secondary-btn" style="width: fit-content;">Schedule a free
                        Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-12 col-md-6 col-lg-7">
                    <h1 class="title mb-lg-4">Introduction</h1>
                    <p>
                        {!! $service->description !!}
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    @if ($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{$service->title}}" class="w-100 mb-5 mb-md-0 h-100">
                    @else
                    <img src="{{asset('assets/img/benefits-img.png') }}" alt="benefits-img" class="w-100 mb-5 mb-md-0 h-100">
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="benefits">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-12 col-md-6 col-lg-7">
                    <h2 class="mb-lg-4">Benefits of {{ $service->title }} </br> provided by Nanosoft</h2>
                    <p>Are you busy putting out IT fires instead of focusing on your core business? If your technology
                        is draining resources rather than optimizing them, Netsurit can get you back on track. A
                        professionally managed services provider can give you the decisive edge to:</p>
                    <ul>
                        <li>Grow your business while our experts handle your technology.</li>
                        <li>Get more done with information technology that increases productivity and efficiency.</li>
                        <li>Eliminate budgeting surprises with a flat monthly rate for comprehensive IT coverage.</li>
                        <li>Protect your business and your data from unexpected problems and unwanted intruders.</li>
                    </ul>
                    <ul class="benefits-list mt-5 mt-md-4">
                        <li
                            class="d-flex flex-column align-items-center justify-content-center justify-content-md-start align-items-md-start">
                            <h3
                                class="d-flex flex-column flex-md-row justify-content-center align-items-center justify-content-md-start">
                                <i class="fa-solid fa-circle-check mb-3 mb-md-0 me-md-2"></i> IT Service for You
                            </h3>
                            <p class="text-center text-md-start">We know that every businesses’ needs are completely
                                different from the next, so we offer packages for any business size or budget.</p>
                        </li>
                        <li
                            class="d-flex flex-column align-items-center justify-content-center justify-content-md-start align-items-md-start">
                            <h3
                                class="d-flex flex-column flex-md-row justify-content-center align-items-center justify-content-md-start">
                                <i class="fa-solid fa-circle-check mb-3 mb-md-0 me-md-2"></i> Keeping Your Team
                                Productive
                            </h3>
                            <p class="text-center text-md-start">Our managed services include round-the-clock monitoring
                                of your key infrastructure, computers and network servers.</p>
                        </li>
                        <li
                            class="d-flex flex-column align-items-center justify-content-center justify-content-md-start align-items-md-start">
                            <h3
                                class="d-flex flex-column flex-md-row justify-content-center align-items-center justify-content-md-start">
                                <i class="fa-solid fa-circle-check mb-3 mb-md-0 me-md-2"></i> Predictable Costs 24/7
                            </h3>
                            <p class="text-center text-md-start">We doesn’t charge you more when your network is down or
                                a server fails. Our flat-rate fee programs covers all of that whenever you need it done.
                            </p>
                        </li>
                        <li
                            class="d-flex flex-column align-items-center justify-content-center justify-content-md-start align-items-md-start">
                            <h3
                                class="d-flex flex-column flex-md-row justify-content-center align-items-center justify-content-md-start">
                                <i class="fa-solid fa-circle-check mb-3 mb-md-0 me-md-2"></i> Our Team is Ready to Help
                            </h3>
                            <p class="text-center text-md-start">Part of what makes our managed services so exceptional
                                is that we are always available, regardless of time or holiday.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <img src="{{asset('assets/img/benefits-img.png') }}" alt="benefits-img" class="w-100 mb-5 mb-md-0 h-100">
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="managed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-7">
                    <img src="{{asset('assets/img/managed-img.png') }}" alt="managed-img" class="w-100" style="border-radius: 4px;">
                </div>
                <div class="col-12 col-md-6 col-lg-5 px-xl-4">
                    <h2 class="mb-4">Our managed IT services let you concentrate on what matters</h2>
                    <p>Are you busy putting out IT fires instead of focusing on your core business? If your technology
                        is draining resources rather than optimizing them, Netsurit can get you back on track. A
                        professionally managed services provider can give you the decisive edge to:</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="performance">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6" style="height: fit-content;">
                    <div class="performance-header d-flex flex-column flex-md-row align-items-center position-relative">
                        <div class="performance-text mt-5 mt-md-0">
                            <h2 class="title">Why Choose Us</h2>
                            {!! $service->why_choose !!}
                        </div>
                        <img id="scroll-performance-dots" src="{{asset('assets/img/shape-dots-black.svg') }}" alt="shape">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <ul>
                        @foreach ($service->benefits as $benefit)

                        <li>
                            <h3>{{ $benefit->title }}</h3>
                            {!! $benefit->short_description !!}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>


    @include('includes.contact', ['services' => services()])
@endsection
