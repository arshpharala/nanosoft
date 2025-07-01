<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/assets/style/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/style/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/style/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/style/services.css') }}">
    @stack('head')
    <title>@yield('title', 'Home')</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                    @if (setting('site_logo'))
                        <img src="{{ asset('storage/' . setting('site_logo')) }}" width="180" alt="logo" />
                    @else
                        <img src="{{ asset('/assets/img/logo.svg') }}" alt="logo" />
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 mx-lg-auto">
                        <li class="nav-item dropdown mega-menu position-static">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Solutions
                            </a>
                            <div class="dropdown-menu w-100 p-4 mt-0 border-0 shadow">
                                <div class="container">
                                    <div class="row">
                                        <!-- Column 1: Categories (was Services) -->
                                        <div class="col-md-3">
                                            <h6 class="fw-bold mb-3">Categories</h6>
                                            <ul class="list-unstyled">
                                                @foreach (categoriesWithServices() as $category)
                                                    <li>
                                                        <a href="{{ route('service', ['category' => $category->slug]) }}"
                                                            class="dropdown-item px-0 py-1 category-link"
                                                            data-category="{{ Str::slug($category->slug) }}">
                                                            {{ $category->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <!-- Column 2: Business Challenges (Fixed for proper grid display) -->
                                        <div class="col-md-6">
                                            <h6 class="fw-bold mb-3">Services</h6>
                                            <div id="services-box">
                                                @foreach (categoriesWithServices() as $category)
                                                    <div class="services-group {{ $loop->iteration === 1 ? 'd-block' : 'd-none' }}"
                                                        data-category="{{ Str::slug($category->slug) }}">
                                                        <div class="row g-2">
                                                            @forelse ($category->services as $service)
                                                                <div class="col-6 mb-2">
                                                                    <a href="{{ route('service.detail', ['category' => $category->slug, 'service' => $service->slug]) }}"
                                                                        class="border rounded text-decoration-none p-3 d-block text-dark h-100">
                                                                        {{-- <img src="{{ asset('uploads/icons/' . $service->icon) }}"
                                                                            class="mb-2" style="height: 35px"
                                                                            alt="{{ $service->title }}"> --}}
                                                                        <div>{{ $service->title }}</div>
                                                                    </a>
                                                                </div>
                                                            @empty
                                                                <div class="col-12 text-muted">No services found in this
                                                                    category.</div>
                                                            @endforelse
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>


                                        <!-- Column 3: Industry Focus -->
                                        <div class="col-md-3 position-relative">
                                            <div class="megamenu-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67"
                                                    viewBox="0 0 67 67">
                                                    <g transform="matrix(1 0 0 -1 .33 66.67)" fill="none"
                                                        fill-rule="evenodd">
                                                        <circle fill="#DEE0FF" cx="32.17" cy="32.17" r="21">
                                                        </circle>
                                                        <circle fill="#010ED0" cx="32.17" cy="32.17" r="11.5">
                                                        </circle>
                                                        <circle fill="#DEE0FF" cx="32.17" cy="32.17" r="2">
                                                        </circle>
                                                        <path
                                                            d="M32.13 0A32.13 32.13 0 0 1 55.3 54.37l4.52 4.51h6.84v1.34h-6.45v6.45h-1.34v-6.84l-4.51-4.52A32.13 32.13 0 1 1 32.13 0Zm0 1.33a30.8 30.8 0 1 0 21.3 53.04l-6.09-6.08a22.2 22.2 0 1 1 .94-.94l6.09 6.08a30.8 30.8 0 0 0-22.24-52.1Zm0 9.94A20.86 20.86 0 1 0 46.4 47.34l-6.09-6.09a12.26 12.26 0 1 1 .94-.94l6.1 6.09a20.86 20.86 0 0 0-15.22-35.13Zm0 9.93a10.93 10.93 0 1 0 7.24 19.11l-6.14-6.14a2.32 2.32 0 1 1 .94-.94l6.14 6.14a10.92 10.92 0 0 0-8.18-18.16Zm0 9.94a.99.99 0 1 0 0 1.98.99.99 0 0 0 0-1.98Z"
                                                            fill="#343844" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <h6 class="fw-bold mb-3 d-flex justify-content-end">Industry Focus</h6>
                                            <ul class="list-unstyled d-flex justify-content-end flex-column">
                                                @foreach (industries() as $industry)
                                                    <li><a href="#"
                                                            class="dropdown-item px-0 py-1 d-flex justify-content-end">{{ $industry->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-menu position-static company-megamenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Company
                            </a>
                            <div class="dropdown-menu w-100 p-4 mt-0 border-0 shadow">
                                <div class="container">
                                    <div class="row align-items-start">
                                        <!-- Column 1: Headline -->
                                        <div class="col-md-4">
                                            <h4 class="fw-bold text-dark">Simplifying IT<br />for a complex world.</h4>
                                        </div>

                                        <!-- Column 2: Company Links -->
                                        <div class="col-md-4">
                                            <ul class="list-unstyled">
                                                <li><a href="{{ route('about') }}"
                                                        class="dropdown-item px-0 py-1">About us</a></li>
                                                <li><a href="{{ route('privacy') }}"
                                                        class="dropdown-item px-0 py-1">Privacy Policy</a></li>
                                                <li><a href="{{ route('licences') }}"
                                                        class="dropdown-item px-0 py-1">Licences</a></li>
                                                <li><a href="{{ route('slavery') }}"
                                                        class="dropdown-item px-0 py-1">Modern Slavery</a></li>
                                                <li><a href="{{ route('terms') }}"
                                                        class="dropdown-item px-0 py-1">Terms and Conditions</a></li>
                                            </ul>
                                        </div>

                                        <!-- Column 3: Online Stores -->
                                        <div class="col-md-4 p-3 rounded">
                                            <h6 class="fw-bold mb-3 text-primary">Online Stores</h6>
                                            <ul class="list-unstyled d-flex flex-column gap-2">
                                                @foreach (stores() as $st)
                                                    <li class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('storage/' . $st->logo) }}"
                                                            style="width: 50px;" alt="{{ $st->name }}" />
                                                        <span>{{ $st->name }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                        </li>
                    </ul>

                    <div class="nav-buttons d-flex align-items-center">
                        <div class="client-btn d-flex flex-column">
                            <span>
                                <a href="">{{ __('Client Support') }} <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </span>
                            <a href="tel:{{ setting('contact_phone') }}">{{ setting('contact_phone') }}</a>
                        </div>
                        <a class="button primary-btn" href="{{ route('contact') }}">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="footer-left">
                        <div class="links">
                            <h3>Solutions</h3>
                            <ul>
                                @foreach (categories() as $category)
                                    <li><a
                                            href="{{ route('service', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="links">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('licences') }}">Licences</a></li>
                                <li><a href="{{ route('slavery') }}">Modern Slavery</a></li>
                                <li><a href="{{ route('terms') }}">Terms and Conditions</a></li>
                            </ul>
                        </div>
                        <div class="footer-input">
                            <form action="{{ route('subscribe') }}" method="POST" class="ajax-form">
                                @csrf
                                <input type="email" name="email" placeholder="Don't miss out updates" />
                                <div class="input-container">
                                    <input type="checkbox" name="consent" id="privacy_policy" />
                                    <label for="privacy_policy">I agree to the Privacy Policy and give my permission to
                                        process my personal data for the purposes specified in the Privacy
                                        Policy.</label>
                                </div>
                                <button type="submit" class="button primary-btn">Send <i
                                        class="fa-solid fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="footer-right mt-5 mt-md-0">
                        <div class="footer-right-content">
                            @if (setting('site_logo'))
                                <img src="{{ asset('storage/' . setting('site_logo')) }}" width="180"
                                    alt="logo-white" />
                            @else
                                <img src="{{ asset('/assets/img/logo-white.svg') }}" alt="logo-white" />
                            @endif
                            <a href="{{ route('contact') }}" class="button primary-btn">Schedule Consultation</a>
                        </div>
                        <div class="footer-bg-image position-absolute z-0"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="footer-note">
        <div class="container">
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-12 col-md-4 col-xl-3">
                        <div class="rating-box">
                            @if (setting('site_logo'))
                                <img src="{{ asset('storage/' . setting('site_logo')) }}" width="120"
                                    alt="logo-white" />
                            @else
                                <img src="{{ asset('/assets/img/logo-white.svg') }}" alt="logo-white" />
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-8 d-md-flex align-items-center px-md-0 col-xl-4">
                        <div class="address">
                            <p>{!! nl2br(e(setting('address'))) !!}</p>
                        </div>
                        <div class="address">
                            <p>T: <a href="tel:{{ setting('contact_phone') }}">{{ setting('contact_phone') }}</a></p>
                            <p>E: <a href="mailto:{{ setting('contact_email') }}">{{ setting('contact_email') }}</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-5">
                        <ul class="social-links d-flex flex-wrap">
                            @if (setting('linkedin'))
                                <li><a href="{{ setting('linkedin') }}"><i class="fab fa-linkedin"></i> Linkedin</a>
                                </li>
                            @endif
                            @if (setting('instagram'))
                                <li><a href="{{ setting('instagram') }}"><i class="fab fa-instagram"></i>
                                        Instagram</a></li>
                            @endif
                            @if (setting('pinterest'))
                                <li><a href="{{ setting('pinterest') }}"><i class="fab fa-pinterest"></i>
                                        Pinterest</a></li>
                            @endif
                            @if (setting('twitter'))
                                <li><a href="{{ setting('twitter') }}"><i class="fab fa-twitter"></i> Twitter</a>
                                </li>
                            @endif
                            @if (setting('facebook'))
                                <li><a href="{{ setting('facebook') }}"><i class="fab fa-facebook"></i> Facebook</a>
                                </li>
                            @endif
                            @if (setting('youtube'))
                                <li><a href="{{ setting('youtube') }}"><i class="fab fa-youtube"></i> Youtube</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="note d-flex gap-3">
                <a href="#">{!! setting('copyright') !!}</a>
                {{-- <a href="{{ route('terms') }}">Terms & Conditions</a>
                <a href="{{ route('privacy') }}">Privacy Policy</a> --}}
            </div>
        </div>
    </section>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/js/forms.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.category-link').on('mouseenter', function() {
            const category = $(this).data('category');

            // Hide all service blocks
            $('#services-box .services-group').addClass('d-none');

            // Show the matching block
            $('#services-box .services-group[data-category="' + category + '"]').removeClass('d-none');
        });
    });
</script>
<script>
    $(window).on("scroll", function() {
        const scrollTop = $(window).scrollTop();
        const offset = scrollTop * 0.2;
        $("#scroll-dots").css("transform", `translateY(calc(-50% + ${offset}px))`);
    });

    $('.best-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: true,
        navText: [
            '<i class="fa-solid fa-arrow-left"></i>',
            '<i class="fa-solid fa-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $('.review-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: true,
        navText: [
            '<i class="fa-solid fa-arrow-left"></i>',
            '<i class="fa-solid fa-arrow-right"></i>'
        ],
        items: 1,
    });

    $(document).ready(function() {
        $('.accordion-button').on('click', function() {
            const icon = $(this).find('.toggle-icon');
            const isCollapsed = $(this).hasClass('collapsed');
            icon.text(isCollapsed ? '-' : '+');
        });
    });

    $(window).on("scroll", function() {
        const scrollTop = $(window).scrollTop();
        const maxScroll = $(document).height() - $(window).height();
        const scrollProgress = scrollTop / maxScroll;
        const scale = 1 + scrollProgress * 0.3;

        $(".footer-bg-image").css("transform", `scale(${scale})`);
    });
</script>
@stack('script')

</html>
