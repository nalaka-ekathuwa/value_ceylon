@extends('frontend.layouts.app')

@section('content')
    <section class="pt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    {{-- Start policy --}}
                    <section id="privacy-policy" class="policy-section">
                        <h2>Privacy Policy</h2>
                        <p>
                            Welcome to ValueCeylonHealth.com ("we", "us", or "our"). This Privacy Policy outlines how we
                            collect, use, store, and protect your personal information when you use our website (the
                            "Platform"). We are committed to protecting your privacy and ensuring that your personal
                            information is handled in a safe and responsible manner, in accordance with applicable data
                            protection laws and healthcare regulations in Sri Lanka.
                        </p>

                        <h3>1. Information We Collect</h3>
                        <h4>A. Information You Provide to Us</h4>
                        <ul>
                            <li><strong>Registration Information:</strong> Name, email address, phone number, and login
                                credentials.</li>
                            <li><strong>Prescription Data:</strong> Uploads of medical prescriptions and relevant patient
                                details (with patient consent).</li>
                            <li><strong>Health Profile Information:</strong> (Optional) Allergies, past purchases, or health
                                conditions you provide for better recommendations.</li>
                            <li><strong>Seller Information:</strong> Business name, license number, pharmacy registration,
                                contact details, products listed, and transaction history.</li>
                            <li><strong>Order & Payment Data:</strong> Shipping address, billing details, payment method,
                                and transaction history.</li>
                            <li><strong>Communication Records:</strong> Emails, messages, or chats between customers and
                                vendors, or with our support team.</li>
                        </ul>

                        <h4>B. Information We Collect Automatically</h4>
                        <ul>
                            <li>IP address, browser type, time zone, and cookies</li>
                            <li>Pages viewed, products clicked, referral sources</li>
                            <li>Site interaction patterns and device specifications</li>
                        </ul>

                        <h3>2. Use of Personal Information</h3>
                        <ul>
                            <li>Process and deliver your orders securely</li>
                            <li>Authenticate buyers and sellers</li>
                            <li>Verify and process prescriptions in compliance with health regulations</li>
                            <li>Enable communication between customers and vendors</li>
                            <li>Provide a personalized shopping experience, including medicine reminders and recommendations
                            </li>
                            <li>Detect and prevent fraud or misuse</li>
                            <li>Improve our website's performance and customer experience</li>
                            <li>Conduct marketing and promotional campaigns (with your consent)</li>
                            <li>Ensure regulatory compliance with the National Medicines Regulatory Authority (NMRA) and
                                other legal authorities</li>
                        </ul>

                        <h3>3. Sharing of Information</h3>
                        <p>We do not sell your personal data. However, we may share your information with trusted parties
                            under the following circumstances:</p>
                        <ul>
                            <li><strong>Licensed Sellers and Pharmacies:</strong> To fulfill your orders, especially
                                prescription-based.</li>
                            <li><strong>Healthcare Professionals:</strong> Where applicable, to review prescriptions or
                                offer support.</li>
                            <li><strong>Third-Party Service Providers:</strong> For logistics, payment processing,
                                marketing, analytics, and cloud storage.</li>
                            <li><strong>Regulatory Bodies:</strong> To comply with the law or in response to legal
                                processes, including NMRA, courts, and other healthcare regulators.</li>
                            <li><strong>Marketing Platforms:</strong> To provide relevant ads and offers (only with your
                                consent).</li>
                        </ul>

                        <h3>4. Data Protection & Security</h3>
                        <p>We implement appropriate physical, digital, and administrative safeguards to protect your
                            personal and health-related information. These include:</p>
                        <ul>
                            <li>SSL encryption for all transactions</li>
                            <li>Access control and authentication protocols</li>
                            <li>Secure prescription handling by verified pharmacies</li>
                            <li>Regular security audits and data backup</li>
                        </ul>
                        <p>Prescription images and health data are handled with the highest confidentiality and only
                            accessible by licensed entities for the purpose of dispensing medicine.</p>

                        <h3>5. Cookies and Tracking Technologies</h3>
                        <p>We may use cookies and other tracking technologies (such as pixels and web beacons) to collect,
                            store, and track information about your interactions with our website. These technologies help
                            us analyze site traffic, personalize content, and improve performance.</p>
                        <p>We use cookies and similar technologies to:</p>
                        <ul>
                            <li>Remember login preferences</li>
                            <li>Track and analyze usage behavior</li>
                            <li>Personalize product suggestions</li>
                            <li>Enable social media features and targeted ads</li>
                        </ul>
                        <p>You can manage cookie preferences in your browser settings. Disabling cookies may affect site
                            functionality.</p>

                        <h3>6. Children’s Privacy</h3>
                        <p>This platform is intended for use by adults aged 18 and over. We do not knowingly collect or
                            store data from minors. If we become aware that a child has provided us with personal
                            information, we will delete it promptly.</p>

                        <h3>7. Your Rights</h3>
                        <p>As a user of ValueCeylonHealth.com, you have the right to:</p>
                        <ul>
                            <li>Access or correct your personal information</li>
                            <li>Request deletion of your account or data (subject to legal retention requirements)</li>
                            <li>Withdraw consent for non-essential data processing (e.g., marketing)</li>
                            <li>Lodge a complaint with a data protection authority</li>
                        </ul>
                        <p>To exercise your rights, email us at <a
                                href="mailto:support@valueceylonhealth.com">support@valueceylonhealth.com</a>.</p>

                        <h3>8. Changes to This Policy</h3>
                        <p>We may update this Privacy Policy periodically to reflect changes in regulations or service
                            offerings. Changes will be posted here with the "Effective Date" updated. We encourage you to
                            review it regularly.</p>
                    </section>


                    <section id="returns-refunds-policy" class="policy-section">
                        <h2>Returns & Refund Policy</h2>
                        <p><strong>Last updated:</strong> [Insert Date]</p>
                        <p>
                            Thank you for shopping at ValueCeylonHealth.com, operated by Value Ceylon Technologies Pvt Ltd.
                            ValueCeylonHealth.com is a multi-vendor online pharmacy platform connecting licensed pharmacies
                            and healthcare product sellers with buyers across Sri Lanka.
                        </p>
                        <p>
                            We request you to carefully review the following policy before initiating any return or refund
                            request, as policies may vary based on the product category and the seller’s terms.
                        </p>

                        <h3>1. Returns</h3>

                        <h4>1.1 Prescription Medication</h4>
                        <p>
                            Due to the sensitive nature of pharmaceutical products and the regulatory guidelines around
                            medicine storage and dispensing, we do not accept returns or offer refunds for prescription
                            medicines once delivered, except under the following conditions:
                        </p>
                        <ul>
                            <li>The product delivered is defective or damaged</li>
                            <li>The product received does not match the prescription (wrong medication or brand)</li>
                            <li>The order is lost or damaged during shipping</li>
                        </ul>

                        <p><strong>📦 Return Conditions:</strong></p>
                        <ul>
                            <li>Items must be unopened and in their original packaging</li>
                            <li>A valid prescription and proof of purchase are required</li>
                            <li>Return requests must be initiated within 3 days of delivery</li>
                        </ul>

                        <p>
                            Upon receiving your return request, the relevant seller will review the case and notify you
                            within a reasonable period if the return is accepted. If approved, a refund will be processed to
                            your original payment method.
                        </p>
                        <p>
                            <strong>📞 For assistance:</strong> Contact the seller via the product page or email our support
                            team at <a href="mailto:support@valueceylonhealth.com">support@valueceylonhealth.com</a>.
                        </p>

                        <h4>1.2 Over-the-Counter (OTC) and Non-Prescription Products</h4>
                        <p>
                            We allow returns for unopened OTC products such as supplements, wellness goods, or hygiene items
                            within 3 days of delivery under the following conditions:
                        </p>
                        <ul>
                            <li>The item is defective or damaged</li>
                            <li>The wrong product was delivered</li>
                        </ul>
                        <p><strong>🚫 Important:</strong> Opened or used items are not eligible for return unless the
                            product is found to be defective.</p>

                        <h4>1.3 Other Product Categories including Grocery Items</h4>
                        <p>
                            Returns are generally not accepted for the following items due to hygiene and safety reasons:
                        </p>
                        <ul>
                            <li>Surgical items and devices</li>
                            <li>Baby care products</li>
                            <li>Injections and temperature-sensitive items</li>
                            <li>Beauty and personal care products</li>
                        </ul>
                        <p>
                            However, if the product is damaged or incorrect, you may contact us within 3 days of receiving
                            your order for resolution.
                        </p>

                        <h3>2. Exchanges</h3>
                        <p>We only replace items if they are:</p>
                        <ul>
                            <li>Delivered in a defective or damaged condition</li>
                            <li>Incorrect (not matching the product ordered)</li>
                        </ul>
                        <p>
                            To initiate an exchange, contact our support team or the vendor directly. You may be required to
                            send the item to the seller’s address, which will be provided during the exchange process.
                        </p>
                        <p><strong>📬 Note:</strong> You must retain original packaging and proof of purchase.</p>

                        <h3>3. Refunds</h3>
                        <p>
                            Once your return is received and inspected by the seller, you will be notified of the status of
                            your refund.
                            If approved, your refund will be processed and applied automatically to your original method of
                            payment within 7–10 business days (depending on your bank or payment processor).
                        </p>
                        <p><strong>📝 Note:</strong></p>
                        <ul>
                            <li>Only regular-priced items may be refunded. Sale items are non-refundable.</li>
                            <li>Refunds exclude delivery and handling charges unless the return is due to an error by the
                                seller.</li>
                            <li>If the seller does not respond or disputes the return, ValueCeylonHealth.com will mediate
                                the process fairly.</li>
                        </ul>

                        <h3>4. Shipping and Return Logistics</h3>
                        <ul>
                            <li>Customers are responsible for paying shipping costs for returning items, unless the seller
                                agrees to cover them in specific cases (e.g., damaged/incorrect items).</li>
                            <li>It is recommended that you use a trackable shipping method or purchase shipping insurance.
                            </li>
                            <li>ValueCeylonHealth.com is not responsible for loss or damage of return items during transit
                                to the seller.</li>
                        </ul>

                        <h3>5. Seller-Specific Policies</h3>
                        <p>
                            Each vendor on ValueCeylonHealth.com may have individual return and refund terms. These will be
                            displayed on the product page or vendor profile. Customers are advised to check vendor-specific
                            policies before placing an order.
                        </p>
                        <p>
                            We comply with the regulations and guidelines set forth by the National Medicines Regulatory
                            Authority (NMRA) of Sri Lanka to ensure the safety, quality, and efficacy of all medicines
                            available through our platform.
                        </p>
                    </section>

                    <section id="advertising-policy" class="policy-section">
                        <h2>Advertising Policy</h2>
                        <p>
                            At <strong>ValueCeylonHealth.com</strong>, we are committed to maintaining a safe, ethical, and
                            medically responsible environment for all users. This Advertising Policy outlines the standards
                            and conditions for advertisers wishing to promote products or services on our platform.
                        </p>

                        <h3>1. Compliance with Regulations</h3>
                        <p>
                            All advertisements must comply with the applicable laws and regulations in Sri Lanka, including
                            the standards set by the National Medicines Regulatory Authority (NMRA). Advertisers are
                            responsible for ensuring that all promoted products—especially pharmaceuticals, health
                            supplements, and medical devices—are approved and meet safety, quality, and efficacy standards.
                        </p>

                        <h3>2. Acceptable Products and Services</h3>
                        <p>We allow advertisements that are relevant to the healthcare, wellness, and pharmaceutical
                            industries, including:</p>
                        <ul>
                            <li>Over-the-counter (OTC) medicines approved by NMRA</li>
                            <li>Health and wellness supplements</li>
                            <li>Medical equipment and devices</li>
                            <li>Pharmacy and health services</li>
                        </ul>
                        <p><strong>Note:</strong> Prescription drugs may not be advertised directly to consumers.</p>

                        <h3>3. Prohibited Content</h3>
                        <p>Advertisements must not:</p>
                        <ul>
                            <li>Make false, misleading, or unverifiable health claims</li>
                            <li>Promote unsafe or unapproved medicines or treatments</li>
                            <li>Target minors inappropriately</li>
                            <li>Use scare tactics or graphic health imagery</li>
                            <li>Include adult, obscene, or offensive content</li>
                        </ul>

                        <h3>4. Review and Approval</h3>
                        <p>
                            All ads are subject to review and approval by our compliance team. We reserve the right to
                            reject, remove, or request modifications to any advertisement that does not align with our
                            policies or values.
                        </p>

                        <h3>5. Transparency and Accuracy</h3>
                        <p>
                            Advertisements must clearly identify the advertiser and must not be disguised as editorial or
                            native content. Claims must be evidence-based, and disclaimers should be included where
                            applicable.
                        </p>

                        <h3>6. Data Privacy</h3>
                        <p>
                            Advertisers must not collect user data from our platform without express permission and must
                            comply with our <a href="#privacy-policy">Privacy Policy</a> and applicable data protection
                            laws.
                        </p>

                        <h3>7. Reporting Violations</h3>
                        <p>
                            If you believe an ad violates our policy, please report it to <a
                                href="mailto:info@valueceylonhealth.com">info@valueceylonhealth.com</a>. We will investigate
                            and take appropriate action.
                        </p>
                    </section>

                    <section id="delivery-policy" class="policy-section">
                        <h2>Delivery Policy</h2>
                        <p>
                            At <strong>Value Ceylon Health</strong>, we aim to ensure that your orders are delivered
                            promptly, safely, and with care. This Delivery Policy outlines the key details of our delivery
                            services.
                        </p>

                        <h3>1. Delivery Coverage</h3>
                        <p>
                            We deliver across all regions of Sri Lanka, subject to courier service availability. Some remote
                            or restricted areas may experience limited service or longer delivery times.
                        </p>

                        <h3>2. Delivery Timeframes</h3>
                        <ul>
                            <li><strong>Standard Delivery:</strong> 2–5 business days (island-wide)</li>
                            <li><strong>Same-Day/Next-Day Delivery:</strong> Available in select areas for eligible
                                products, subject to vendor and courier confirmation.</li>
                        </ul>
                        <p><em>Note: Delivery times may vary depending on product availability, order confirmation, and your
                                delivery location.</em></p>

                        <h3>3. Delivery Charges</h3>
                        <ul>
                            <li>Delivery charges are calculated at checkout based on location, weight, and vendor.</li>
                            <li>Some vendors may offer free delivery for qualifying orders (e.g., minimum purchase value).
                            </li>
                        </ul>

                        <h3>4. Order Tracking</h3>
                        <p>
                            Once your order is confirmed and dispatched, you will receive a tracking number via SMS or email
                            to monitor the status of your delivery.
                        </p>

                        <h3>5. Delivery Partners</h3>
                        <p>
                            We collaborate with trusted courier partners to ensure safe and timely delivery of medicines and
                            healthcare products. Cold chain-sensitive products are handled with required temperature control
                            protocols.
                        </p>

                        <h3>6. Missed Deliveries</h3>
                        <p>
                            If delivery fails due to an incorrect address, recipient unavailability, or other reasons, our
                            delivery partner will attempt redelivery or contact you for further instructions.
                        </p>

                        <h3>7. Vendor Responsibility</h3>
                        <p>
                            As a multivendor platform, individual sellers are responsible for timely dispatch and packaging.
                            We work closely with all vendors to ensure adherence to our delivery standards.
                        </p>

                        <h3>8. Delays and Disruptions</h3>
                        <p>
                            In rare cases such as adverse weather, public holidays, or regulatory checks, delivery may be
                            delayed. We will keep you informed of any delays and do our best to minimize inconvenience.
                        </p>

                        <h3>9. Contact Us</h3>
                        <p>For questions or assistance with deliveries, please contact our customer support team:</p>
                        <ul>
                            <li><strong>Email:</strong> <a
                                    href="mailto:support@valueceylonhealth.com">support@valueceylonhealth.com</a></li>
                            <li><strong>Phone:</strong> +94 76 183 7685</li>
                            <li><strong>Address:</strong> Value Ceylon Technologies Pvt Ltd, No. 73, Gagabada Road, Wewala,
                                Piliyandala</li>
                        </ul>
                        <p>
                            We are here to ensure that your experience on our platform is secure, compliant, and
                            trustworthy.
                        </p>
                    </section>

                    {{-- End policy --}}
                </div>
            </div>
        </div>
    </section>

@endsection