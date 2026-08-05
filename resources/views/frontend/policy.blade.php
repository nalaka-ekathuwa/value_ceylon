@extends('frontend.layouts.app')

@section('content')
    <style>
        html {
            scroll-behavior: smooth;
        }
        .policy-container {
            color: #000000;
            border: 1px solid #e2e8f0;
        }
        .policy-container p,
        .policy-container li,
        .policy-container span {
            color: #000000 !important;
        }
        .policy-blue-title,
        .policy-container a {
            color: rgb(27, 108, 168) !important;
        }

        /* Separator Links & Navigation Pills */
        .policy-nav-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding-bottom: 20px;
            margin-bottom: 30px;
            border-bottom: 1px solid #dee2e6;
        }
        .policy-nav-link {
            display: inline-block;
            padding: 8px 16px;
            border: 1px solid rgb(27, 108, 168) !important;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
            background-color: #ffffff;
        }
        .policy-nav-link:hover {
            background-color: rgb(27, 108, 168);
            color: #ffffff !important;
            text-decoration: none;
        }

        /* Section Borders */
        .policy-section-border {
            border-top: 1px solid #dee2e6 !important;
            padding-top: 25px;
            margin-top: 35px;
        }
        .policy-heading-border {
            border-bottom: 1px solid #dee2e6 !important;
            padding-bottom: 8px;
        }
    </style>

    <!-- Page Header & Breadcrumb -->
    <section class="pt-4 mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <h1 class="fw-600 h3 text-dark mb-0">Privacy & Policies</h1>
                </div>
                <div class="col-lg-6">
                    <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item opacity-50">
                            <a class="text-reset" href="{{ route('home') }}">{{ translate('Home') }}</a>
                        </li>
                        <li class="text-dark fw-600 breadcrumb-item active">
                            {{ translate('Privacy Policy') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Policy Content Container -->
    <section class="mb-5">
        <div class="container">
            <div class="bg-white rounded shadow-sm p-4 p-md-5 text-left policy-container">

                <!-- Visible Separator Quick Links -->
                <div class="policy-nav-pills">
                    <a href="#privacy-policy" class="policy-nav-link">Privacy Policy</a>
                    <a href="#prescription-policy" class="policy-nav-link">Prescription & Comms Policy</a>
                    <a href="#seller-policy" class="policy-nav-link">Seller-Specific Policies</a>
                    <a href="#advertising-policy" class="policy-nav-link">Advertising Policy</a>
                </div>

                <!-- 1. PRIVACY POLICY -->
                <div id="privacy-policy" class="policy-block mb-5">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Privacy Policy</h2>
                    <p class="lh-1-8">
                        Welcome to <strong>ValueCeylon.com</strong> ("we", "us", or "our"). This Privacy Policy outlines how we collect, use, store, and protect your personal information when you use our website (the "Platform"). We are committed to protecting your privacy and ensuring that your personal information is handled in a safe and responsible manner, in accordance with applicable data protection laws and healthcare regulations in Sri Lanka.
                    </p>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">1. Information We Collect</h3>
                        
                        <h4 class="h6 fw-600 text-dark mb-2">A. Information You Provide to Us</h4>
                        <p class="mb-2">When you use ValueCeylon.com, we may collect the following information:</p>
                        <ul class="pl-4 mb-4">
                            <li class="mb-1"><strong>Registration Information:</strong> Name, email address, phone number, and login credentials.</li>
                            <li class="mb-1"><strong>Prescription Data:</strong> Uploads of medical prescriptions and relevant patient details (with patient consent).</li>
                            <li class="mb-1"><strong>Health Profile Information:</strong> (Optional) Allergies, past purchases, or health conditions you provide for better recommendations.</li>
                            <li class="mb-1"><strong>Seller Information:</strong> Business name, license number, pharmacy registration, contact details, products listed, and transaction history.</li>
                            <li class="mb-1"><strong>Order & Payment Data:</strong> Shipping address, billing details, payment method, and transaction history.</li>
                            <li class="mb-1"><strong>Communication Records:</strong> Emails, messages, or chats between customers and vendors, or with our support team.</li>
                        </ul>

                        <h4 class="h6 fw-600 text-dark mb-2">B. Information We Collect Automatically</h4>
                        <p class="mb-2">When you visit our platform, we collect certain information about your device and usage, including:</p>
                        <ul class="pl-4 mb-4">
                            <li class="mb-1">IP address, browser type, time zone, and cookies</li>
                            <li class="mb-1">Pages viewed, products clicked, referral sources</li>
                            <li class="mb-1">Site interaction patterns and device specifications</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">2. Use of Personal Information</h3>
                        <p class="mb-2">We use the collected information to:</p>
                        <ul class="pl-4 mb-4">
                            <li class="mb-1">Process and deliver your orders securely</li>
                            <li class="mb-1">Authenticate buyers and sellers</li>
                            <li class="mb-1">Verify and process prescriptions in compliance with health regulations</li>
                            <li class="mb-1">Enable communication between customers and vendors</li>
                            <li class="mb-1">Provide a personalized shopping experience, including medicine reminders and recommendations</li>
                            <li class="mb-1">Detect and prevent fraud or misuse</li>
                            <li class="mb-1">Improve our website's performance and customer experience</li>
                            <li class="mb-1">Conduct marketing and promotional campaigns (with your consent)</li>
                            <li class="mb-1">Ensure regulatory compliance with the National Medicines Regulatory Authority (NMRA) and other legal authorities</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">3. Sharing of Information</h3>
                        <p class="mb-2">We do not sell your personal data. However, we may share your information with trusted parties under the following circumstances:</p>
                        <ul class="pl-4 mb-4">
                            <li class="mb-1"><strong>Licensed Sellers and Pharmacies:</strong> To fulfill your orders, especially prescription-based.</li>
                            <li class="mb-1"><strong>Healthcare Professionals:</strong> Where applicable, to review prescriptions or offer support.</li>
                            <li class="mb-1"><strong>Third-Party Service Providers:</strong> For logistics, payment processing, marketing, analytics, and cloud storage.</li>
                            <li class="mb-1"><strong>Regulatory Bodies:</strong> To comply with the law or in response to legal processes, including NMRA, courts, and other healthcare regulators.</li>
                            <li class="mb-1"><strong>Marketing Platforms:</strong> To provide relevant ads and offers (only with your consent).</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">4. Data Protection & Security</h3>
                        <p class="mb-2">We implement appropriate physical, digital, and administrative safeguards to protect your personal and health-related information. These include:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">SSL encryption for all transactions</li>
                            <li class="mb-1">Access control and authentication protocols</li>
                            <li class="mb-1">Secure prescription handling by verified pharmacies</li>
                            <li class="mb-1">Regular security audits and data backup</li>
                        </ul>
                        <p>Prescription images and health data are handled with the highest confidentiality and only accessible by licensed entities for the purpose of dispensing medicine.</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">5. Cookies and Tracking Technologies</h3>
                        <p class="mb-2">
                            We may use cookies and other tracking technologies (such as pixels and web beacons) to collect, store, and track information about your interactions with our website. These technologies help us analyze site traffic, personalize content, and improve performance.
                        </p>
                        <p class="mb-2">We use cookies and similar technologies to:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Remember login preferences</li>
                            <li class="mb-1">Track and analyze usage behavior</li>
                            <li class="mb-1">Personalize product suggestions</li>
                            <li class="mb-1">Enable social media features and targeted ads</li>
                        </ul>
                        <p class="small">You can manage cookie preferences in your browser settings. Disabling cookies may affect site functionality.</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">6. Children’s Privacy</h3>
                        <p>
                            This platform is intended for use by adults aged 18 and over. We do not knowingly collect or store data from minors. If we become aware that a child has provided us with personal information, we will delete it promptly.
                        </p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">7. Your Rights</h3>
                        <p class="mb-2">As a user of ValueCeylon.com, you have the right to:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Access or correct your personal information</li>
                            <li class="mb-1">Request deletion of your account or data (subject to legal retention requirements)</li>
                            <li class="mb-1">Withdraw consent for non-essential data processing (e.g., marketing)</li>
                            <li class="mb-1">Lodge a complaint with a data protection authority</li>
                        </ul>
                        <p>To exercise your rights, email us at <a href="mailto:support@valueceylon.com" class="font-weight-bold">support@valueceylon.com</a>.</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">8. Changes to This Policy</h3>
                        <p>
                            We may update this Privacy Policy periodically to reflect changes in regulations or service offerings. Changes will be posted here with the "Effective Date" updated. We encourage you to review it regularly.
                        </p>
                    </div>
                </div>

                <!-- 2. PRESCRIPTION & COMMUNICATION POLICY -->
                <div id="prescription-policy" class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Prescription & Communication Policy</h2>

                    <div class="mt-3">
                        <h3 class="h5 fw-600 text-dark mb-2">Recording of Conversations</h3>
                        <p class="mb-2">
                            In accordance with the National Medicines Regulatory Authority (NMRA) of Sri Lanka, we record and securely store conversations between customers and our pharmacists to ensure compliance with healthcare standards, prescription accuracy, and quality assurance.
                        </p>
                        <p>
                            These recordings are used solely for regulatory compliance, training, and service improvement purposes.
                        </p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-2">Medication Records & Data Retention</h3>
                        <p class="mb-2">
                            We maintain detailed medication records of all prescriptions processed through our platform, as required by NMRA and other relevant healthcare regulations. These records help ensure proper patient care, prevent misuse, and facilitate future prescription refills or inquiries.
                        </p>
                        <p>
                            Medication records are securely stored and will only be shared with the patient, authorized caregivers, or regulatory authorities as required by law.
                        </p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-2">Confidentiality & Data Protection</h3>
                        <p class="mb-2">
                            All recorded conversations are treated as confidential and protected under applicable data privacy laws. We do not share recordings with third parties except when required by law or regulatory authorities.
                        </p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-2">Customer Consent</h3>
                        <p>
                            By using our online pharmacy services, you consent to the recording of conversations as required by NMRA regulations. If you do not agree to this, you may choose not to proceed with our services.
                        </p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-2">The Right of Refusal</h3>
                        <p>
                            A pharmacist has the right to refuse to fill any controlled-substance prescription. If legitimate concern exists, it is the pharmacist’s duty to refuse to fill a prescription and return the prescription to the patient. Even with physician approval, the pharmacist still maintains the right to not fill the prescription. It is illegal for a physician to write a prescription for a Schedule II medication for a family member. It is unethical for a prescriber to write a Schedule III medicines prescription for a family member.
                        </p>
                    </div>

                    <div class="mt-4 p-3 bg-light rounded border" style="border: 1px solid #fecaca !important;">
                        <h3 class="h6 fw-700 text-danger mb-2">Restricted & Banned Product Policy</h3>
                        <p class="mb-2"><strong>RESTRICTED PRODUCTS:</strong> The following therapeutic goods are not permitted for home delivery:</p>
                        <ul class="pl-4 mb-0">
                            <li class="mb-1">Schedule II C and III medicines.</li>
                            <li class="mb-1">Prohibited substances as outlined in the Poisons, Opium, and Dangerous Drugs (Amendment) Act, No. 41 of 2022, including Tramadol, Gabapentin, and Pregabalin.</li>
                            <li class="mb-1">Any injectable products, except for self-injecting preparations. Example: Insulin, Epinephrine</li>
                        </ul>
                    </div>
                </div>

                <!-- 3. SELLER-SPECIFIC POLICIES -->
                <div id="seller-policy" class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Seller-Specific Policies</h2>
                    <p class="mb-2">
                        Each vendor on ValueCeylon.com may have individual return and refund terms. These will be displayed on the product page or vendor profile. Customers are advised to check vendor-specific policies before placing an order.
                    </p>
                    <p>
                        We comply with the regulations and guidelines set forth by the National Medicines Regulatory Authority (NMRA) of Sri Lanka to ensure the safety, quality, and efficacy of all medicines available through our platform.
                    </p>
                </div>

                <!-- 4. ADVERTISING POLICY -->
                <div id="advertising-policy" class="policy-block policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Advertising Policy</h2>
                    <p class="mb-3">
                        At <strong>valueceylon.com</strong>, we are committed to maintaining a safe, ethical, and medically responsible environment for all users. This Advertising Policy outlines the standards and conditions for advertisers wishing to promote products or services on our platform.
                    </p>

                    <div class="mt-3">
                        <h3 class="h5 fw-600 text-dark mb-2">1. Compliance with Regulations</h3>
                        <p>
                            All advertisements must comply with the applicable laws and regulations in Sri Lanka, including the standards set by the National Medicines Regulatory Authority (NMRA). Advertisers are responsible for ensuring that all promoted products—especially pharmaceuticals, health supplements, and medical devices—are approved and meet safety, quality, and efficacy standards.
                        </p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-2">2. Acceptable Products and Services</h3>
                        <p class="mb-2">We allow advertisements that are relevant to the healthcare, wellness, and pharmaceutical industries, including:</p>
                        <ul class="pl-4 mb-2">
                            <li class="mb-1">Over-the-counter (OTC) medicines approved by NMRA</li>
                            <li class="mb-1">Health and wellness supplements</li>
                            <li class="mb-1">Medical equipment and devices</li>
                            <li class="mb-1">Pharmacy and health services</li>
                        </ul>
                        <p class="small">Prescription drugs may not be advertised directly to consumers.</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-2">3. Prohibited Content</h3>
                        <p class="mb-2">Advertisements must not:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Make false, misleading, or unverifiable health claims</li>
                            <li class="mb-1">Promote unsafe or unapproved medicines or treatments</li>
                            <li class="mb-1">Target minors inappropriately</li>
                            <li class="mb-1">Use scare tactics or graphic health imagery</li>
                            <li class="mb-1">Include adult, obscene, or offensive content</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-2">4. Review and Approval</h3>
                        <p>
                            All ads are subject to review and approval by our compliance team. We reserve the right to reject, remove, or request modifications to any advertisement that does not align with our policies or values.
                        </p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-2">5. Transparency and Accuracy</h3>
                        <p>
                            Advertisements must clearly identify the advertiser and must not be disguised as editorial or native content. Claims must be evidence-based, and disclaimers should be included where applicable.
                        </p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-2">6. Data Privacy</h3>
                        <p>
                            Advertisers must not collect user data from our platform without express permission and must comply with our Privacy Policy and applicable data protection laws.
                        </p>
                    </div>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-2">7. Reporting Violations</h3>
                        <p>
                            If you believe an ad violates our policy, please report it to <a href="mailto:info@valueceylon.com" class="font-weight-bold">info@valueceylon.com</a>. We will investigate and take appropriate action.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection