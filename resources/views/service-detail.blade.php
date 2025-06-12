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
                    <p class="text">Why hire an internal IT person, when you can have an entire team of IT experts for a
                        fraction of the cost?</p>
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
    </section>

    <section class="managed">
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
    </section>

    <section class="performance">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6" style="height: fit-content;">
                    <div class="performance-header d-flex flex-column flex-md-row align-items-center position-relative">
                        <div class="performance-text mt-5 mt-md-0">
                            <h2 class="title">Cutting-edge tools that drive performance</h2>
                            <p>If your technology is draining resources rather than optimizing them, we can get you back
                                on track. A professionally managed services provider can give you the decisive edge to:
                            </p>
                        </div>
                        <img id="scroll-performance-dots" src="{{asset('assets/img/shape-dots-black.svg') }}" alt="shape">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <ul>
                        <li>
                            <h3>Technical Implementation</h3>
                            <p>We offer affordable IT solutions that help you reduce costs and improve your bottom line.
                            </p>
                        </li>
                        <li>
                            <h3>IT Helpdesk Support</h3>
                            <p>We offer affordable IT solutions that help you reduce costs and improve your bottom line.
                            </p>
                        </li>
                        <li>
                            <h3>Technical Implementation</h3>
                            <p>We offer affordable IT solutions that help you reduce costs and improve your bottom line.
                            </p>
                        </li>
                        <li>
                            <h3>IT Helpdesk Support</h3>
                            <p>We offer affordable IT solutions that help you reduce costs and improve your bottom line.
                            </p>
                        </li>
                        <li>
                            <h3>Technical Implementation</h3>
                            <p>We offer affordable IT solutions that help you reduce costs and improve your bottom line.
                            </p>
                        </li>
                        <li>
                            <h3>IT Helpdesk Support</h3>
                            <p>We offer affordable IT solutions that help you reduce costs and improve your bottom line.
                            </p>
                        </li>
                        <li>
                            <h3>Technical Implementation</h3>
                            <p>We offer affordable IT solutions that help you reduce costs and improve your bottom line.
                            </p>
                        </li>
                        <li>
                            <h3>IT Helpdesk Support</h3>
                            <p>We offer affordable IT solutions that help you reduce costs and improve your bottom line.
                            </p>
                        </li>
                        <li>
                            <h3>Technical Implementation</h3>
                            <p>We offer affordable IT solutions that help you reduce costs and improve your bottom line.
                            </p>
                        </li>
                        <li>
                            <h3>IT Helpdesk Support</h3>
                            <p>We offer affordable IT solutions that help you reduce costs and improve your bottom line.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="reviews">
        <div class="container">
            <div class="owl-carousel review-carousel">
                <div class="item">
                    <img src="{{asset('assets/img/insurance.webp') }}" alt="review-img" class="reviews-logo">
                    <h3>Tecnologia implemented such a powerful platform that we had no break in service when our
                        employees had to work from home due to the COVID-19 pandemic. We weren’t concerned about how to
                        shift to a remote working environment because Integris facilitated a seamless transition.</h3>
                    <h5>Amanda Parks</h5>
                    <p>Network Manager, Healthcare Organization</p>
                </div>
                <div class="item">
                    <img src="{{asset('assets/img/insurance.webp" alt="review-img" class="reviews-logo">
                    <h3>Tecnologia implemented such a powerful platform that we had no break in service when our
                        employees had to work from home due to the COVID-19 pandemic. We weren’t concerned about how to
                        shift to a remote working environment because Integris facilitated a seamless transition.</h3>
                    <h5>Amanda Parks</h5>
                    <p>Network Manager, Healthcare Organization</p>
                </div>
                <div class="item">
                    <img src="{{asset('assets/img/insurance.webp" alt="review-img" class="reviews-logo">
                    <h3>Tecnologia implemented such a powerful platform that we had no break in service when our
                        employees had to work from home due to the COVID-19 pandemic. We weren’t concerned about how to
                        shift to a remote working environment because Integris facilitated a seamless transition.</h3>
                    <h5>Amanda Parks</h5>
                    <p>Network Manager, Healthcare Organization</p>
                </div>
            </div>
            <div class="ratings d-flex align-items-center ms-auto" style="gap: 35px; width: fit-content;">
                <div class="rating-box">
                    <div class="reviewed d-flex align-items-center mb-2" style="gap: 5px;">
                        <p class="mb-0">Reviewed On</p>
                        <ul class="d-flex align-items-center">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="review-img d-flex align-items-center justify-content-between" style="gap: 5px;">
                        <img src="{{asset('assets/img/clutch-logo.svg" alt="clutch">
                        <p class="mb-0">31 Reviews</p>
                    </div>
                </div>
                <div class="rating-box d-flex align-items-center" style="gap: 8px;">
                    <div class="reviewed d-flex align-items-center">
                        <img src="{{asset('assets/img/google.svg" alt="google">
                    </div>
                    <div class="review-img d-flex align-items-center flex-column" style="gap: 3px;">
                        <div class="d-flex align-items-center justify-content-between w-full" style="gap: 5px;">
                            <h6 class="review mb-0">4.9</h6>
                            <ul class="d-flex align-items-center">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star-half-stroke"></i></li>
                            </ul>
                        </div>
                        <a class="mb-0" href="#">Customer Reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @include('includes.contact', ['services' => services()])
@endsection
