@extends('layouts.master')
@push('head')
@endpush
@section('content')
    <section class="services-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <h6 class="sub-heading">Licences</h6>
                    <h2 class="title py-5">Environmental & Legal Licences</h2>
                    <a href="{{ route('contact') }}" class="button secondary-btn" style="width: fit-content;">Schedule a free
                        Consultation</a>
                </div>
            </div>
        </div>
    </section>
    <section class="licenses py-5 bg-light">
        <div class="container">

            {{-- Waste Carrier Licence --}}
            <div class="row align-items-center mb-5">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('/assets/img/license-waste-carrier.jpg') }}" alt="Waste Carrier Licence"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-md-8">
                    <h4 class="text-success mb-3">Waste Carrier Licence</h4>
                    <p>
                        We are fully registered with the Environment Agency as a licensed Upper Tier Waste Carrier.
                        This ensures safe and legal handling of all IT equipment during disposal and refurbishment.
                    </p>
                    <ul class="list-unstyled">
                        <li><strong>Licence Number:</strong> CBDU439214</li>
                        <li><strong>Company Name:</strong> NanoSoft Corporation Limited</li>
                        <li><strong>Company Number:</strong> 06579146</li>
                        <li><strong>Licence Expiry:</strong> 26 May 2028</li>
                        <li>
                            <strong>Verify Licence:</strong>
                            <a href="https://environment.data.gov.uk/public-register/waste-carriers-brokers/widget/CBDU439214"
                                target="_blank" rel="noopener noreferrer">View on Government Register</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Environmental Permit (T11 Exemption) --}}
            <div class="row align-items-center mb-5 flex-md-row-reverse">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('/assets/img/license-environment.webp') }}" alt="Environment Permit"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-md-8">
                    <h4 class="text-success mb-3">Environmental Permit – WEEE Refurbishment (T11)</h4>
                    <p>
                        We are officially registered to carry out the refurbishment and repair of Waste Electrical and
                        Electronic Equipment (WEEE)
                        under the T11 waste exemption guidelines.
                    </p>
                    <ul class="list-unstyled">
                        <li><strong>Registration Number:</strong> EXP/RP3442YN</li>
                        <li><strong>Registered Since:</strong> 18 July 2022</li>
                        <li><strong>Valid Until:</strong> 17 July 2025</li>
                        <li><strong>Site:</strong> Unit 8 & 9 Maldon Trade Park, The Causeway, Heybridge, Maldon, CM9 4LJ
                        </li>
                        <li><strong>Reference:</strong>
                            <a href="https://environment.data.gov.uk/public-register/waste-exemptions/registration/EXP-RP3442YN?__pageState=result-all"
                                target="_blank" rel="noopener noreferrer">Check Permit</a>
                        </li>
                    </ul>
                    <p class="small text-muted">
                        Note: It is a criminal offence to operate outside the exemption terms or without a valid permit.
                    </p>
                </div>
            </div>

            {{-- Contact Block --}}
            <div class="row mt-5 pt-4 border-top">
                <div class="col-md-6">
                    <h5 class="fw-bold text-dark">Official Correspondence Address</h5>
                    <p>
                        Environment Agency <br>
                        Quadrant 2, 99 Parkway Avenue, <br>
                        Sheffield, S9 4WF
                    </p>
                </div>
                <div class="col-md-6">
                    <h5 class="fw-bold text-dark">Contact the Agency</h5>
                    <ul class="list-unstyled">
                        <li>Phone: <a href="tel:03708506506">03708 506 506</a></li>
                        <li>Email: <a href="mailto:nccct11@environment-agency.gov.uk">nccct11@environment-agency.gov.uk</a>
                        </li>
                        <li>Website: <a href="https://www.gov.uk/government/organisations/environment-agency"
                                target="_blank">gov.uk/environment-agency</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    @include('includes.contact', ['services' => services()])
@endsection
