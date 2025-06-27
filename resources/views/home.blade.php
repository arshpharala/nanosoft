@extends('layouts.master')
@section('content')
    <section class="banner">
        <div class="container">
            <div class="banner-container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="banner-content">
                            <h1 class="title fs-1">Secure IT Solutions for a Smarter World</h1>
                            <p class="fs-3">Precision Security. Personalized Solutions</p>
                            <div class="buttons d-flex align-items-center">
                                <a href="{{ route('contact') }}" class="button primary-btn">Get in Touch </a>
                                {{-- <a href="#" class="button secondary-btn">Services</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img fetchpriority="high" class="w-100" src="{{ asset('/assets/img/banner-img.png') }}"
                            alt="banner-img" sizes="(max-width: 1498px) 100vw, 1498px">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider">
        <span></span>
    </div>

    <section class="simplyfying">
        <div class="container">
            <div class="simplyfying-container position-relative">
                <div class="simplyfying-content">
                    <p>What do we do</p>
                    <div class="divider"><span></span></div>
                    <h2>Simplifying IT for a complex world.</h2>
                </div>
                <img id="scroll-dots" src="{{ asset('/assets/img/shape-dots.svg') }}" alt="dots"
                    class="scrolling-image" />
            </div>
        </div>
    </section>

    <section class="why-us">
        <div class="container">
            <div class="why-us-container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <img src="{{ asset('/assets/img/cost-effectiveness.svg') }}" alt="cost">
                        <h3>Cost-effectiveness</h3>
                        <p>We offer affordable IT solutions that help you reduce costs and improve your bottom line.</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <img src="{{ asset('/assets/img/innovative.svg') }}" alt="innovative">
                        <h3>Innovative Technology</h3>
                        <p>We stay up-to-date with the latest technology trends and offer innovative solutions that help
                            you stay ahead of the competition.</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <img src="{{ asset('/assets/img/industry.svg') }}" alt="industry">
                        <h3>Industry Expertise</h3>
                        <p>We specialize in serving specific industries, such as healthcare, finance, or manufacturing,
                            and offer tailored solutions that meet your unique needs.</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <img src="{{ asset('/assets/img/scalability.svg') }}" alt="scalability">
                        <h3>Scalability</h3>
                        <p>Our solutions are scalable and can grow with your business, ensuring that you get the most
                            value out of your investment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="solutions">
        <div class="container">
            <p class="how">How we do</p>
            <h2>Solutions</h2>
            <div class="row">
                @foreach (services()->take(6) as $service)
                    <div class="col-12 col-md-4">
                        <div class="solution-box">
                            <a href="{{ route('service.detail', ['category' => $service->category->slug, 'service' => $service->slug]) }}"
                                class="solution-content">
                                <img src="{{ asset('/assets/img/managed-services.png') }}" alt="service">
                                <h3>{{ $service->title }}</h3>
                                <p>{!! $service->short_description !!}</p>
                            </a>
                            <a href="{{ route('service.detail', ['category' => $service->category->slug, 'service' => $service->slug]) }}"
                                class="learn"><span>Learn More</span></a>
                        </div>
                    </div>
                @endforeach

            </div>
            <a href="" class="button primary-btn mx-auto mt-4" style="width: fit-content;">View All Solutions</a>
        </div>
    </section>

    <section class="what-do">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <small class="how mb-2 d-flex">How we do</small>
                    <h2 class="fs-1 fw-bold mb-5">Solving IT challenges in every industry, every day.</h2>
                    <ul class="d-flex flex-wrap" style="row-gap: 20px;">
                        @foreach ($industries as $industry)
                            <li class="d-flex align-items-center rounded-pill pe-4" style="background-color: #95be53;">
                                @if ($industry->image)
                                    <img src="{{ asset('storage/' . $industry->image) }}" width="55px" height="55px"
                                        class="rounded-circle object-cover" alt="{{ $industry->name }}">
                                @else
                                    <img src="assets/img/banner-img.png" width="55px" height="55px"
                                        class="rounded-circle object-cover" alt="{{ $industry->name }}">
                                @endif
                                <p class="ms-2 mb-0">{{ $industry->name }}</p>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="best">
        <div class="container">
            <div class="best-container">
                <h3 class="how">What We Offer</h3>
                <h2>Explore Our Expert IT Solutions</h2>
                <p>
                    Discover our wide range of specialized IT services—from cybersecurity and cloud infrastructure to secure
                    asset disposal and managed IT operations.
                    Each solution is tailored to address today’s business challenges with precision, innovation, and
                    security at its core.
                </p>
                <h4>IT Challenges Met with Expertise</h4>
            </div>


            <div class="best-boxes w-full row p-2 m-0 px-0">
                <div class="col-3 ps-0">
                    <span></span>
                </div>
                <div class="col-3">
                    <span></span>
                </div>
                <div class="col-3">
                    <span></span>
                </div>
                <div class="col-3 pe-0">
                    <span></span>
                </div>
            </div>
            <div class="container">
                <div class="owl-carousel best-carousel">
                    @foreach (categoriesWithServices() as $category)
                        <div class="item">
                            <h2>{{ $category->name }}</h2>
                            <p>{{ $category->short_description }}</p>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            <span class="toggle-icon me-2">+</span> View More
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($category->services as $service)
                                                    <li>{{ $service->title }}</li>
                                                @endforeach
                                                <p>
                                                    @if ($category->icon)
                                                        <img src="{{ asset('storage/' . $category->icon) }}"
                                                            alt="{{ $category->name }}">
                                                    @endif
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
    </section>

    {{-- <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <small class="btn btn-secondary w-fit text-uppercase border-0 mb-3"
                        style="background-color: #f5f5f5; color: #5f6567;">Where we do</small>
                    <h2 class="fs-1 fw-bold mb-5">Success Stories</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card p-3">
                        <img src="assets/img/insurance.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="" class="card-top-text">Cloud Hosting</a>
                            <h5 class="card-title fw-bold">Major Insurance Provider Saves $750k per Month With Big Data
                                Migration
                            </h5>
                            <p class="card-text">The company needed to complete a complex migration on a tight deadline
                                to avoid millions of dollars in post-contract fees and fines.</p>
                            <ul>
                                <li>✔︎ Modern infrastructure</li>
                                <li>✔︎ Consulting services</li>
                            </ul>
                            <a href="" class="text-secondary d-block mt-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card p-3">
                        <img src="assets/img/insurance.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="" class="card-top-text">Cloud Hosting</a>
                            <h5 class="card-title fw-bold">Major Insurance Provider Saves $750k per Month With Big Data
                                Migration
                            </h5>
                            <p class="card-text">The company needed to complete a complex migration on a tight deadline
                                to avoid millions of dollars in post-contract fees and fines.</p>
                            <ul>
                                <li>✔︎ Modern infrastructure</li>
                                <li>✔︎ Consulting services</li>
                            </ul>
                            <a href="" class="text-secondary d-block mt-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card p-3">
                        <img src="assets/img/insurance.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="" class="card-top-text">Cloud Hosting</a>
                            <h5 class="card-title fw-bold">Major Insurance Provider Saves $750k per Month With Big Data
                                Migration
                            </h5>
                            <p class="card-text">The company needed to complete a complex migration on a tight deadline
                                to avoid millions of dollars in post-contract fees and fines.</p>
                            <ul>
                                <li>✔︎ Modern infrastructure</li>
                                <li>✔︎ Consulting services</li>
                            </ul>
                            <a href="" class="text-secondary d-block mt-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="reviews">
        <div class="container">
            <div class="owl-carousel review-carousel">
                @foreach ($testimonials as $testimonial)
                    <div class="item">
                        @if ($testimonial->company_icon)
                            <img src="{{ asset('/storage/' . $testimonial->company_icon) }}" alt="review-img"
                                class="reviews-logo">
                        @else
                            <img src="{{ asset('/assets/img/insurance.webp') }}" alt="review-img" class="reviews-logo">
                        @endif
                        <h4>{{ $testimonial->testimonial }}</h4>
                        <h5>{{ $testimonial->name }}</h5>
                        <p>{{ $testimonial->designation }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    @include('includes.contact', ['services' => services()])

    <section class="recognized">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-6">
                    <div class="recognized-content">
                        <p class="how">Partners</p>
                        <h2>Recognized by the best</h2>
                        <h6>The company needed to complete a complex migration on a tight deadline to avoid millions of
                            dollars in post-contract fees and fines.</h6>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <img src="{{ asset('/assets/img/recognized-img.png') }}" alt="recognized-img" class="w-100">
                </div>
            </div>
        </div>
    </section>
@endsection
