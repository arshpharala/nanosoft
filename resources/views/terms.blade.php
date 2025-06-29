@extends('layouts.master')
@push('head')
@endpush
@section('content')
    <section class="services-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <h6 class="sub-heading">Terms</h6>
                    <h2 class="title py-5">Terms and Conditions</h2>
                    <a href="{{ route('contact') }}" class="button secondary-btn" style="width: fit-content;">Schedule a free
                        Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section class="terms-conditions py-5 bg-white">
        <div class="container">

            <p>Welcome to NanoSoft Ltd. By accessing or using our website, products, or services, you agree to comply with
                and be bound by the following Terms and Conditions. Please read them carefully before using our services.
            </p>

            <h5 class="mt-4 fw-bold">1. Acceptance of Terms</h5>
            <p>By using NanoSoft Ltd’s website or services, you acknowledge that you have read, understood, and agreed to
                these Terms and Conditions and our Privacy Policy.</p>

            <h5 class="mt-4 fw-bold">2. Use of Services</h5>
            <p>You agree to use our services for lawful purposes only. You must not use our platform for any illegal or
                unauthorized activities. You are responsible for ensuring that all information you provide is accurate and
                up to date.</p>

            <h5 class="mt-4 fw-bold">3. Intellectual Property</h5>
            <p>All content on this website, including text, graphics, logos, images, and software, is the property of
                NanoSoft Ltd or its licensors and is protected by intellectual property laws. You may not reproduce,
                distribute, or create derivative works without our explicit permission.</p>

            <h5 class="mt-4 fw-bold">4. Product Descriptions and Availability</h5>
            <p>We strive to provide accurate information about our products and services. However, we do not guarantee that
                descriptions or other content are error-free, complete, or current. Product availability is subject to
                change without notice.</p>

            <h5 class="mt-4 fw-bold">5. Limitation of Liability</h5>
            <p>To the fullest extent permitted by law, NanoSoft Ltd shall not be liable for any damages arising from the use
                or inability to use our products or services, including indirect, incidental, or consequential damages.</p>

            <h5 class="mt-4 fw-bold">6. Privacy and Data Protection</h5>
            <p>Your use of our services is also governed by our Privacy Policy, which explains how we collect, use, and
                protect your personal data.</p>

            <h5 class="mt-4 fw-bold">7. Changes to Terms</h5>
            <p>We reserve the right to update or modify these Terms and Conditions at any time without prior notice.
                Continued use of our services constitutes your acceptance of any changes.</p>

            <h5 class="mt-4 fw-bold">8. Governing Law</h5>
            <p>These Terms and Conditions are governed by and construed in accordance with the laws of the United Kingdom.
                Any disputes arising under these terms shall be subject to the exclusive jurisdiction of the courts in the
                UK.</p>

            <h5 class="mt-4 fw-bold">9. Contact Us</h5>
            <p>If you have any questions about these Terms and Conditions, please contact us at <a
                    href="mailto:info@nanosoftltd.com">info@nanosoftltd.com</a>.</p>

            <p class="mt-4">Thank you for choosing NanoSoft Ltd.</p>
        </div>
    </section>






    @include('includes.contact', ['services' => services()])
@endsection
