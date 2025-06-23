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
                    <h2 class="title">Our location</h2>
                    <p class="text">Based in Maldon, Essex, Nanosoft Corporation Limited has been serving clients across
                        the UK since 2008.
                        Site visits are available by appointment, and our team is always happy to assist you. Whether you're
                        nearby or remote,
                        we're equipped to support your IT needs wherever you are.</p>
                </div>
            </div>

            <ul class="locations-list d-flex flex-wrap">
                @foreach ($locations as $location)
                    <li class="col-12 col-md-4">
                        <h3>{{ $location->name }}</h3>
                        <h5>{{ $location->city }}</h5>
                        <p class="text">{{ $location->address }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    @include('includes.contact', ['services' => services()])


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.7446670325385!2d0.679085876633896!3d51.73770537186658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8e13bb9fdbb55%3A0xf3680aeeea93ae4f!2sThe%20Causeway%2C%20Heybridge%2C%20Maldon%20CM9%204LJ%2C%20UK!5e0!3m2!1sen!2sae!4v1750709583356!5m2!1sen!2sae" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
