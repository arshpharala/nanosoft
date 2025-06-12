@extends('layouts.master')
@section('content')
    <section class="banner">
        <div class="container">
            <div class="banner-container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="banner-content">
                            <h1 class="title">Welcome to Nanosoft Corporation Limited</h1>
                            <p>Discover the latest in computers and technology with us. We offer a wide range of products
                                and services that will meet your needs. Browse our selection today and find what you're
                                looking for.</p>
                            <div class="buttons d-flex align-items-center">
                                <a href="#" class="button primary-btn">Schedule a Free Consultation</a>
                                <a href="#" class="button secondary-btn">Services</a>
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

    <section class="review">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="reviewed d-flex align-items-center mb-2">
                        <p>Reviewed On</p>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="review-img d-flex align-items-center">
                        <img src="{{ asset('/assets/img/clutch-logo.svg') }}" alt="clutch">
                        <p>31 Reviews</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <h3>20 <span>Years</span></h3>
                    <p>Proven Track Record</p>
                </div>
                <div class="col-6 col-md-3">
                    <h3>98 <span>%</span></h3>
                    <p>Customer Satisfaction</p>
                </div>
                <div class="col-6 col-md-3">
                    <h3>1,500 <span>Projects</span></h3>
                    <p>We Have Completed</p>
                </div>
                <div class="col-6 col-md-3">
                    <h3>3 <span>Mins</span></h3>
                    <p>Average Answer Time</p>
                </div>
            </div>
        </div>
    </section>

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
            <a href="{{ asset('/assets/pages/about.html') }}">About technologia</a>
        </div>
    </section>

    <section class="solutions">
        <div class="container">
            <p class="how">How we do</p>
            <h2>Solutions</h2>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="solution-box">
                        <a href="" class="solution-content">
                            <img src="{{ asset('/assets/img/managed-services.png') }}" alt="service">
                            <h3>Managed Services</h3>
                            <p>Free up your internal resources to focus on the business by letting us handle day to day
                                support services, management, and monitoring of your IT.</p>
                        </a>
                        <a href="" class="learn"><span>Learn More</span></a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="solution-box">
                        <a href="" class="solution-content">
                            <img src="{{ asset('/assets/img/managed-services.png') }}" alt="service">
                            <h3>Managed Services</h3>
                            <p>Free up your internal resources to focus on the business by letting us handle day to day
                                support services, management, and monitoring of your IT.</p>
                        </a>
                        <a href="" class="learn"><span>Learn More</span></a>

                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="solution-box">
                        <a href="" class="solution-content">
                            <img src="{{ asset('/assets/img/managed-services.png') }}" alt="service">
                            <h3>Managed Services</h3>
                            <p>Free up your internal resources to focus on the business by letting us handle day to day
                                support services, management, and monitoring of your IT.</p>
                        </a>
                        <a href="" class="learn"><span>Learn More</span></a>

                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="solution-box">
                        <a href="" class="solution-content">
                            <img src="{{ asset('/assets/img/managed-services.png') }}" alt="service">
                            <h3>Managed Services</h3>
                            <p>Free up your internal resources to focus on the business by letting us handle day to day
                                support services, management, and monitoring of your IT.</p>
                        </a>
                        <a href="" class="learn"><span>Learn More</span></a>

                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="solution-box">
                        <a href="" class="solution-content">
                            <img src="{{ asset('/assets/img/managed-services.png') }}" alt="service">
                            <h3>Managed Services</h3>
                            <p>Free up your internal resources to focus on the business by letting us handle day to day
                                support services, management, and monitoring of your IT.</p>
                        </a>
                        <a href="" class="learn"><span>Learn More</span></a>

                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="solution-box">
                        <a href="" class="solution-content">
                            <img src="{{ asset('/assets/img/managed-services.png') }}" alt="service">
                            <h3>Managed Services</h3>
                            <p>Free up your internal resources to focus on the business by letting us handle day to day
                                support services, management, and monitoring of your IT.</p>
                        </a>
                        <a href="" class="learn"><span>Learn More</span></a>

                    </div>
                </div>
            </div>
            <a href="#" class="button primary-btn mx-auto mt-4" style="width: fit-content;">View All Solutions</a>
        </div>
    </section>

    <section class="what-do">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <small class="how mb-2 d-flex">How we do</small>
                    <h2 class="fs-1 fw-bold mb-5">Solving IT challenges in every industry, every day.</h2>
                    <ul class="d-flex flex-wrap" style="row-gap: 20px;">
                        <li class="d-flex align-items-center rounded-pill pe-4" style="background-color: #f5f5f5;">
                            <img src="assets/img/banner-img.png" width="55px" height="55px"
                                class="rounded-circle object-cover" alt="">
                            <p class="ms-2 mb-0">Industry & Manufacturing</p>
                        </li>
                        <li class="d-flex align-items-center rounded-pill pe-4" style="background-color: #f5f5f5;">
                            <img src="assets/img/banner-img.png" width="55px" height="55px"
                                class="rounded-circle object-cover" alt="">
                            <p class="ms-2 mb-0">Transportation & Logistics</p>
                        </li>
                        <li class="d-flex align-items-center rounded-pill pe-4" style="background-color: #f5f5f5;">
                            <img src="assets/img/banner-img.png" width="55px" height="55px"
                                class="rounded-circle object-cover" alt="">
                            <p class="ms-2 mb-0">Healthcare</p>
                        </li>
                        <li class="d-flex align-items-center rounded-pill pe-4" style="background-color: #f5f5f5;">
                            <img src="assets/img/banner-img.png" width="55px" height="55px"
                                class="rounded-circle object-cover" alt="">
                            <p class="ms-2 mb-0">Banks & Insurance</p>
                        </li>
                        <li class="d-flex align-items-center rounded-pill pe-4" style="background-color: #f5f5f5;">
                            <img src="assets/img/banner-img.png" width="55px" height="55px"
                                class="rounded-circle object-cover" alt="">
                            <p class="ms-2 mb-0">Consulting Providers</p>
                        </li>
                        <li class="d-flex align-items-center rounded-pill pe-4" style="background-color: #f5f5f5;">
                            <img src="assets/img/banner-img.png" width="55px" height="55px"
                                class="rounded-circle object-cover" alt="">
                            <p class="ms-2 mb-0">Non-Profit</p>
                        </li>
                    </ul>
                    <a href="" class="mt-4 d-block link-underline-primary">View All Industries</a>
                </div>
            </div>
        </div>
    </section>

    <section class="best">
        <div class="container">
            <div class="best-container">
                <h3 class="how">What we use</h3>
                <h2>Bringing the best IT vendors to you.</h2>
                <p>Working only with the best, to ensure the quality of our services, and to bring state of the art
                    technology to those who need it.</p>
                <h4>Your IT Challenges</h4>
            </div>
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
                <div class="item">
                    <h2>Datacenter & Hosting</h2>
                    <p>Our facility – Data Center – is the first in the USA that meets the strict ANSI/TIA-942 rated 4
                        certificate requirements for design, build and operate.</p>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="toggle-icon me-2">+</span> View More
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Amazon Web Services (AWS)</li>
                                        <li>Microsoft Azure</li>
                                        <li>RackSpace</li>
                                        <li>OVH</li>
                                        <li>Digital Ocean</li>
                                        <li>Bluehost</li>
                                    </ul>
                                    <p><img src="{{ asset('/assets/img/microsoft-azure-logo.png') }}" alt="azure"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h2>Collaboration</h2>
                    <p>Despite modern cloud technology, your users operate in a familiar Microsoft Office environment
                        and benefit from broad compatibility and low-threshold access.</p>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="toggle-icon me-2">+</span> View More
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Amazon Web Services (AWS)</li>
                                        <li>Microsoft Azure</li>
                                        <li>RackSpace</li>
                                        <li>OVH</li>
                                        <li>Digital Ocean</li>
                                        <li>Bluehost</li>
                                    </ul>
                                    <p><img src="{{ asset('/assets/img/microsoft-azure-logo.png') }}" alt="azure"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h2>Cloud Platform</h2>
                    <p>Customized cloud platform designed to improve performance, lower IT costs, and provide secure and
                        reliable access to your company data from any device, anytime, anywhere.</p>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="toggle-icon me-2">+</span> View More
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Amazon Web Services (AWS)</li>
                                        <li>Microsoft Azure</li>
                                        <li>RackSpace</li>
                                        <li>OVH</li>
                                        <li>Digital Ocean</li>
                                        <li>Bluehost</li>
                                    </ul>
                                    <p><img src="{{ asset('/assets/img/microsoft-azure-logo.png') }}" alt="azure"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog">
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
    </section>

    <section class="reviews">
        <div class="container">
            <div class="owl-carousel review-carousel">
                <div class="item">
                    <img src="{{ asset('/assets/img/insurance.webp') }}" alt="review-img" class="reviews-logo">
                    <h3>Tecnologia implemented such a powerful platform that we had no break in service when our
                        employees had to work from home due to the COVID-19 pandemic. We weren’t concerned about how to
                        shift to a remote working environment because Integris facilitated a seamless transition.</h3>
                    <h5>Amanda Parks</h5>
                    <p>Network Manager, Healthcare Organization</p>
                </div>
                <div class="item">
                    <img src="{{ asset('/assets/img/insurance.webp') }}" alt="review-img" class="reviews-logo">
                    <h3>Tecnologia implemented such a powerful platform that we had no break in service when our
                        employees had to work from home due to the COVID-19 pandemic. We weren’t concerned about how to
                        shift to a remote working environment because Integris facilitated a seamless transition.</h3>
                    <h5>Amanda Parks</h5>
                    <p>Network Manager, Healthcare Organization</p>
                </div>
                <div class="item">
                    <img src="{{ asset('/assets/img/insurance.webp') }}" alt="review-img" class="reviews-logo">
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
                        <img src="{{ asset('/assets/img/clutch-logo.svg') }}" alt="clutch">
                        <p class="mb-0">31 Reviews</p>
                    </div>
                </div>
                <div class="rating-box d-flex align-items-center" style="gap: 8px;">
                    <div class="reviewed d-flex align-items-center">
                        <img src="{{ asset('/assets/img/google.svg') }}" alt="google">
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
