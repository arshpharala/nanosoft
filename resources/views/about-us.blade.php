@extends('layouts.master')
@push('head')
@endpush
@section('content')
    <section class="services-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <h6 class="sub-heading">About Us</h6>
                    <h2 class="title py-5">About Us</h2>
                    <a href="{{ route('contact') }}" class="button secondary-btn" style="width: fit-content;">Schedule a free
                        Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us py-5 bg-white">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-5">
                    @if (setting('site_logo'))
                        <img src="{{ asset('storage/' . setting('site_logo')) }}" alt="NanoSoft Team" class="img-fluid rounded shadow">
                    @endif
                </div>
                <div class="col-md-7">
                    <h2 class="mb-4">About NanoSoft Ltd.</h2>
                    <p>
                        Established in 2008, <strong>NanoSoft Ltd.</strong> is a specialist in supplying high-quality
                        refurbished and new IT hardware, serving businesses and individuals worldwide. Driven by our “Think
                        Green - Embrace the Reborn” ethos, we champion sustainable IT reuse and support the global
                        zero-landfill initiative.
                    </p>
                    <p>
                        From PAT-tested, data-wiped computers to professional-grade containers of bulk hardware, every
                        product undergoes rigorous quality checks before shipping. We back our equipment with a 28-day
                        return-to-base warranty to ensure total peace of mind.
                    </p>
                    <p>
                        Our customer-first philosophy means expert support is just a call or email away. We guarantee 100%
                        satisfaction—believing that service excellence is the cornerstone of our company ethos.
                    </p>
                </div>
            </div>
        </div>
    </section>


    @include('includes.contact', ['services' => services()])
@endsection
