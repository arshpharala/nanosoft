@extends('theme.layouts.master')
@push('head')
    @include('theme.components.banner', [
        'banner' => isset($page->banner) ? asset('storage/' . $page->banner) : asset('assets/img/service-banner.png'),
        'hasBanner' => !empty($page->banner)
    ])
@endpush
@section('content')
    <section class="news-detail-section">

        <div class="container">

            <div class="row">
                <div class="col-md-10 mx-auto">

                    <div class="row py-4">
                        <div class="d-flex flex-columns justify-content-center">
                            <h6 class="sub-heading">News</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <h1 class="title pb-4">Nanosoft News</h1>
                            <span class="fs-4 text-black-50">Our official blog with news, technology advice, and business
                                culture.</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="news-card-wide-section my-5">
        <div class="container ">
            <div class="row news-card-box">
                <div class="col-md-5">
                    <div class="news-content-box">
                        <div class="news-cateogry text-body-secondary">
                            {{ $news->category->name }}
                        </div>

                        <h4 class="news-title my-3">
                            <a href="{{ route('news.detail', ['slug' => $news->slug]) }}">

                                {{ $news->title }}
                            </a>
                        </h4>


                        <p class="news-content">
                            {!! Str::substr($news->intro, 0, 150) !!}
                        </p>

                        <a href="{{ route('news.detail', ['slug' => $news->slug]) }}" class="read-more">Read
                            more</a>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="news-image-box">
                        <img src="{{ asset('storage/' . $news->image) }}" class="rounded news-image img-fluid"
                            alt="{{ $news->title }}">

                    </div>
                </div>
            </div>

        </div>



    </section>


    <section class="news-card-section">
        <div class="container">
            <div class="row d-flex flex-row">
                @foreach ($newsCollection as $news)
                    <div class="col-sm-12 col-md-6 col-lg-4 d-flex">
                        <div class="news-card d-flex flex-column w-100">
                            <div class="news-image-box">
                                <img src="{{ asset('storage/' . $news->image) }}" class="rounded news-image img-fluid"
                                    alt="{{ $news->title }}">
                            </div>

                            <div class="news-content-box d-flex flex-column flex-grow-1 position-relative">
                                <div class="news-cateogry text-body-secondary">
                                    {{ $news->category->name }}
                                </div>

                                <h4 class="news-title my-3">
                                    <a href="{{ route('news.detail', ['slug' => $news->slug]) }}">
                                        {{ $news->title }}
                                    </a>
                                </h4>

                                <p class="news-content">
                                    {!! Str::substr($news->intro, 0, 150) !!}
                                </p>

                                <a href="{{ route('news.detail', ['slug' => $news->slug]) }}"
                                    class="read-more mt-auto">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    @include('theme.components.contact', ['services' => services()])
@endsection
