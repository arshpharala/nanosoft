<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="footer-left">
                    <div class="links">
                        <h3>Solutions</h3>
                        <ul>
                            @foreach (services() as $service)
                                <li><a
                                        href="{{ route('service.detail', ['category' => $service->category->slug, 'service' => $service->slug]) }}">{{ $service->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="links">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="{{ route('about') }}">About us</a></li>
                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                            {{-- <li><a href="{{ route('licences') }}">Licences</a></li> --}}
                            {{-- <li><a href="{{ route('slavery') }}">Modern Slavery</a></li> --}}
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
                            <img src="{{ asset('storage/' . setting('site_logo')) }}" width="120" alt="logo-white" />
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
                        @if (setting('site_header_logo'))
                            <img src="{{ asset('storage/' . setting('site_header_logo')) }}" height="48"
                                alt="logo" />
                        @elseif (setting('site_logo'))
                            <img src="{{ asset('storage/' . setting('site_logo')) }}" width="48" height="48"
                                alt="logo" />
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
