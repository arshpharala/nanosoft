
    <section class="partner">
        <div class="container">
            <div class="partner-container">
                <div class="partner-heading">
                    <div class="container">
                        <p class="how">Contact Us</p>
                        <h2>Partner with Us for Comprehensive IT</h2>
                    </div>
                </div>
                <div class="partner-content">
                    <div class="container">
                        <p>We’re happy to answer any questions you may have and help you determine which of our services
                            best
                            fit your needs.</p>
                        <h6>Call us at: {{ setting('contact_phone') }}</h6>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="61"
                                    viewBox="0 0 12 61">
                                    <path d="m.37.6.95-.3 10.21 30.62L1.31 60.57l-.95-.33 10.11-29.32z" fill=""
                                        fill-rule="nonzero" fill-opacity=""></path>
                                </svg>
                            </h5>
                            <h5><strong>2</strong> We do a discovery and consulting meting
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="61"
                                    viewBox="0 0 12 61">
                                    <path d="m.37.6.95-.3 10.21 30.62L1.31 60.57l-.95-.33 10.11-29.32z" fill=""
                                        fill-rule="nonzero" fill-opacity=""></path>
                                </svg>
                            </h5>
                            <h5><strong>3</strong> We prepare a proposal</h5>
                        </div>
                    </div>
                </div>
                <form action="">
                    <h3>Schedule a Free Consultation</h3>
                    <div class="fields">
                        <div class="inputs">
                            <div class="input-container">
                                <label for="">First Name</label>
                                <input type="text">
                            </div>
                            <div class="input-container">
                                <label for="">Last Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="input-container">
                            <label for="">Company / Organization</label>
                            <input type="text">
                        </div>
                        <div class="input-container">
                            <label for="">Company Email</label>
                            <input type="email">
                        </div>
                        <div class="input-container">
                            <label for="">Phone</label>
                            <input type="number">
                        </div>
                        <div class="input-container">
                            <label for="">How can we help you?</label>
                            <select>
                                <option value="">Select Option</option>
                                @foreach ($services as $sr)
                                    <option value="{{ $sr->id }}">{{ $sr->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-container">
                            <label for="">Message</label>
                            <textarea placeholder="To better assist you, please describe how we can help..."></textarea>
                        </div>
                        
                        <button type="submit" class="button primary-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
