<section class="partner">
    <div class="container">
        <div class="partner-container">
            <div class="partner-heading">
                <div class="container">
                    <h3 class="how">Contact Us</h3>
                    <h2>Partner with Nanosoft for Trusted IT & Security Solutions</h2>
                </div>
            </div>
            <div class="partner-content">
                <div class="container">
                    <p>We’re happy to answer any questions you may have and help you determine which of our services
                        best
                        fit your needs.</p>
                    <h6>Call us at: {{ setting('contact_phone') }}
                        @if (setting('contact_phone_alternative'))
                            , {{ setting('contact_phone_alternative') }}
                        @endif
                    </h6>
                    <p><strong>Your benefits:</strong></p>
                    <ul class="d-flex flex-wrap justify-content-between">
                        <li><i class="fa-solid fa-circle-check"></i> Client-oriented</li>
                        <li><i class="fa-solid fa-circle-check"></i> Results-driven</li>
                        <li><i class="fa-solid fa-circle-check"></i> Independent</li>
                        <li><i class="fa-solid fa-circle-check"></i> Problem-solving</li>
                        <li><i class="fa-solid fa-circle-check"></i> Competent</li>
                        <li><i class="fa-solid fa-circle-check"></i> Transparent</li>
                    </ul>
                    <h6>What happens next?</h6>
                    <div class="happens">
                        <h5><strong>1</strong> We Schedule a call at your convenience
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="61" viewBox="0 0 12 61">
                                <path d="m.37.6.95-.3 10.21 30.62L1.31 60.57l-.95-.33 10.11-29.32z" fill=""
                                    fill-rule="nonzero" fill-opacity=""></path>
                            </svg>
                        </h5>
                        <h5><strong>2</strong> We do a discovery and consulting meting
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="61" viewBox="0 0 12 61">
                                <path d="m.37.6.95-.3 10.21 30.62L1.31 60.57l-.95-.33 10.11-29.32z" fill=""
                                    fill-rule="nonzero" fill-opacity=""></path>
                            </svg>
                        </h5>
                        <h5><strong>3</strong> We prepare a proposal</h5>
                    </div>
                </div>
            </div>
            <form action="{{ route('enquiry') }}" method="post" class="ajax-form">
                @csrf
                <h3>Schedule a Free Consultation</h3>
                <div class="fields">
                    <div class="inputs">
                        <div class="input-container">
                            <label for="">First Name</label>
                            <input type="text" name="first_name">
                        </div>
                        <div class="input-container">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name">
                        </div>
                    </div>
                    <div class="input-container">
                        <label for="">Company / Organization</label>
                        <input type="text" name="company">
                    </div>
                    <div class="input-container">
                        <label for="">Company Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="input-container">
                        <label for="">Phone</label>
                        <input type="number" name="phone">
                    </div>
                    <div class="input-container">
                        <label for="">How can we help you?</label>
                        <select name="service_id">
                            <option value="">Select Option</option>
                            @foreach ($services as $sr)
                                <option value="{{ $sr->id }}">{{ $sr->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-container">
                        <label for="">Message</label>
                        <textarea name="message" placeholder="To better assist you, please describe how we can help..."></textarea>
                    </div>
                    <div class="input-container">
                        <label for="consent-checkbox">
                            <input type="checkbox" name="consent" id="consent-checkbox" required>
                            I agree to the Privacy Policy and give my permission to process my personal data for the
                            purposes specified in the Privacy Policy.
                        </label>
                    </div>

                    <button type="submit" class="button primary-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
