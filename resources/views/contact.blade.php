@extends('layouts.master')
@push('head')
    <link rel="stylesheet" href="{{ asset('/assets/style/contact.css') }}">
@endpush
@section('content')
    <section class="contact-banner">
        <div class="container">
            <h6 class="sub-heading">Contact</h6>
            <h2 class="title">We’re here to help</h2>
            <div class="contact-info d-flex align-items-center justify-content-center mt-4">
                <div class="contact-box pe-3">
                    <p class="mb-0">Call us at:</p>
                    <a href="tel:{{ setting('contact_phone') }}">{{ setting('contact_phone') }}</a>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="61" viewBox="0 0 12 61">
                    <path d="m.37.6.95-.3 10.21 30.62L1.31 60.57l-.95-.33 10.11-29.32z" fill="" fill-rule="nonzero"
                        fill-opacity=""></path>
                </svg>
                <div class="contact-box ps-3">
                    <p class="mb-0">Email us:</p>
                    <a href="mailto:{{ setting('contact_email') }}">{{ setting('contact_email') }}</a>
                </div>
            </div>

            <a href="{{ setting('consultation_link') ?? '#' }}" class="button primary-btn mx-auto mb-5 mt-4"
                style="width: fit-content;">
                {{ setting('consultation_button_text') ?? 'Schedule a free consultation' }}
            </a>
            <div class="contact-img">
                <img src="{{ asset('assets/img/contact-img.png') }}" alt="contact-img">
            </div>
        </div>
    </section>

    <section class="locations">
        <div class="container position-relative overflow-hidden">
            <img id="scroll-dots-img" src="{{ asset('assets/img/shape-dots.svg') }}" alt="decorative dots"
                class="position-absolute scroll-dots-img" />

            <div class="row">
                <div class="col-12 col-md-6">
                    <h2 class="title">Our locations</h2>
                    <p class="text">We have offices throughout the East Coast, Midwest, and South — we’d love to show
                        you around sometime. Don’t see an office in your area? We have the power to support your
                        business, no matter the location.</p>
                </div>
            </div>

            <ul class="locations-list d-flex flex-wrap">
                <li class="col-12 col-md-4">
                    <h3>Florida</h3>
                    <h5>Bonita Springs</h5>
                    <p class="text">28200 Old 41 Rd #208 </br> Bonita Springs, FL 34135 </br> <a
                            href="tel:(817) 575-6220">(817) 575-6220</a></p>
                    <a href="">Get Directions</a>
                </li>
                <li class="col-12 col-md-4">
                    <h3>Georgia</h3>
                    <h5>Atlanta</h5>
                    <p class="text">3565 Piedmont Rd NE</br> Building 2, Suite 200 </br> Atlanta GA 30222 </br> <a
                            href="tel:(404) 551-52222">(404) 551-52222</a></p>
                    <a href="">Get Directions</a>
                </li>
                <li class="col-12 col-md-4">
                    <h3>Kansas</h3>
                    <h5>Kansas City</h5>
                    <p class="text">12421 W. 151st St., Suite 100</br> Olathe, KS 66000 </br> <a
                            href="tel:(325) 221-9900">(325) 221-9900</a></p>
                    <a href="">Get Directions</a>
                </li>
            </ul>
        </div>
    </section>

    @include('includes.contact', ['services' => services()])
@endsection
