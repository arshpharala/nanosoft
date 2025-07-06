<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @if (setting('site_logo'))
        <link rel="icon" href="favicon.png" type="image/png">
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/assets/style/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/style/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/style/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/style/services.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @stack('head')
    <title>@yield('title', 'Home')</title>
</head>

<body>

    @include('theme.layouts.header')

    @yield('content')

    @include('theme.layouts.footer')

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
