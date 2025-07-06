@extends('theme.layouts.master')
@section('content')
    <section class="news-detail-section">

        <div class="container">

            <div class="row">
                <div class="col-md-10 mx-auto">

                    <div class="row py-4">
                        <div class="d-flex flex-columns justify-content-center">
                            <h6 class="sub-heading">{{ $news->category->name }}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <h1 class="title pb-4">{{ $news->title }}</h1>
                            <span class="fs-4 text-black-50">{{ $news->created_at->format('d F Y') }}</span>
                        </div>
                    </div>

                    <div class="row pb-4">
                        <div class="d-flex banner">
                            <img src="{{ asset('storage/' . $news->image) }}" class="banner-image w-100"
                                alt="{{ $news->title }} banner">
                        </div>
                    </div>

                    <div class="row">
                        <div class="content">
                            {!! $news->content !!}
                        </div>
                    </div>

                    <div class="row py-5">
                        <div class="d-flex flex-columns justify-content-center align-items-center my-auto">
                            <span class="bg-body-secondary fs-6 rounded py-1 px-2 me-2">Tags</span>
                            <span>{{ implode(', ', $news->tags->pluck('name')->toArray()) }}</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

    @if ($relatedNews->isNotEmpty())
        <section class="news-card-section">
            <div class="container">

                <div class="row mb-3">
                    <h2 class="title">Related News</h2>
                </div>

                <div class="row">

                    @foreach ($relatedNews as $news)
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="news-card">

                                <div class="news-image-box ">
                                    <img src="{{ asset('storage/' . $news->image) }}" class="rounded news-image img-fluid"
                                        alt="{{ $news->title }}">
                                </div>

                                <div class="news-content-box d-flex flex-column">
                                    <div class="news-cateogry text-body-secondary">
                                        {{ $news->category->name }}
                                    </div>

                                    <h4 class="news-title my-3"><a
                                            href="{{ route('news.detail', ['slug' => $news->slug]) }}">

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
                    @endforeach

                </div>
            </div>

            </div>
        </section>
    @endif

    @include('theme.components.contact', ['services' => services()])
@endsection
