<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/style/home.css') }}">
    @stack('head')
    <title>Home</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                    @if (setting('site_logo'))
                        <img src="{{ asset('storage/' . setting('site_logo')) }}" width="120">
                    @else
                        <img src="{{ asset('/assets/img/logo.svg') }}" alt="logo">
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

                                        <!-- Column 1: Services -->
                                        <div class="col-md-3">
                                            <h6 class="fw-bold mb-3">Services</h6>
                                            <ul class="list-unstyled">
                                                @foreach (services() as $s)
                                                    <li>
                                                        <a href="{{ route('service.detail', ['service' => $s->url->url ?? null]) }}"
                                                            class="dropdown-item px-0 py-1">
                                                            {{ $s->title }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <!-- Column 2: Business Challenges -->
                                        <div class="col-md-6">
                                            <h6 class="fw-bold mb-3">Business Challenges</h6>
                                            <div class="row g-2">
                                                <div class="col-6">
                                                    <a href="#"
                                                        class="border rounded text-decoration-none p-3 d-block text-dark h-100">
                                                        <img src="{{ asset('assets/img/digital.png') }}" alt=""
                                                            class="mb-2" style="height: 35px;">
                                                        <div>Digital Transformation</div>
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="#"
                                                        class="border rounded text-decoration-none p-3 d-block text-dark h-100">
                                                        <img src="{{ asset('assets/img/security.png') }}" alt=""
                                                            class="mb-2" style="height: 35px;">
                                                        <div>Security</div>
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="#"
                                                        class="border rounded text-decoration-none p-3 d-block text-dark h-100">
                                                        <img src="{{ asset('assets/img/automation.png') }}"
                                                            alt="" class="mb-2" style="height: 35px;">
                                                        <div>Automation</div>
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="#"
                                                        class="border rounded text-decoration-none p-3 d-block text-dark h-100">
                                                        <img src="{{ asset('assets/img/efficiency.png') }}"
                                                            alt="" class="mb-2" style="height: 35px;">
                                                        <div>Gaining Efficiency</div>
                                                    </a>
                                                </div>
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
                                                <li><a href="#"
                                                        class="dropdown-item px-0 py-1 d-flex justify-content-end">Industry
                                                        Manufacturing</a></li>
                                                <li><a href="#"
                                                        class="dropdown-item px-0 py-1 d-flex justify-content-end">Transportation
                                                        Logistics</a></li>
                                                <li><a href="#"
                                                        class="dropdown-item px-0 py-1 d-flex justify-content-end">Healthcare</a>
                                                </li>
                                                <li><a href="#"
                                                        class="dropdown-item px-0 py-1 d-flex justify-content-end">Banks
                                                        & Insurance</a>
                                                </li>
                                                <li><a href="#"
                                                        class="dropdown-item px-0 py-1 d-flex justify-content-end">Consulting
                                                        Providers</a>
                                                </li>
                                                <li><a href="#"
                                                        class="dropdown-item px-0 py-1 d-flex justify-content-end">Non
                                                        Profit</a></li>
                                                <li><a href="#"
                                                        class="dropdown-item px-0 py-1 d-flex justify-content-end text-primary fw-bold">View
                                                        all</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-menu position-static company-megamenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Company
                            </a>
                            <div class="dropdown-menu w-100 p-4 mt-0 border-0 shadow">
                                <div class="container">
                                    <div class="row align-items-start">

                                        <!-- Column 1: Headline -->
                                        <div class="col-md-4">
                                            <h4 class="fw-bold text-dark">Simplifying IT<br>for a complex world.</h4>
                                        </div>

                                        <!-- Column 2: Company Links -->
                                        <div class="col-md-4">
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="dropdown-item px-0 py-1">About us</a>
                                                </li>
                                                <li><a href="#" class="dropdown-item px-0 py-1">Why us</a></li>
                                                <li><a href="#" class="dropdown-item px-0 py-1">Team</a></li>
                                            </ul>
                                        </div>

                                        <!-- Column 3: Online Stores -->
                                        <div class="col-md-4 p-3 rounded">
                                            <h6 class="fw-bold mb-3 text-primary">Online Stores</h6>
                                            <ul class="list-unstyled d-flex flex-column gap-2">
                                                @foreach (stores() as $st)
                                                    <li class="d-flex align-items-center gap-2">
                                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="15" viewBox="0 0 24 15">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path
                                                                    d="M6.76 5.21c0 .3.04.54.1.71.06.18.13.37.25.58.04.06.05.13.05.18 0 .08-.05.16-.15.24l-.5.34a.38.38 0 0 1-.21.07c-.08 0-.16-.04-.24-.11-.11-.12-.2-.25-.29-.38a6.18 6.18 0 0 1-.24-.47c-.63.73-1.4 1.1-2.35 1.1-.67 0-1.2-.19-1.6-.57C1.2 6.5 1 6 1 5.36c0-.67.24-1.23.73-1.64a2.9 2.9 0 0 1 1.95-.62c.28 0 .56.02.85.06.3.04.6.1.92.18v-.59c0-.6-.13-1.03-.38-1.27-.25-.25-.68-.37-1.3-.37-.28 0-.56.03-.86.1a6.36 6.36 0 0 0-1.14.38.49.49 0 0 1-.13.02c-.11 0-.17-.08-.17-.25V.97c0-.12.02-.22.06-.28a.6.6 0 0 1 .22-.16A4.84 4.84 0 0 1 4 .02c.95 0 1.65.21 2.1.64.43.43.66 1.09.66 1.97V5.2h.01ZM3.52 6.43c.27 0 .54-.05.82-.15.3-.1.55-.27.76-.5.13-.16.23-.33.27-.52.05-.2.08-.42.08-.7v-.33a6.67 6.67 0 0 0-1.48-.18c-.54 0-.93.1-1.19.32-.26.21-.4.52-.4.91 0 .38.1.66.3.85.2.2.48.3.84.3Zm6.41.86c-.14 0-.24-.03-.3-.08s-.12-.16-.17-.31L7.6.73A1.4 1.4 0 0 1 7.5.4c0-.13.07-.2.2-.2h.78c.15 0 .25.02.3.08.07.05.12.16.17.3l1.34 5.3 1.24-5.3c.04-.15.1-.25.16-.3a.55.55 0 0 1 .32-.08h.63c.16 0 .26.02.32.08.07.05.12.16.16.3l1.26 5.36L15.77.6c.05-.16.1-.26.16-.31a.52.52 0 0 1 .3-.08h.75c.13 0 .2.06.2.2 0 .04 0 .08-.02.12 0 .05-.02.12-.05.2L15.18 6.9c-.04.16-.1.27-.16.32a.51.51 0 0 1-.3.08h-.7c-.14 0-.25-.03-.31-.08-.07-.06-.12-.16-.15-.32l-1.24-5.15-1.23 5.14c-.04.16-.09.26-.15.32-.07.05-.18.08-.32.08h-.69Zm10.26.21a5.28 5.28 0 0 1-2.15-.46c-.13-.07-.21-.15-.25-.22a.56.56 0 0 1-.04-.23v-.4c0-.17.06-.25.18-.25.05 0 .1 0 .14.02l.2.08a4.34 4.34 0 0 0 1.83.38c.5 0 .9-.09 1.17-.27a.86.86 0 0 0 .41-.75c0-.23-.07-.41-.21-.56a2 2 0 0 0-.81-.42l-1.16-.36a2.43 2.43 0 0 1-1.27-.81 1.9 1.9 0 0 1 .39-2.7c.24-.18.5-.32.83-.41a3.48 3.48 0 0 1 1.54-.1l.52.08a6.2 6.2 0 0 1 .79.27c.1.06.19.13.24.2.04.06.07.15.07.26v.38c0 .17-.07.25-.19.25a.83.83 0 0 1-.3-.1c-.45-.2-.96-.3-1.53-.3-.46 0-.82.07-1.06.22-.25.15-.38.38-.38.71 0 .23.08.42.24.57.16.15.46.3.88.44l1.13.36c.58.18 1 .44 1.24.76.25.33.37.7.37 1.12 0 .34-.07.65-.21.93-.14.27-.34.5-.58.7-.25.2-.55.34-.89.45a3.8 3.8 0 0 1-1.14.16Z"
                                                                    fill="#252F3E" fill-rule="nonzero"></path>
                                                                <g fill="#F90">
                                                                    <path
                                                                        d="M21.7 11.38c-2.63 1.94-6.44 2.97-9.72 2.97-4.6 0-8.74-1.7-11.87-4.52-.25-.23-.03-.53.27-.36a23.94 23.94 0 0 0 11.88 3.16c2.9 0 6.1-.6 9.05-1.85.44-.2.82.28.39.6Z">
                                                                    </path>
                                                                    <path
                                                                        d="M22.8 10.14c-.34-.43-2.23-.21-3.08-.1-.26.03-.3-.2-.07-.37 1.5-1.05 3.97-.75 4.26-.4.29.36-.08 2.83-1.49 4.01-.21.19-.42.09-.32-.15.32-.79 1.03-2.57.7-3Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg> --}}
                                                        <img src="{{ asset('storage/' . $st->logo) }}"
                                                            style="width: 50px;" alt="">
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
                                <a href="">Client Support <i class="fa-solid fa-arrow-right"></i></a>
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
                                @foreach (services() as $sr)
                                    <li>
                                        <a href="{{ route('service.detail', ['service' => $sr->url->url ?? null]) }}">
                                            {{ $sr->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="links">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="">Who We Are</a></li>
                                <li><a href="">FAQ</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="footer-right mt-5 mt-md-0">
                        <div class="footer-right-content">
                            @if (setting('site_logo'))
                            <img src="{{ asset('storage/' . setting('site_logo')) }}" width="120" alt="logo-white">

                            @else
                            <img src="{{ asset('/assets/img/logo-white.svg') }}" alt="logo-white">

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
                            <div class="review-img d-flex align-items-center" style="gap: 15px;">
                                <img src="{{ asset('/assets/img/clutch-logo.svg') }}" alt="clutch">
                                <p class="mb-0">31 Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 d-md-flex align-items-center px-md-0 col-xl-4">
                        <div class="address">
                            <p>{{ setting('address') }}</p>
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
                            <li><a href="{{ setting('linkedin') }}"><i class="fab fa-linkedin"></i> Linkedin</a></li>
                            @endif
                            @if (setting('instagram'))
                            <li><a href="{{ setting('instagram') }}"><i class="fab fa-instagram"></i> Instagram</a></li>
                            @endif
                            @if (setting('pinterest'))
                            <li><a href="{{ setting('pinterest') }}"><i class="fab fa-pinterest"></i> Pinterest</a></li>
                            @endif
                            @if (setting('twitter'))
                            <li><a href="{{ setting('twitter') }}"><i class="fab fa-twitter"></i> Twitter</a></li>
                            @endif
                            @if (setting('facebook'))
                            <li><a href="{{ setting('facebook') }}"><i class="fab fa-facebook"></i> Facebook</a></li>
                            @endif
                            @if (setting('youtube'))
                            <li><a href="{{ setting('youtube') }}"><i class="fab fa-twitter"></i> Youtube</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="note">
                <a href="">{{ setting('copyright') }}</a>
                <a href="{{ route('terms') }}">Terms & Conditions</a>
                <a href="{{ route('privacy') }}">Privacy Policy</a>
            </div>
        </div>
    </section>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(window).on("scroll", function() {
        const scrollTop = $(window).scrollTop();
        const offset = scrollTop * 0.2;
        $("#scroll-dots").css("transform", `translateY(calc(-50% + ${offset}px))`);
    });
</script>

<script>
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
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    })
</script>

<script>
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
    })
</script>

<script>
    $(document).ready(function() {
        $('.accordion-button').on('click', function() {
            const icon = $(this).find('.toggle-icon');
            const isCollapsed = $(this).hasClass('collapsed');

            icon.text(isCollapsed ? '-' : '+');
        });
    });
</script>

<script>
    $(window).on("scroll", function() {
        const scrollTop = $(window).scrollTop();
        const maxScroll = $(document).height() - $(window).height();
        const scrollProgress = scrollTop / maxScroll;
        const scale = 1 + scrollProgress * 0.3;

        $(".footer-bg-image").css("transform", `scale(${scale})`);
    });
</script>

</html>
