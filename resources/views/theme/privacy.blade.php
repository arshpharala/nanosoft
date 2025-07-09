@extends('theme.layouts.master')
@push('head')
    @include('theme.components.banner', [
        'banner' => isset($page->banner) ? asset('storage/' . $page->banner) : asset('assets/img/service-banner.png'),
        'hasBanner' => !empty($page->banner)
    ])
@endpush
@section('content')
    <section class="services-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <h6 class="sub-heading">Privacy Policy</h6>
                    <h2 class="title py-5">Privacy and Data Security Policy</h2>
                    <a href="{{ route('contact') }}" class="button secondary-btn" style="width: fit-content;">Schedule a free
                        Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section class="rich-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div data-ux="Text" data-aid="PRIVACY_CONTENT_RENDERED" data-typography="BodyAlpha"
                        class="x-el c1-1 c1-2 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-7u c1-c c1-1j c1-d c1-e c1-f c1-g x-rt">
                        <p style="margin:0"><span>&nbsp;&nbsp;</span></p>

                        <p style="margin:0"><span><br></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">At
                                    Nanosoft Corporation Ltd, we prioritise the privacy and security of our users' personal
                                    data. This policy outlines the steps we take to protect the data you share with us, as
                                    well as the rights and responsibilities you have regarding your data.</strong></span>
                        </p>
                        <p style="margin:0"><span><br></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">1.
                                    Data Collection</strong></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">We
                                    only collect personal data that is necessary for providing our services or fulfilling
                                    the purpose of the interaction. This may include:</strong></span></p>
                        <p style="margin:0"></p>
                        <ul>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Personal
                                    Identification Information: Name, email address, phone number, or other identifiers
                                    required to complete a specific service request.</strong></li>
                        </ul>
                        <p></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">We
                                    do not collect sensitive data unless explicitly required for a specific
                                    purpose.</strong></span></p>
                        <p style="margin:0"><span><br></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">2.
                                    Data Use</strong></span></p>
                        <p style="margin:0"><span><strong
                                    class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">The data collected is
                                    used for the following purposes:</strong></span></p>
                        <p style="margin:0"></p>
                        <ul>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">To provide and
                                    improve our services.</strong></li>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">To communicate with
                                    users and respond to inquiries or requests.</strong></li>
                        </ul>
                        <p></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">We
                                    will not use your personal data for any other purpose without your
                                    consent.</strong></span></p>
                        <p style="margin:0"><span><br></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">3.
                                    Data Security</strong></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">We
                                    implement a range of technical and organizational measures to protect your data from
                                    unauthorized access, misuse, or loss. These measures include:</strong></span></p>
                        <p style="margin:0"></p>
                        <ul>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Encryption: Data is
                                    encrypted both in transit (when sent over the internet) and at rest (when stored on our
                                    systems) to ensure it is protected.</strong></li>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Access Control:
                                    Access to personal data is limited to authorized personnel who need the data to perform
                                    their jobs. We use role-based access control and strong authentication methods.</strong>
                            </li>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Regular Audits: We
                                    conduct regular security audits to identify and address any vulnerabilities in our
                                    systems.</strong></li>
                            <li><br></li>
                        </ul>
                        <p></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">4.
                                    Data Retention</strong></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">We
                                    retain personal data only for as long as necessary to fulfil the purpose for which it
                                    was collected, or as required by applicable laws and regulations. When data is no longer
                                    needed, it will be securely deleted.</strong></span></p>
                        <p style="margin:0"><span><br></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">5.
                                    User Rights</strong></span></p>
                        <p style="margin:0"><span><strong
                                    class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">You have the following
                                    rights regarding your personal data:</strong></span></p>
                        <p style="margin:0"></p>
                        <ul>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Access: You may
                                    request access to the personal data we have stored about you.</strong></li>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Correction: You may
                                    request corrections to any inaccurate or incomplete data.</strong></li>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Deletion: You may
                                    request the deletion of your personal data, subject to certain legal and contractual
                                    obligations.</strong></li>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Data Portability:
                                    You may request a copy of your personal data in a commonly used electronic
                                    format.</strong></li>
                        </ul>
                        <p></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">To
                                    exercise these rights, please contact us at </strong><a
                                    class="x-el x-el-a c1-2i c1-2j c1-7z c1-1a c1-1b c1-6a c1-2l c1-7g c1-b c1-80 c1-2r c1-81 c1-82"
                                    href="mailto:info@nanosoftltd.com" rel="noopener" target="_blank"><strong
                                        class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">info@nanosoftltd.com</strong></a></span>
                        </p>
                        <p style="margin:0"><span><br></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">6.
                                    Third-Party Sharing</strong></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">We
                                    do not sell, trade, or rent your personal data to third parties. However, we may share
                                    your data with trusted third parties who assist us in operating our services, provided
                                    they adhere to appropriate data protection measures. These third parties may
                                    include:</strong></span></p>
                        <p style="margin:0"></p>
                        <ul>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Service
                                    providers</strong></li>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Cloud storage
                                    providers</strong></li>
                            <li><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Payment
                                    processors</strong></li>
                        </ul>
                        <p></p>
                        <p style="margin:0"><span><strong
                                    class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">All third-party service
                                    providers are bound by confidentiality agreements and are required to handle your data
                                    in compliance with applicable privacy laws.</strong></span></p>
                        <p style="margin:0"><span><br></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">7.
                                    Cookies and Tracking Technologies</strong></span></p>
                        <p style="margin:0"><span><strong
                                    class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">Our website may use
                                    cookies and similar tracking technologies to enhance user experience. These technologies
                                    help us analyse user behaviour, improve our services, and customize content. You can
                                    adjust your browser settings to manage or block cookies.</strong></span></p>
                        <p style="margin:0"><span><br></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">8.
                                    Compliance with Laws</strong></span></p>
                        <p style="margin:0"><span><strong class="x-el x-el-span c1-2i c1-2j c1-b c1-7v c1-2u c1-7a c1-7w">We
                                    comply with applicable data protection laws, including the General Data Protection
                                    Regulation (GDPR), California Consumer Privacy Act (CCPA), and other relevant
                                    regulations. We take the necessary steps to ensure your data is handled in accordance
                                    with these laws.&nbsp;</strong></span></p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('theme.components.contact', ['services' => services()])
@endsection
