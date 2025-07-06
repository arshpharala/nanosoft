@extends('theme.layouts.master')
@push('head')
    <style>
        .category-btn.active {
            box-shadow: 0 .8rem 1rem rgba(0, 0, 0, .15);
            border: 2px solid #076fb6;
            color: #076fb6 !important;
        }
    </style>
@endpush
@section('content')
    <section class="services-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <h6 class="sub-heading">Solutions</h6>
                    <h2 class="title py-5">Our Solutions</h2>
                    <a href="{{ route('contact') }}" class="button secondary-btn" style="width: fit-content;">Schedule a free
                        Consultation</a>
                </div>
            </div>
        </div>
    </section>



    <section class="solutions mt-0">
        <div class="container">
            <div class="row border-bottom pt-2 pb-4 gap-2 category-filter">
                <div class="col text-center bg-white text-dark py-2 align-content-center fw-semibold active category-btn"
                    data-category="all">
                    All Services
                </div>
                @foreach ($categories as $category)
                    <div class="col text-center bg-white text-dark py-2 align-content-center fw-semibold category-btn"
                        data-category="{{ $category->slug }}">
                        {{ $category->name }}
                    </div>
                @endforeach


            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-12 col-md-4 d-flex align-items-stretch"
                        data-category-service="{{ $service->category->slug }}">
                        <div class="solution-box">
                            <a href="{{ route('service.detail', ['category' => $service->category->slug, 'service' => $service->slug]) }}"
                                class="solution-content">
                                @if (!empty($service->icon))
                                    <img src="{{ asset('/storage/' . $service->icon) }}" alt="{{ $service->title }}">
                                @else
                                    <img src="{{ asset('/assets/img/managed-services.png') }}" alt="{{ $service->title }}">
                                @endif
                                <h3>{{ $service->title }}</h3>
                                <p>{!! $service->short_description !!}</p>
                            </a>
                            <a href="{{ route('service.detail', ['category' => $service->category->slug, 'service' => $service->slug]) }}"
                                class="learn mt-auto"><span>Learn More</span></a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>



    @include('theme.components.contact', ['services' => services()])
@endsection

@push('script')
<script>
    $(document).ready(function () {
        const $categoryButtons = $('.category-btn');
        const $serviceCards = $('[data-category-service]');
        const urlCategory = "{{ request()->get('category', 'all') }}";

        // Activate the matched category button and filter services
        function activateCategory(categorySlug) {
            $categoryButtons.removeClass('active');
            $categoryButtons.each(function () {
                if ($(this).data('category') === categorySlug) {
                    $(this).addClass('active');
                }
            });

            if (categorySlug === 'all') {
                $serviceCards.removeClass('d-none').addClass('d-flex');
            } else {
                $serviceCards
                    .removeClass('d-flex')
                    .addClass('d-none')
                    .filter('[data-category-service="' + categorySlug + '"]')
                    .removeClass('d-none')
                    .addClass('d-flex');
            }
        }

        // On click of any category button
        $categoryButtons.on('click', function () {
            const selectedCategory = $(this).data('category') || 'all';
            activateCategory(selectedCategory);

            // Optional: update URL without reloading
            const newUrl = new URL(window.location.href);
            if (selectedCategory === 'all') {
                newUrl.searchParams.delete('category');
            } else {
                newUrl.searchParams.set('category', selectedCategory);
            }
            window.history.replaceState({}, '', newUrl);
        });

        // Initial filter based on URL parameter
        activateCategory(urlCategory);
    });
</script>
@endpush
