@extends('frontend.layouts.app')

@section('content')
    <section class="pt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="alert alert-primary" role="alert">
                        <h2 class="text-center">Special Features</h2>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <h4>Doctor's Counter</h4>
                    <br>

                    {{-- Start accordian --}}


                    <div id="specialAccordion">
                        <div class="card custom-accordion">
                            <div class="card-header" id="headingDoctorCounter">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseDoctorCounter" aria-expanded="false"
                                        aria-controls="collapseDoctorCounter">
                                        What is the Doctor's Counter on ValueCeylon.com? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseDoctorCounter" class="collapse" aria-labelledby="headingDoctorCounter"
                                data-parent="#specialAccordion">
                                <div class="card-body">
                                The Doctor's Counter is a specialized feature on ValueCeylon.com tailored for medical
                                practitioners. It enables doctors and healthcare professionals to:
                                <ul>
                                    <li><strong>Purchase Bulk Medicines</strong><br>Access a wide range of medications and
                                        medical supplies in bulk quantities.</li>
                                    <li><strong>Exclusive Offers and Discounts</strong><br>Benefit from special pricing and
                                        discounts available only for medical practitioners.</li>
                                    <li><strong>Trusted Wholesale Pharmacies</strong><br>Order directly from verified
                                        wholesale pharmacies, ensuring quality and authenticity.</li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        
                    </div>

                    <br>
                    <h4>E-prescription process</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingEprescription10">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseEprescription10" aria-expanded="false"
                                    aria-controls="collapseEprescription10">
                                    Can my doctor send an e-prescription directly to ValueCeylon.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEprescription10" class="collapse" aria-labelledby="headingEprescription10"
                            data-parent="#specialAccordion">
                            <div class="card-body">
                                Yes, your doctor can conveniently send your e-prescription to ValueCeylon.com. Simply let
                                your doctor know that ValueCeylon.com is your preferred pharmacy network. Once the
                                prescription is submitted, you can select a pharmacy from our network to fulfill your
                                medication needs.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingEprescription11">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseEprescription11" aria-expanded="false"
                                    aria-controls="collapseEprescription11">
                                    How does the e-prescription process work with ValueCeylon.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEprescription11" class="collapse" aria-labelledby="headingEprescription11"
                            data-parent="#specialAccordion">
                            <div class="card-body">
                                <ul>
                                    <li>Inform your doctor that ValueCeylon.com is your preferred pharmacy network.</li>
                                    <li>Your doctor will send the e-prescription directly through the platform.</li>
                                    <li>You will be notified once the prescription is received.</li>
                                    <li>Choose a pharmacy within the ValueCeylon.com network for medication processing.</li>
                                    <li>Your medications will be ready for pickup or delivery, as per your preference.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingEprescription12">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseEprescription12" aria-expanded="false"
                                    aria-controls="collapseEprescription12">
                                    Are e-prescriptions safe and secure on ValueCeylon.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEprescription12" class="collapse" aria-labelledby="headingEprescription12"
                            data-parent="#specialAccordion">
                            <div class="card-body">
                                Absolutely. ValueCeylon.com prioritizes your privacy and complies with all relevant
                                regulations to ensure that your medical information is secure and confidential.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingEprescription13">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseEprescription13" aria-expanded="false"
                                    aria-controls="collapseEprescription13">
                                    Do I need to register on ValueCeylon.com to receive an e-prescription? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEprescription13" class="collapse" aria-labelledby="headingEprescription13"
                            data-parent="#specialAccordion">
                            <div class="card-body">
                                Yes, creating an account is necessary to manage your e-prescriptions, track orders, and
                                communicate with pharmacies seamlessly.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingEprescription14">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseEprescription14" aria-expanded="false"
                                    aria-controls="collapseEprescription14">
                                    What should I do if my doctor is unfamiliar with ValueCeylon.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEprescription14" class="collapse" aria-labelledby="headingEprescription14"
                            data-parent="#specialAccordion">
                            <div class="card-body">
                                You can inform your doctor about our platform and share that it connects to a trusted
                                network of pharmacies for efficient prescription management. Direct them to ValueCeylon.com
                                for details on e-prescribing options.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingEprescription15">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseEprescription15" aria-expanded="false"
                                    aria-controls="collapseEprescription15">
                                    Can I switch pharmacies after the prescription has been sent? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEprescription15" class="collapse" aria-labelledby="headingEprescription15"
                            data-parent="#specialAccordion">
                            <div class="card-body">
                                Yes, ValueCeylon.com allows you to select any pharmacy within our network to fulfill your
                                prescription.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingEprescription16">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseEprescription16" aria-expanded="false"
                                    aria-controls="collapseEprescription16">
                                    Are there additional benefits to using ValueCeylon.com for e-prescriptions? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEprescription16" class="collapse" aria-labelledby="headingEprescription16"
                            data-parent="#specialAccordion">
                            <div class="card-body">
                                <ul>
                                    <li><strong>Convenience:</strong> No need for paper prescriptions; everything is
                                        digital.</li>
                                    <li><strong>Network Access:</strong> Choose from multiple trusted pharmacies across Sri
                                        Lanka.</li>
                                    <li><strong>Medication Tracking:</strong> Monitor the status of your prescription in
                                        real time.</li>
                                    <li><strong>Delivery Options:</strong> Opt for home delivery or pickup at your
                                        convenience.</li>
                                </ul>
                            </div>
                        </div>
                    </div>





                    {{-- Accordian --}}
                </div>
            </div>
        </div>
    </section>

@endsection