    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                    @if (setting('site_header_logo'))
                        <img src="{{ asset('storage/' . setting('site_header_logo')) }}" height="48" alt="logo" />
                    @elseif (setting('site_logo'))
                        <img src="{{ asset('storage/' . setting('site_logo')) }}" width="48" height="48"
                            alt="logo" />
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
                                                                <div class="col-12 col-md-6 mb-2">
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
                                            {{-- <div class="megamenu-icon">
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
                                            </div> --}}
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
                                                {{-- <li><a href="{{ route('licences') }}"
                                                        class="dropdown-item px-0 py-1">Licences</a></li>
                                                <li><a href="{{ route('slavery') }}"
                                                        class="dropdown-item px-0 py-1">Modern Slavery</a></li> --}}
                                                <li><a href="{{ route('terms') }}"
                                                        class="dropdown-item px-0 py-1">Terms and Conditions</a></li>
                                            </ul>
                                        </div>

                                        <!-- Column 3: Online Stores -->
                                        {{-- @if (stores()->isNotEmpty())
                                            <div class="col-md-4 p-3 rounded">
                                                <h6 class="fw-bold mb-3 text-primary">Online Stores</h6>
                                                <ul class="list-unstyled d-flex flex-column gap-2">
                                                    @foreach (stores() as $st)
                                                        <li class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('storage/' . $st->logo) }}"
                                                                style="height: 30px;" alt="{{ $st->name }}" />
                                                            <span>{{ $st->name }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif --}}

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Resource
                            </a>

                            <div class="dropdown-menu mt-0 border-0 shadow">
                                <div class="container">
                                    <div class="row align-items-start">

                                        <div class="col-md-4">
                                            <ul class="list-unstyled">
                                                <li><a href="{{ route('news') }}"
                                                        class="dropdown-item px-0 py-1">News</a></li>
                                                <li><a href="{{ route('educational-guide') }}"
                                                        class="dropdown-item px-0 py-1">Educational Guide</a></li>
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
