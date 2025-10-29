@extends('frontend.layouts.app')

@section('content')
    <section class="pt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="alert alert-primary" role="alert">
                    <h2 class="text-center">Frequently Asked Questions</h2>
                    </div>
                    <br><hr>
                    <br>
                    <h4>Getting Started with Value Ceylon health.com</h4>
                    <br>

                    {{-- Start accordian --}}
                    <div class="accordion custom-accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is Value Ceylon health.com? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    ValueCeylonHealth.com is a leading Sri Lankan online multi-vendor pharmacy and
                                    healthcare platform powered by Value Ceylon Technologies Pvt Ltd. It connects buyers
                                    with licensed pharmacies, healthcare vendors, doctors, manufacturers, wholesale
                                    suppliers, and distributors, enabling both B2C (business-to-consumer) and B2B
                                    (business-to-business) transactions.
                                    ValueCeylonHealth.com provides a secure, compliant, and reliable environment for
                                    individuals, pharmacies, clinics, and healthcare institutions to buy, sell, and
                                    collaborate digitally and efficiently.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Why Choose ValueCeylon.com Online Pharmacy Service? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <p>ValueCeylon.com is Sri Lanka's premier multi-vendor pharmacy platform, bringing
                                        together the biggest pharmacy chains in the country. Here's why you should choose
                                        us:</p>

                                    <ul class="pl-3">
                                        <li>
                                            <strong>Wide Selection of Pharmacies:</strong> Our platform integrates multiple
                                            trusted pharmacy vendors, offering you a vast range of medications and health
                                            products.
                                        </li>
                                        <li>
                                            <strong>Zero Out-of-Stock Policy:</strong> We are committed to ensuring the
                                            availability of all your essential medicines. Our policy guarantees "Zero
                                            out-of-stock" situations, so you never have to worry about running out.
                                        </li>
                                        <li>
                                            <strong>Safe and Reliable Medication:</strong> Your safety is our priority. All
                                            medications available on ValueCeylon.com are sourced from reputable vendors and
                                            meet the highest quality standards.
                                        </li>
                                        <li>
                                            <strong>Convenience at Your Fingertips:</strong> Enjoy a hassle-free shopping
                                            experience with easy navigation, reliable delivery, and a dedicated customer
                                            support team ready to assist you.
                                        </li>
                                    </ul>

                                    <p>With <strong>ValueCeylon.com</strong>, your health and we

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How does the multi-vendor pharmacy platform work? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    ValueCeylon.com connects customers with multiple verified pharmacies, enabling them
                                    to browse, compare, and order medications online. The platform ensures fast and accurate
                                    medicine delivery and supports e-prescribing for added convenience.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Are all the pharmacies on the platform verified? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Yes, all pharmacies on ValueCeylon.com are licensed by the National Medicines
                                    Regulatory Authority (NMRA) in Sri Lanka and undergo a strict verification process. This
                                    ensures they meet stringent quality and safety standards, providing you with a
                                    trustworthy and reliable service.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        What kinds of medications can I purchase on ValueCeylon.com? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    ValueCeylon.com offers a comprehensive range of healthcare products, including
                                    Prescription Medications , Over-the-Counter (OTC) Medicines , Health Supplements ,
                                    Personal Care Products and Medical Devices and Equipments.
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End accordian --}}
                    <br>
                    <h4>Browsing Products and Categories</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingSix">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How can I browse products on ValueCeylonHealth.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                You can browse products by using the main menu categories on the homepage or the search bar
                                at the top of the page. Filter options are also available to narrow down results by brand,
                                price, category, or seller.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingSeven">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    What types of categories are available on the platform? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                We offer a wide range of categories including:
                                <ul class="pl-3 mt-2">
                                    <li>Ayurvedic & Herbal</li>
                                    <li>Wound Care & Dressing</li>
                                    <li>Animal Medicines and Veterinary</li>
                                    <li>Sexual Wellness Products</li>
                                    <li>Surgical & Medical Consumables</li>
                                    <li>Medical Supplies, devices , Aids & Wellness</li>
                                    <li>Vitamins, Nutraceuticals & Dietary Supplements</li>
                                    <li>Personal Hygiene</li>
                                    <li>Hospital & Ward Supplies</li>
                                    <li>Medical Laboratory Services</li>
                                    <li>Caregiver Essentials & Accessories</li>
                                    <li>Generic medicines</li>
                                    <li>Educational Products & Medical Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingEight">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Can I search by brand or product name? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Yes, simply type the brand name or product name into the search bar. You can also apply
                                filters for more specific results.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingNine">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    How can I know if a product requires a prescription? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Products that require a prescription are marked with an <strong>Rx</strong> symbol. You’ll
                                be prompted to upload a valid prescription during checkout.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingTen">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Are all products listed by licensed sellers? / Can I compare similar products?
                                    &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                            <div class="card-body">
                                Yes, every product on the platform is listed by verified pharmacies, manufacturers, or
                                healthcare sellers who are registered with ValueCeylonHealth.com.
                                <br><br>
                                Yes, on each product page, you can view similar products, alternative brands, and customer
                                reviews to help you make an informed decision.
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4>Trust and Security</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading11">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    Is ValueCeylonHealth.com a secure platform? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
                            <div class="card-body">
                                Yes. We use SSL encryption and secure payment gateways to protect your personal and
                                financial information. All transactions are conducted over a safe, encrypted connection.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading12">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                    How do you ensure the safety of medicines sold on the platform? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
                            <div class="card-body">
                                All products are listed by verified and licensed pharmacies, manufacturers, or healthcare
                                vendors. Every seller must comply with NMRA and Ministry of Health regulations.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading13">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                    Are sellers and pharmacies verified? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
                            <div class="card-body">
                                Yes. Sellers must submit valid documentation such as pharmacy licenses, NMRA registration,
                                and business registration before they are approved to list products on the platform.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading14">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                    Is my personal and medical data protected? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
                            <div class="card-body">
                                Absolutely. We strictly follow data privacy laws and never share your information with
                                unauthorized third parties. Your prescriptions, order history, and health details are stored
                                securely and confidentially.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading15">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                    How is prescription verification handled? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
                            <div class="card-body">
                                When you upload a prescription, it is reviewed by a licensed pharmacist before order
                                processing. Only valid prescriptions from qualified doctors are accepted for Rx medicines.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading16">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                    What if I receive a fake or incorrect product? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
                            <div class="card-body">
                                We have a strict quality assurance policy. You can report counterfeit, expired, or wrong
                                products through the Returns & Refunds section, and appropriate action will be taken against
                                the seller.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading17">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                    Can I trust the reviews and ratings on the site? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample">
                            <div class="card-body">
                                Yes. Product reviews and seller ratings come from verified customers who have made purchases
                                through the platform, ensuring transparency and reliability.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading18">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                    How are disputes between buyers and sellers handled? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionExample">
                            <div class="card-body">
                                Our dedicated customer protection team investigates any disputes fairly and ensures a
                                resolution that maintains buyer trust and platform standards.
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4>Shipping with value Ceylon .com</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading19">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                    Who handles the shipping of products? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
                            <div class="card-body">
                                Shipping is handled by individual sellers or their assigned logistics partners. Some vendors
                                also partner with Value Ceylon's approved courier services to ensure timely delivery.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading20">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                    What are the available delivery options? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
                            <div class="card-body">
                                Delivery options may include:<br>
                                • Standard delivery (1–3 business days) - Rs. 500.00<br>
                                • Express delivery (within 24 hours in selected areas) - 9.00 am to 3.00 pm on Weekdays: Rs.
                                550.00<br>
                                • Pickup from seller location (if offered)<br><br>
                                Options will vary based on the product, seller location, and buyer’s delivery address.
                                Shipping fees are set by each seller and may vary depending on the product size, weight, and
                                delivery location. Charges will be shown clearly at checkout before payment.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading21">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                    How can I track my order? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#accordionExample">
                            <div class="card-body">
                                Once your order is shipped, you’ll receive a tracking number via SMS or email. You can also
                                track your order status in your buyer dashboard under "My Orders."
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading22">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                    Do you deliver island-wide? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample">
                            <div class="card-body">
                                Yes, most sellers offer island-wide delivery. However, delivery times may vary based on
                                geographic location and courier availability.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading23">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                    Can I place a single order from multiple sellers? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#accordionExample">
                            <div class="card-body">
                                Yes. If your order includes products from multiple sellers, each seller will ship their
                                items separately, and you may receive multiple packages with separate shipping charges.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading24">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                    What if my order is delayed or not delivered? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#accordionExample">
                            <div class="card-body">
                                If your order is delayed beyond the estimated delivery time, please contact customer support
                                or check the status on your dashboard. Our support team will coordinate with the seller for
                                resolution.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading25">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                    Can I schedule my delivery for a specific time? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse25" class="collapse" aria-labelledby="heading25" data-parent="#accordionExample">
                            <div class="card-body">
                                Some sellers or couriers may allow scheduled delivery within a selected time slot. This
                                feature depends on seller capabilities and courier availability in your area.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading26">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                    Do you offer same-day delivery? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#accordionExample">
                            <div class="card-body">
                                Same-day delivery is available in selected cities for eligible products marked as “Express
                                Delivery.” Availability will be displayed at checkout.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading27">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                    How are cold chain or temperature-sensitive medicines shipped? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#accordionExample">
                            <div class="card-body">
                                For temperature-sensitive products (like insulin or vaccines), sellers use insulated
                                packaging and cold-chain compliant delivery options to maintain safety during transit.
                            </div>
                        </div>
                    </div>

                    {{-- Accordian --}}
                </div>
            </div>
        </div>
    </section>

@endsection