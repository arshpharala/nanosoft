@extends('layouts.master')
@push('head')
@endpush
@section('content')
    <section class="services-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <h6 class="sub-heading">Modern Slavery</h6>
                    <h2 class="title py-5">Modern Slavery Statement</h2>
                    <a href="{{ route('contact') }}" class="button secondary-btn" style="width: fit-content;">Schedule a free
                        Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-5">
                    @if (setting('site_logo'))
                        <div class="sticky-top" style="top: 100px;">
                            <img src="{{ asset('storage/' . setting('site_logo')) }}" alt="NanoSoft Team"
                                class="img-fluid rounded shadow w-100">
                        </div>
                    @endif
                </div>
                <div class="col-md-7">
                    <h2 class="mb-4">Modern Slavery & Human Rights Commitment</h2>

                    <h5 class="fw-bold">Structure:</h5>
                    <p>
                        The Board of Directors at NanoSoft Corporation Ltd holds ultimate responsibility for our human
                        rights policy, including our commitment to addressing modern slavery and human trafficking. Ethical
                        and compliance risks, including those related to human rights, modern slavery, and human
                        trafficking, are routinely reviewed during our Management Review Meetings. Our leadership team is
                        responsible for upholding these commitments across all contracts, ensuring the identification,
                        prevention, and mitigation of any adverse human rights impacts resulting from our operations, as
                        well as those of our customers and supply chain.
                    </p>

                    <h5 class="fw-bold mt-4">Supply Chain:</h5>
                    <p>
                        Our supply chain is primarily UK-based and consists of a limited number of suppliers, all of which
                        are held to the same rigorous modern slavery compliance standards. The majority of our key suppliers
                        operate within structured markets, providing services such as IT and energy. We assess our exposure
                        to modern slavery risk within the supply chain as very low. Nevertheless, we continuously work to
                        ensure that our suppliers uphold these high standards.
                    </p>
                    <p>
                        We expect all suppliers to have robust human rights, modern slavery, and human trafficking policies
                        in place and to ensure these policies extend to their own suppliers. Compliance with these
                        expectations is assured through a stringent procurement process.
                    </p>

                    <h5 class="fw-bold mt-4">Combating Modern Slavery, Human Trafficking, and Child Labour:</h5>
                    <p>
                        NanoSoft Corporation Ltd is committed to ensuring that all management teams are trained to recognize
                        the risks and signs of modern slavery, human trafficking, and child labour. Additionally, every
                        employee will undergo an induction that includes awareness training on modern slavery and our policy
                        expectations.
                    </p>
                    <p>
                        To ensure compliance with the Modern Slavery Act 2015 and to prevent modern slavery, human
                        trafficking, and child labour, we will:
                    </p>

                    <ul class="mb-4" style="list-style-type: disc; padding-left: 20px;">
                        <li>Implement labour monitoring procedures, including right-to-work documentation checks and payroll
                            audits.</li>
                        <li>Maintain consistent communication with our supply chain to ensure understanding of and
                            compliance with our expectations.</li>
                        <li>Regularly review and update supply chain policies, codes of conduct, and working practices in
                            alignment with the Modern Slavery Act 2015.</li>
                        <li>Protect whistle-blowers through a confidential reporting process, encouraging the identification
                            and reporting of any breaches.</li>
                    </ul>

                    <p>
                        These procedures are designed to identify and assess risk areas, reduce the occurrence of modern
                        slavery and human trafficking in our business and supply chain, and provide appropriate protections
                        for whistle-blowers.
                    </p>
                    <p>
                        This statement is made pursuant to section 54(1) of the Modern Slavery Act 2015 and constitutes
                        NanoSoft Corporation Ltd’s slavery and human trafficking statement for the financial year ending
                        31st May 2025.
                    </p>
                    <p>
                        This Modern Slavery Statement Protection Policy has been approved &amp; authorised.
                    </p>
                </div>
            </div>
        </div>
    </section>





    @include('includes.contact', ['services' => services()])
@endsection
