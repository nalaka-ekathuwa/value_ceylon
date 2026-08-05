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
        .policy-container span,
        .policy-container td,
        .policy-container th {
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
                    <h1 class="fw-600 h3 text-dark mb-0">Terms & Conditions</h1>
                </div>
                <div class="col-lg-6">
                    <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item opacity-50">
                            <a class="text-reset" href="{{ route('home') }}">{{ translate('Home') }}</a>
                        </li>
                        <li class="text-dark fw-600 breadcrumb-item active">
                            {{ translate('Terms & Conditions') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms Content Container -->
    <section class="mb-5">
        <div class="container">
            <div class="bg-white rounded shadow-sm p-4 p-md-5 text-left policy-container">

                <!-- Separator Quick Links -->
                <div class="policy-nav-pills">
                    <a href="#agreement" class="policy-nav-link">Agreement to Terms</a>
                    <a href="#intellectual-property" class="policy-nav-link">Intellectual Property</a>
                    <a href="#user-registration" class="policy-nav-link">User Registration</a>
                    <a href="#product-pricing" class="policy-nav-link">Product & Pricing</a>
                    <a href="#orders-payments" class="policy-nav-link">Orders & Payments</a>
                    <a href="#prohibited-activities" class="policy-nav-link">Prohibited Activities</a>
                    <a href="#commission-policy" class="policy-nav-link">Commission Policy</a>
                    <a href="#contact-us" class="policy-nav-link">Contact Us</a>
                </div>

                <!-- Terms Intro & Definitions -->
                <div class="policy-block mb-5">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Terms and Conditions</h2>
                    <p class="small text-muted mb-3">Effective Date: 20/06/2025</p>
                    <p class="lh-1-8">
                        Welcome to <strong>ValueCeylon.com</strong> (“Platform”), a multi-vendor online pharmacy and healthcare marketplace operated by Value Ceylon Technologies Pvt Ltd. By accessing or using this Platform, you agree to be bound by these Terms and Conditions.
                    </p>

                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">Definitions</h3>
                        <ul class="pl-4 mb-4">
                            <li class="mb-1"><strong>Platform</strong> – Refers to ValueCeylon.com.</li>
                            <li class="mb-1"><strong>Company / We / Us / Our</strong> – Refers to Value Ceylon Technologies Pvt Ltd.</li>
                            <li class="mb-1"><strong>User</strong> – Refers to any person accessing or using the Platform.</li>
                            <li class="mb-1"><strong>Buyer / Customer</strong> – Any person placing an order for goods or services on the Platform.</li>
                            <li class="mb-1"><strong>Seller / Vendor</strong> – Any pharmacy or healthcare product supplier registered on the Platform to sell goods.</li>
                            <li class="mb-1"><strong>Product(s)</strong> – Refers to any item listed for sale on the Platform, including prescription and non-prescription items.</li>
                        </ul>
                    </div>
                </div>

                <!-- AGREEMENT TO TERMS -->
                <div id="agreement" class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Agreement to Terms</h2>
                    <p>
                        These Terms of Use constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and Value Ceylon Technologies (Pvt) Ltd ("Company", “we”, “us”, or “our”), concerning your access to and use of the https://www.valueceylon.com website as well as any other media form, media channel, mobile website, or mobile application related, linked, or otherwise connected thereto (collectively, the “Platform”).
                    </p>
                    <p>
                        By accessing or using the Platform, you confirm that you have read, understood, and agree to be bound by all of these Terms of Use.
                    </p>
                    <p class="fw-700 text-danger mb-3">
                        IF YOU DO NOT AGREE WITH ALL OF THESE TERMS OF USE, YOU ARE EXPRESSLY PROHIBITED FROM USING THE PLATFORM AND MUST DISCONTINUE USE IMMEDIATELY.
                    </p>
                    <p>
                        Supplemental terms and conditions or documents that may be posted on the Platform from time to time are hereby expressly incorporated by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms of Use at any time and for any reason.
                    </p>
                    <p>
                        We will notify you of changes by updating the “Last updated” date of these Terms of Use. You waive any right to receive specific notice of such changes. It is your responsibility to review these Terms of Use periodically to stay informed of updates. By continuing to use the Platform after changes are posted, you will be deemed to have accepted and agreed to the updated Terms.
                    </p>
                    <p>
                        The services provided on this Platform, including the sale and purchase of healthcare and pharmaceutical products, are intended only for access and use in Sri Lanka. Users who choose to access the Platform from outside Sri Lanka do so at their own risk and are responsible for compliance with local laws and regulations where applicable.
                    </p>
                </div>

                <!-- INTELLECTUAL PROPERTY RIGHTS -->
                <div id="intellectual-property" class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Intellectual Property Rights</h2>
                    <p>
                        Unless otherwise stated, the Platform and all content published or accessible through ValueCeylon.com—including but not limited to source code, software, website design, databases, text, images, graphics, logos, videos, audio, icons, trademarks, service marks, and branding (collectively, the “Content”)—are the exclusive property of Value Ceylon Technologies (Pvt) Ltd or are lawfully licensed to us. These materials are protected under Sri Lankan intellectual property laws, as well as international copyright, trademark, and unfair competition laws.
                    </p>
                    <p>
                        The Content and Marks are provided on the Platform “AS IS” for your informational and personal use only. Except as expressly permitted in these Terms of Use, no part of the Platform, Content, or Marks may be copied, reproduced, republished, uploaded, posted, publicly displayed, translated, encoded, transmitted, distributed, sold, licensed, modified, or otherwise used for any commercial or public purposes without our prior written consent.
                    </p>
                    <p>
                        Subject to your eligibility to use the Platform, you are granted a limited, non-exclusive, non-transferable license to access and use the Platform for lawful purposes. You may download or print a copy of any content to which you have proper access, solely for personal and non-commercial use.
                    </p>
                    <p>
                        We reserve all rights not expressly granted to you with respect to the Platform, the Content, and the Marks. Any unauthorized use of the intellectual property displayed on this Platform may violate applicable laws and result in legal consequences.
                    </p>
                </div>

                <!-- USER REGISTRATION -->
                <div id="user-registration" class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">User Registration</h2>
                    <p>
                        To access certain features and services on ValueCeylon.com, including purchasing or selling pharmaceutical and healthcare-related products, you may be required to register and create a user or vendor account.
                    </p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">You must be at least 18 years old to use our website or make purchases.</li>
                        <li class="mb-1">You are responsible for maintaining the confidentiality of your account information, including your username and password.</li>
                        <li class="mb-1">You agree to provide accurate and current information during the registration and checkout process.</li>
                        <li class="mb-1">You may not use our website for any unlawful or unauthorized purposes.</li>
                    </ul>

                    <p class="fw-600 mb-2">By registering, you agree to:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">Provide accurate, current, and complete information during the registration process.</li>
                        <li class="mb-1">Maintain the confidentiality of your login credentials, including your username and password.</li>
                        <li class="mb-1">Be solely responsible for all activities that occur under your account, whether authorized by you or not.</li>
                        <li class="mb-1">Notify us immediately if you suspect any unauthorized use of your account or breach of security.</li>
                    </ul>
                    <p>
                        You agree that Value Ceylon Technologies (Pvt) Ltd shall not be liable for any loss or damage resulting from your failure to comply with this section.
                    </p>

                    <p class="fw-600 mb-2">We reserve the right to:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">Suspend or terminate your account for any reason, including but not limited to misuse, fraudulent activity, or breach of these Terms.</li>
                        <li class="mb-1">Remove, reclaim, or change your username if it is deemed, at our sole discretion, to be misleading, offensive, inappropriate, or infringing on trademarks or copyrights.</li>
                    </ul>
                    <p>
                        Each account is intended for a single user or vendor entity. Sharing account credentials across multiple individuals or unauthorized entities is strictly prohibited.
                    </p>
                    <p>
                        For vendors, additional identity and license verifications may be required as per applicable Sri Lankan pharmacy and healthcare regulations.
                    </p>
                </div>

                <!-- Product Information and Pricing -->
                <div id="product-pricing" class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Product Information and Pricing</h2>
                    <ul class="pl-4 mb-3" style="list-style-type: lower-alpha;">
                        <li class="mb-2">Value Ceylon strives to ensure that all product descriptions, specifications, images, availability information, and prices displayed on the Platform are accurate and up to date. However, products offered on the Platform may be supplied by independent third-party sellers, and therefore Value Ceylon does not warrant or guarantee that all information is accurate, complete, reliable, current, or error-free.</li>
                        <li class="mb-2">Product images are provided for illustrative purposes only. Actual products may vary in appearance, packaging, color, labeling, or specifications from those displayed on the Platform.</li>
                        <li class="mb-2">Prices, product availability, promotions, and discounts are subject to change without prior notice. Any promotional offers, discounts, coupons, or special pricing shall be valid only for the period specified and may be subject to additional terms and conditions.</li>
                        <li class="mb-2">In the event of a pricing error, product information error, or system malfunction, Value Ceylon reserves the right to cancel, refuse, or amend any order placed for the affected product, even after order confirmation, and any payments received shall be refunded in accordance with the applicable refund policy.</li>
                        <li class="mb-2">Value Ceylon reserves the right to limit quantities, discontinue products, or modify product offerings at any time without prior notice.</li>
                    </ul>
                </div>

                <!-- Orders and Payments -->
                <div id="orders-payments" class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Orders and Payments</h2>
                    <ul class="pl-4 mb-3" style="list-style-type: lower-alpha;">
                        <li class="mb-2">By placing an order on our website, you are making an offer to purchase the selected products.</li>
                        <li class="mb-2">We reserve the right to refuse or cancel any order for any reason, including but not limited to product availability, errors in pricing or product information, or suspected fraudulent activity.</li>
                        <li class="mb-2">You agree to provide valid and up-to-date payment information and authorize us to charge the total order amount, including applicable taxes and shipping fees, to your chosen payment method.</li>
                        <li class="mb-2">We use trusted third-party payment processors to handle your payment information securely. We do not store or have access to your full payment details.</li>
                    </ul>
                </div>

                <!-- PROHIBITED ACTIVITIES -->
                <div id="prohibited-activities" class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Prohibited Activities</h2>
                    <p>
                        You may use ValueCeylon.com only for lawful purposes and in accordance with these Terms and Conditions. The platform is intended solely for the legitimate purchase, sale, and promotion of pharmaceutical, healthcare, and wellness-related products and services. Use of the Site for any other purpose, including any unauthorized or harmful activities, is strictly prohibited.
                    </p>
                    <p class="fw-600 mb-2">As a user (buyer or vendor) of the Site, you agree not to:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">Use the platform to sell, list, or promote any unregistered, counterfeit, expired, or banned pharmaceutical products, medical devices, or healthcare items.</li>
                        <li class="mb-1">Misrepresent product availability, origin, quality, or authenticity.</li>
                        <li class="mb-1">Systematically extract, scrape, or retrieve data, listings, or other content from the Site to create a competing service or database without our written consent.</li>
                        <li class="mb-1">Attempt to manipulate or defraud any other users, vendors, or Value Ceylon Technologies (Pvt) Ltd through false claims, misleading communications, or any form of impersonation.</li>
                        <li class="mb-1">Circumvent, disable, or interfere with any security or verification-related features of the platform, including product license or prescription validation processes.</li>
                        <li class="mb-1">Upload or share false, misleading, defamatory, or harmful information in product descriptions, reviews, chat messages, or any other area of the Site.</li>
                        <li class="mb-1">Sell or attempt to sell prescription medications without a valid prescription verification process approved by us.</li>
                        <li class="mb-1">Post or transmit viruses, malware, harmful scripts, or other digital threats through the Site.</li>
                        <li class="mb-1">Interfere with or overload the Site’s infrastructure or the experience of other users through excessive requests, abusive activity, or automated processes.</li>
                        <li class="mb-1">Use bots, crawlers, or scraping tools to access, modify, or manipulate the Site’s functionality or content.</li>
                        <li class="mb-1">Engage in harassment, threats, or abusive behavior towards customers, vendors, delivery partners, or Value Ceylon Health representatives.</li>
                        <li class="mb-1">Submit fraudulent refund, return, or dispute claims, or attempt to exploit the platform’s logistics or payment policies.</li>
                        <li class="mb-1">Bypass any content moderation, verification, or approval processes implemented by ValueCeylon.com.</li>
                        <li class="mb-1">Copy, modify, or distribute proprietary elements of the Site, including software, source code, trademarks, or branding, without authorization.</li>
                        <li class="mb-1">Use another user's or vendor's account credentials or attempt to gain unauthorized access to internal systems or restricted features.</li>
                        <li class="mb-1">Use the Site to facilitate or promote illegal or unethical healthcare practices.</li>
                        <li class="mb-1">Collect or harvest personally identifiable information of users without proper consent.</li>
                        <li class="mb-1">Use the platform for any activity that violates local or international pharmaceutical and e-commerce laws, including but not limited to those enforced by the Sri Lanka National Medicines Regulatory Authority (NMRA).</li>
                    </ul>
                    <p class="text-danger font-weight-bold">
                        Violations of any of the above may result in account suspension, delisting of products, legal action, or permanent banning from the platform at the sole discretion of Value Ceylon Technologies (Pvt) Ltd.
                    </p>
                </div>

                <!-- CONTRIBUTION LICENSE -->
                <div class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Contribution License</h2>
                    <p>
                        By uploading, posting, listing, publishing, or otherwise making content (“Contributions”) available on ValueCeylon.com — including but not limited to product listings, descriptions, images, videos, reviews, store branding, or comments — you grant Value Ceylon Technologies (Pvt) Ltd a non-exclusive, worldwide, royalty-free, irrevocable, perpetual, sublicensable, and transferable license to use, display, host, reproduce, publish, distribute, and adapt such Contributions for purposes related to operating, promoting, and enhancing the platform and related services.
                    </p>

                    <p class="fw-600 mb-2">This license includes but is not limited to:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">Using your Contributions in marketing, advertising, or promotional content across any media channels (online or offline).</li>
                        <li class="mb-1">Displaying your Contributions in search results, product listings, vendor storefronts, and social media integrations.</li>
                        <li class="mb-1">Modifying or optimizing Contributions (e.g., image resizing, SEO enhancements, layout adjustments) to fit the technical or aesthetic needs of the platform.</li>
                    </ul>

                    <p class="fw-600 mb-2">You represent and warrant that:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">You own or have secured all necessary rights and permissions to publish and license your Contributions.</li>
                        <li class="mb-1">Your Contributions do not infringe on the intellectual property or other rights of third parties.</li>
                        <li class="mb-1">You are responsible for the accuracy and legality of the content you provide.</li>
                    </ul>
                    <p>
                        You retain full ownership of your Contributions and any intellectual property rights associated with them. However, by making them available on the platform, you grant us the right to use them as described above.
                    </p>

                    <p class="fw-600 mb-2">We reserve the right to:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">Edit, modify, or format your Contributions to comply with platform standards.</li>
                        <li class="mb-1">Re-categorize or reposition listings to maintain an organized structure.</li>
                        <li class="mb-1">Remove or restrict any Contributions at any time, at our sole discretion, especially if they are found to be misleading, inappropriate, illegal, or in violation of these Terms and Conditions.</li>
                    </ul>

                    <div class="mt-3 p-3 bg-light rounded border">
                        <p class="mb-0"><strong>Disclaimer:</strong> We are not responsible for any user-submitted content, and you agree to release and hold Value Ceylon Technologies (Pvt) Ltd harmless from any claims, liabilities, or disputes related to your Contributions. You are solely liable for the content you post or share through the platform.</p>
                    </div>
                </div>

                <!-- GUIDELINES FOR REVIEWS -->
                <div class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Guidelines for Reviews</h2>
                    <p>
                        ValueCeylon.com offers users the opportunity to submit reviews and ratings of vendors, products, and services to help foster transparency and trust across our multi-vendor pharmacy platform. When posting a review, you agree to follow these standards:
                    </p>

                    <h3 class="h5 fw-600 text-dark mb-2">Review Requirements</h3>
                    <p class="mb-2">To maintain the integrity and usefulness of reviews, you must ensure that:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">You have genuine, firsthand experience with the product, service, or vendor you are reviewing.</li>
                        <li class="mb-1">Your review must not contain any vulgar, profane, abusive, or hateful language.</li>
                        <li class="mb-1">You must not include discriminatory references based on religion, ethnicity, gender, nationality, age, marital status, sexual orientation, or disability.</li>
                        <li class="mb-1">You must not refer to or promote any illegal or prohibited activity.</li>
                        <li class="mb-1">You must not be affiliated with a competitor of the reviewed vendor or product when leaving negative feedback.</li>
                        <li class="mb-1">Your review must avoid making legal conclusions or unfounded accusations.</li>
                        <li class="mb-1">You must not post false, misleading, or intentionally deceptive content.</li>
                        <li class="mb-1">You may not organize or participate in campaigns to post collective reviews, whether positive or negative.</li>
                    </ul>

                    <h3 class="h5 fw-600 text-dark mb-2">Our Role & Rights</h3>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1"><strong>Moderation:</strong> We reserve the sole right to accept, edit, reject, or remove any review at any time, for any reason, without prior notice.</li>
                        <li class="mb-1"><strong>No Obligation:</strong> While we strive to maintain quality standards, we are not obligated to monitor or moderate reviews.</li>
                        <li class="mb-1"><strong>Non-Endorsement:</strong> Reviews posted on ValueCeylon.com do not represent the opinions of Value Ceylon Technologies (Pvt) Ltd, our employees, affiliates, or partners. We do not endorse any user-submitted content.</li>
                    </ul>

                    <h3 class="h5 fw-600 text-dark mb-2">License Grant</h3>
                    <p>
                        By posting a review on the platform, you grant Value Ceylon Technologies (Pvt) Ltd a perpetual, non-exclusive, royalty-free, fully-paid, worldwide license to use, reproduce, adapt, publish, translate, transmit, display, and distribute your review content in any format or media. This includes using your review content for promotional, analytical, or commercial purposes.
                    </p>
                </div>

                <!-- MOBILE APPLICATION LICENSE -->
                <div class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Mobile Application License</h2>
                    <h3 class="h5 fw-600 text-dark mb-2">Use License</h3>
                    <p>
                        If you access ValueCeylon.com via a mobile application, we grant you a revocable, non-exclusive, non-transferable, limited license to install and use the application on your personal mobile or wireless electronic devices that you own or control. This license allows access to and use of the application strictly in accordance with these Terms and Conditions.
                    </p>
                    <p class="fw-600 mb-2">You agree not to:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">Decompile, reverse engineer, disassemble, decrypt, or attempt to derive the source code of the application.</li>
                        <li class="mb-1">Modify, adapt, enhance, translate, or create derivative works of the application.</li>
                        <li class="mb-1">Violate any laws or regulations in connection with your access or use of the application.</li>
                        <li class="mb-1">Remove, alter, or obscure any copyright, trademark, or other proprietary notices.</li>
                        <li class="mb-1">Use the app for any revenue-generating activity not explicitly authorized by Value Ceylon Technologies (Pvt) Ltd.</li>
                        <li class="mb-1">Make the app accessible on a network where it could be used by multiple devices or users simultaneously.</li>
                        <li class="mb-1">Replicate or use the app to develop a competing product or service.</li>
                        <li class="mb-1">Use the app to send spam, automated queries, or unsolicited communications.</li>
                        <li class="mb-1">Exploit our interfaces, source code, or proprietary information in the development of software, applications, or hardware accessories for third-party use.</li>
                    </ul>

                    <h3 class="h5 fw-600 text-dark mb-2 mt-4">Apple and Android Devices</h3>
                    <p>
                        This section applies when you download and use our mobile application from an App Distributor such as the Apple App Store or Google Play:
                    </p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">The license is limited to a non-transferable right to install and use the application on Apple iOS or Android devices in accordance with the usage rules outlined by the App Distributor.</li>
                        <li class="mb-1">Value Ceylon Technologies (Pvt) Ltd is solely responsible for maintenance and support for the mobile application. App Distributors are not obligated to provide support.</li>
                        <li class="mb-1">If the application fails to comply with applicable warranties, you may notify the App Distributor. The distributor may refund the purchase price (if any) in accordance with their policies. To the maximum extent allowed by law, App Distributors have no other warranty obligations.</li>
                    </ul>
                    <p class="fw-600 mb-2">You confirm that:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">You are not located in a U.S.-sanctioned country.</li>
                        <li class="mb-1">You are not listed on any U.S. government restricted or prohibited parties list.</li>
                        <li class="mb-1">You must comply with all third-party agreements, including your wireless provider’s data usage policies.</li>
                        <li class="mb-1">You acknowledge that App Distributors are third-party beneficiaries of this agreement. They have the right to enforce these terms against you as third-party beneficiaries.</li>
                    </ul>
                </div>

                <!-- SOCIAL MEDIA -->
                <div class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Social Media</h2>
                    <p>
                        As part of the functionality of ValueCeylon.com, you may link your user account with your social media or other third-party service accounts (each a “Third-Party Account”) by either:
                    </p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">Providing your login credentials for the Third-Party Account directly on the Site, or</li>
                        <li class="mb-1">Authorizing us to access your Third-Party Account as permitted under that account’s terms and conditions.</li>
                    </ul>
                    <p class="fw-600 mb-2">By doing so, you confirm that:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">You are authorized to provide us access to your Third-Party Account without violating the terms of that service provider.</li>
                        <li class="mb-1">You are not breaching any terms or incurring additional fees or limitations imposed by that third-party provider.</li>
                    </ul>
                    <p class="fw-600 mb-2">By linking your Third-Party Account with ValueCeylon.com, you agree that:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">We may access, store, and display content from that Third-Party Account (e.g., profile information, friend lists, or posts) on our platform.</li>
                        <li class="mb-1">Depending on your privacy settings on those platforms, certain personal information may become visible on your account within our Site.</li>
                        <li class="mb-1">We may exchange data with those services for account syncing or feature enhancement (as applicable and permitted).</li>
                    </ul>
                    <p class="fw-600 mb-2">Please note that:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">If a Third-Party Account becomes unavailable or access is revoked, any content or features connected to it may no longer function on our Site.</li>
                        <li class="mb-1">You may disable the link between your Value Ceylon account and your Third-Party Account at any time via your account settings or by contacting us directly.</li>
                    </ul>
                    <div class="p-3 bg-light rounded border mb-3">
                        <p class="mb-0 text-dark"><strong>⚠️ IMPORTANT:</strong> Your interaction with Third-Party Accounts is governed solely by your agreements with the respective third-party providers. Value Ceylon Technologies (Pvt) Ltd is not responsible for the accuracy, legality, or appropriateness of any content retrieved from or posted to such platforms.</p>
                    </div>
                    <p>
                        We may access your contact lists (including your email address book or mobile contacts) from linked Third-Party Accounts solely for identifying users you may know on our platform. This connection can also be deactivated at any time, and we will attempt to delete any such retrieved data from our systems—except for your username and profile picture, which may remain associated with your Value Ceylon account.
                    </p>
                </div>

                <!-- ADVERTISERS -->
                <div class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Advertisers</h2>
                    <p>
                        We allow advertisers to display their advertisements and promotional content in designated areas of ValueCeylon.com, such as banners, sidebars, or featured vendor sections.
                    </p>
                    <p class="fw-600 mb-2">If you are an advertiser on our Site, you agree to:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">Take full responsibility for the content of your advertisements, as well as for any products or services promoted or sold through your advertisements.</li>
                        <li class="mb-1">Ensure that you possess all necessary rights, including intellectual property, publicity, branding, and contractual rights, required to legally display your advertisements on our platform.</li>
                        <li class="mb-1">Comply with all applicable laws and ethical standards, particularly when advertising health, wellness, or pharmaceutical-related products and services.</li>
                    </ul>
                    <p class="fw-600 mb-2">By placing advertisements on our Site, you acknowledge that:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">Value Ceylon Technologies (Pvt) Ltd only provides the digital space to display advertisements and does not endorse or guarantee any product, service, or business advertised.</li>
                        <li class="mb-1">We do not assume responsibility or liability for the accuracy, legality, or effectiveness of any advertisements or their associated content.</li>
                        <li class="mb-1">We reserve the right, at our sole discretion, to remove or refuse any advertisement that we consider inappropriate, misleading, harmful, or in violation of our policies or applicable regulations.</li>
                    </ul>
                    <p>
                        If you are interested in advertising opportunities on ValueCeylon.com, please contact us through the details provided on our Contact Page or your seller dashboard.
                    </p>
                </div>

                <!-- SITE MANAGEMENT -->
                <div class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Site Management</h2>
                    <p class="fw-600 mb-2">We reserve the right, but are not obligated, to:</p>
                    <ul class="pl-4 mb-3">
                        <li class="mb-1">Monitor the Site for any violations of these Terms of Use or any other policies.</li>
                        <li class="mb-1">Take appropriate legal action against any user who, at our sole discretion, violates applicable laws or these Terms of Use. This may include reporting such violations to law enforcement or other relevant authorities.</li>
                        <li class="mb-1">Refuse, restrict, or limit access to, or disable (where technologically feasible) any Contributions or content submitted by users that we determine to be inappropriate or in violation of these Terms.</li>
                        <li class="mb-1">Remove or disable any files or content that we find to be excessive in size, burdensome to our systems, or harmful to the proper functioning of the Site, without prior notice or liability.</li>
                        <li class="mb-1">Manage and operate the Site as necessary to protect our rights, safeguard our property, maintain security, and ensure the optimal functioning and user experience of the Site.</li>
                    </ul>
                    <p>These actions may be taken at our sole discretion and without prior notice or liability to you.</p>
                </div>

                <!-- MODIFICATIONS AND INTERRUPTIONS -->
                <div class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Modifications and Interruptions</h2>
                    <p>
                        We reserve the right to change, modify, or remove the contents of the Site at any time and for any reason, at our sole discretion, without prior notice. However, we have no obligation to update any information on the Site. We also reserve the right to modify, suspend, or discontinue all or any part of the Site without notice at any time. You agree that we will not be liable to you or any third party for any modification, price change, suspension, or discontinuance of the Site.
                    </p>
                    <p>
                        While we strive to provide continuous availability, we cannot guarantee that the Site will be accessible at all times. The Site may experience interruptions, delays, or errors due to hardware, software, or other issues, or due to necessary maintenance. We reserve the right to change, revise, update, suspend, discontinue, or otherwise modify the Site at any time and for any reason without notice.
                    </p>
                    <p>
                        You agree that we shall have no liability for any loss, damage, or inconvenience caused by your inability to access or use the Site during any such downtime or discontinuance. Nothing in these Terms of Use shall be construed as obligating us to maintain, support, or provide updates, corrections, or releases in connection with the Site.
                    </p>
                </div>

                <!-- CORRECTIONS -->
                <div class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Corrections</h2>
                    <p>
                        There may be information on the Site that contains typographical errors, inaccuracies, or omissions, including descriptions, pricing, availability, and various other information. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update the information on the Site at any time, without prior notice.
                    </p>
                </div>

                <!-- LIMITATIONS OF LIABILITY & INDEMNIFICATION -->
                <div class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Limitations of Liability & Indemnification</h2>
                    <h3 class="h5 fw-600 text-dark mb-2">Limitation of Liability</h3>
                    <ul class="pl-4 mb-3" style="list-style-type: lower-alpha;">
                        <li class="mb-1">In no event shall ValueCeylon.com, its directors, employees, or affiliates be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in connection with your use of our website or the purchase and use of our products.</li>
                        <li class="mb-1">We make no warranties or representations, express or implied, regarding the quality, accuracy, or suitability of the products offered on our website.</li>
                    </ul>

                    <h3 class="h5 fw-600 text-dark mb-2 mt-4">Indemnification</h3>
                    <p>
                        You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates, and all of our respective officers, agents, partners, and employees, from and against any loss, damage, liability, claim, or demand, including reasonable attorneys’ fees and expenses, made by any third party due to or arising out of: (1) your Contributions; (2) use of the Site; (3) breach of these Terms of Use; (4) any breach of your representations and warranties set forth in these Terms of Use; (5) your violation of the rights of a third party, including but not limited to intellectual property rights; or (6) any overt harmful act toward any other user of the Site with whom you connected via the Site.
                    </p>
                    <p>
                        Notwithstanding the foregoing, we reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate, at your expense, with our defense of such claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding which is subject to this indemnification upon becoming aware of it.
                    </p>
                </div>

                <!-- USER DATA & ELECTRONIC COMMUNICATIONS -->
                <div class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">User Data & Electronic Communications</h2>
                    <h3 class="h5 fw-600 text-dark mb-2">User Data</h3>
                    <p>
                        We will maintain certain data that you transmit to the Site for the purpose of managing the performance of the Site, as well as data relating to your use of the Site. Although we perform regular routine backups of data, you are solely responsible for all data that you transmit or that relates to any activity you have undertaken using the Site. You agree that we shall have no liability to you for any loss or corruption of any such data, and you hereby waive any right of action against us arising from any such loss or corruption of such data.
                    </p>

                    <h3 class="h5 fw-600 text-dark mb-2 mt-4">Electronic Communications, Transactions, and Signatures</h3>
                    <p>
                        Visiting the Site, sending us emails, and completing online forms constitute electronic communications. You consent to receive electronic communications, and you agree that all agreements, notices, disclosures, and other communications we provide to you electronically, via email and on the Site, satisfy any legal requirement that such communication be in writing.
                    </p>
                    <p class="font-weight-bold">
                        YOU HEREBY AGREE TO THE USE OF ELECTRONIC SIGNATURES, CONTRACTS, ORDERS, AND OTHER RECORDS, AND TO ELECTRONIC DELIVERY OF NOTICES, POLICIES, AND RECORDS OF TRANSACTIONS INITIATED OR COMPLETED BY US OR VIA THE SITE.
                    </p>
                    <p>
                        You hereby waive any rights or requirements under any statutes, regulations, rules, ordinances, or other laws in any jurisdiction which require an original signature or delivery or retention of non-electronic records, or to payments or the granting of credits by any means other than electronic means.
                    </p>
                </div>

                <!-- MISCELLANEOUS -->
                <div class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Miscellaneous</h2>
                    <p>
                        These Terms of Use and any policies or operating rules posted by us on the Site or in respect to the Site constitute the entire agreement and understanding between you and us. Our failure to exercise or enforce any right or provision of these Terms of Use shall not operate as a waiver of such right or provision. These Terms of Use operate to the fullest extent permissible by law. We may assign any or all of our rights and obligations to others at any time. We shall not be responsible or liable for any loss, damage, delay, or failure to act caused by any cause beyond our reasonable control.
                    </p>
                    <p>
                        If any provision or part of a provision of these Terms of Use is determined to be unlawful, void, or unenforceable, that provision or part of the provision is deemed severable from these Terms of Use and does not affect the validity and enforceability of any remaining provisions. There is no joint venture, partnership, employment or agency relationship created between you and us as a result of these Terms of Use or use of the Site. You agree that these Terms of Use will not be construed against us by virtue of having drafted them. You hereby waive any and all defenses you may have based on the electronic form of these Terms of Use and the lack of signing by the parties hereto to execute these Terms of Use.
                    </p>
                </div>

                <!-- COMMISSION STRUCTURE & FEE POLICY -->
                <div id="commission-policy" class="policy-block mb-5 policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Commission Structure & Fee Policy</h2>
                    <p>
                        To maintain and operate the ValueCeylonHealth.com platform, we apply a commission fee on each successful transaction completed through the platform. Commission rates vary based on the product or service category, reflecting industry standards, logistics complexity, and regulatory considerations. The following section outlines the applicable commission percentages for each category.
                    </p>

                    <h3 class="h5 fw-600 text-dark mb-3 mt-4">Commission Percentages by Category</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mt-3">
                            <thead style="background-color: #f8fafc;">
                                <tr>
                                    <th class="fw-700" style="color: #000;">Category</th>
                                    <th class="fw-700 text-center" style="color: #000; width: 20%;">Suggested Commission Rate</th>
                                    <th class="fw-700" style="color: #000;">Justification</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ayurvedic & Herbal</td>
                                    <td class="text-center font-weight-bold">5%</td>
                                    <td>High margins, popular B2C items, less regulatory control</td>
                                </tr>
                                <tr>
                                    <td>Wound Care & Dressing</td>
                                    <td class="text-center font-weight-bold">3%</td>
                                    <td>Moderate margins, moderate demand</td>
                                </tr>
                                <tr>
                                    <td>Caregiver Essentials & Accessories</td>
                                    <td class="text-center font-weight-bold">4%</td>
                                    <td>Mixed product types, average margin</td>
                                </tr>
                                <tr>
                                    <td>Animal Medicines and Veterinary</td>
                                    <td class="text-center font-weight-bold">3%</td>
                                    <td>Regulated market, niche category</td>
                                </tr>
                                <tr>
                                    <td>Sexual Wellness Products</td>
                                    <td class="text-center font-weight-bold">5%</td>
                                    <td>High-margin items, strong demand</td>
                                </tr>
                                <tr>
                                    <td>Medical Laboratory Services</td>
                                    <td class="text-center font-weight-bold">3%</td>
                                    <td>Service-based, low cost structure, B2B potential</td>
                                </tr>
                                <tr>
                                    <td>Surgical & Medical Consumables</td>
                                    <td class="text-center font-weight-bold">3%</td>
                                    <td>B2B supplies, bulk sales, tight margins</td>
                                </tr>
                                <tr>
                                    <td>Medical Supplies, Devices, Aids & Wellness</td>
                                    <td class="text-center font-weight-bold">3%</td>
                                    <td>Variable prices, moderate turnover</td>
                                </tr>
                                <tr>
                                    <td>Vitamins, Nutraceuticals & Supplements</td>
                                    <td class="text-center font-weight-bold">5%</td>
                                    <td>High margin, fast-moving</td>
                                </tr>
                                <tr>
                                    <td>Personal Hygiene</td>
                                    <td class="text-center font-weight-bold">4%</td>
                                    <td>Competitive category, moderate margin</td>
                                </tr>
                                <tr>
                                    <td>Hospital & Ward Supplies</td>
                                    <td class="text-center font-weight-bold">3%</td>
                                    <td>B2B market, bulk pricing, thin margins</td>
                                </tr>
                                <tr>
                                    <td>Generic Medicines</td>
                                    <td class="text-center font-weight-bold">3%</td>
                                    <td>Highly regulated, tight margins, price-sensitive</td>
                                </tr>
                                <tr>
                                    <td>Educational Products & Medical Services</td>
                                    <td class="text-center font-weight-bold">3%</td>
                                    <td>Niche but profitable, includes books, training, etc.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- CONTACT US -->
                <div id="contact-us" class="policy-block policy-section-border">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-3">Contact Us</h2>
                    <p class="mb-3">
                        To resolve any complaints regarding the Site or to request further information about its use, please contact us at:
                    </p>

                    <div class="p-3 bg-light rounded border">
                        <h3 class="h5 fw-600 text-dark mb-2">Value Ceylon Technologies Pvt Ltd</h3>
                        <p class="mb-1">No 73 Gagabada road, Wewala, Piliyandala, Sri Lanka</p>
                        <p class="mb-1"><strong>Phone:</strong> (+94) 761837685</p>
                        <p class="mb-0"><strong>Email:</strong> <a href="mailto:info@valueceylonpharma.lk" class="font-weight-bold">info@valueceylonpharma.lk</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection