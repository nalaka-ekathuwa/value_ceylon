@extends('frontend.layouts.app')

@section('content')
    <section class="pt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="alert alert-primary" role="alert">
                        <h2 class="text-center">Customer Support</h2>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <h4>Buyer account management</h4>
                    <br>

                    {{-- Start accordian --}}

                    <div id="CustomerAccordion">
                    <div class="card custom-accordion">
                        <div class="card-header" id="heading98">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse98" aria-expanded="false" aria-controls="collapse98">
                                    1. How do I create an account on ValueCeylonHealth.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse98" class="collapse" aria-labelledby="heading98" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Click “Sign Up” on the homepage, enter your name, email, mobile number, and create a
                                password. You’ll receive a verification code to confirm your account.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading99">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse99" aria-expanded="false" aria-controls="collapse99">
                                    2. Is it free to create a buyer account? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse99" class="collapse" aria-labelledby="heading99" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. Creating and maintaining a buyer account is completely free on ValueCeylonHealth.com.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading100">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse100" aria-expanded="false" aria-controls="collapse100">
                                    3. What can I do with a buyer account? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse100" class="collapse" aria-labelledby="heading100" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                With an account, you can:<br>
                                • Browse and order medicines and healthcare products<br>
                                • Upload prescriptions<br>
                                • Track orders<br>
                                • Manage shipping addresses<br>
                                • Request returns or refunds<br>
                                • Access order history and invoices
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading101">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse101" aria-expanded="false" aria-controls="collapse101">
                                    4. How do I update my profile or address? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Log in, go to “My Account > Profile”, and you can update your personal details, delivery
                                address, or contact number anytime.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading102">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse102" aria-expanded="false" aria-controls="collapse102">
                                    5. I forgot my password. How do I reset it? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse102" class="collapse" aria-labelledby="heading102" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Click “Forgot Password” on the login page, enter your registered email or phone number, and
                                follow the link or code sent to reset your password.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading103">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse103" aria-expanded="false" aria-controls="collapse103">
                                    6. How do I change my email or mobile number? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse103" class="collapse" aria-labelledby="heading103" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Go to Account Settings, and under “Contact Info,” you can update your details. You may be
                                asked to verify the new number or email address.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading104">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse104" aria-expanded="false" aria-controls="collapse104">
                                    7. Is my personal information secure? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse104" class="collapse" aria-labelledby="heading104" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. ValueCeylonHealth.com uses SSL encryption and data protection protocols to keep your
                                personal and medical information safe and confidential.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading105">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse105" aria-expanded="false" aria-controls="collapse105">
                                    8. Can I have multiple delivery addresses saved? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse105" class="collapse" aria-labelledby="heading105" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. You can add and manage multiple addresses for different locations (e.g., home, office,
                                relatives) in your address book under your account.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading106">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse106" aria-expanded="false" aria-controls="collapse106">
                                    9. How can I delete my account? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse106" class="collapse" aria-labelledby="heading106" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                To permanently delete your account, contact Customer Support through the Help Center. Note
                                that once deleted, all order history and data will be removed.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading107">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse107" aria-expanded="false" aria-controls="collapse107">
                                    10. Do I need an account to place an order? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse107" class="collapse" aria-labelledby="heading107" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. You must have an account to upload prescriptions, track orders, and ensure secure
                                checkout and delivery of medical products.
                            </div>
                        </div>
                    </div>
                    </div>
                    {{-- End accordian --}}
                    <br>
                    <h4>Placing Orders</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading1">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    1. How do I place an order on ValueCeylonHealth.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                To place an order:<br>
                                • Log in to your buyer account<br>
                                • Browse or search for a product<br>
                                • Click “Add to Cart”, then go to Checkout<br>
                                • Select your delivery address and payment method<br>
                                • Confirm and place the order
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading2">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. Do I need a prescription to place an order? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Only for prescription (Rx) medicines. If required, the system will prompt you to upload a
                                valid prescription during checkout. Non-prescription items can be ordered directly.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading3">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    3. Can I place an order via mobile phone? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. ValueCeylonHealth.com is mobile-friendly, and you can easily place orders using your
                                smartphone or tablet.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    4. How do I upload my prescription? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                During checkout, click the “Upload Prescription” button and select a scanned copy or photo
                                of the valid prescription. Ensure the image is clear and complete.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading5">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    5. Can I upload more than one prescription? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes, you can upload more than one prescription — but only to a single selected pharmacy per
                                order.<br>
                                If you need to buy prescription medicines from different pharmacies, you must place separate
                                orders for each pharmacy. This ensures that each licensed pharmacy can verify and dispense
                                the correct medication based on the prescriptions you provide.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading6">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    6. How will I know if my order is confirmed? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                You will receive a confirmation message and email with an order ID once your order is
                                successfully placed. You can also check “My Orders” in your account.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading7">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    7. Can I cancel or modify my order after placing it? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes, but only before the order is processed by the seller. Go to My Orders, select the
                                order, and choose Cancel. For modifications, contact Customer Support as soon as possible.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading8">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    8. How can I track my order status? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Go to My Orders, select your order, and you will see the live status (e.g., Processing,
                                Shipped, Delivered). You’ll also receive email/SMS updates.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading9">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    9. What happens if a product is out of stock? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                If a product is unavailable, the seller will notify you, and you may:<br>
                                • Choose a substitute product<br>
                                • Wait until restocked<br>
                                • Receive a refund if already paid
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading10">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    10. Is there a minimum order value? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                There may be a minimum order requirement for certain vendors or offers. This will be shown
                                at checkout if applicable.
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4>Product & Patient Information </h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading1">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    1. Where can I find detailed product information? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Each product page includes comprehensive details such as:<br>
                                • Generic name & brand name<br>
                                • Ingredients<br>
                                • Dosage & usage instructions<br>
                                • Side effects<br>
                                • Storage information<br>
                                • Manufacturer details
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading2">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. How do I know if a medicine is safe for me? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                We strongly recommend consulting with a licensed doctor or pharmacist before purchasing or
                                consuming any medication.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading3">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    3. Are the medicines sold on ValueCeylonHealth.com genuine? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. All products are sold by licensed pharmacies and healthcare providers. Every seller is
                                verified to ensure compliance with Sri Lankan regulations.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    4. What if I need help understanding a product’s use? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                If you’re unsure about dosage, ingredients, or suitability, you can:<br>
                                • Use the “Ask a Pharmacist” feature<br>
                                • Send a query through the product Q&A section
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading5">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    5. Are there patient leaflets available? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. Many product pages include digital leaflets or PDFs with official patient information.
                                You may also request one through customer support if unavailable.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading6">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    6. How do I check if a product is suitable for children, elderly, or pregnant women? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Check the Usage Guidelines and Caution Statements listed on the product page. For specific
                                cases, consult with a professional via our Doctor’s Counter.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading7">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    7. Can I view medicine interactions or warnings? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. Most prescription product pages include drug interaction warnings, contraindications,
                                and precautionary advice. Always read the label and leaflet carefully.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading8">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    8. What should I do if I have an adverse reaction to a product? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Stop using the product immediately and seek medical attention. You can also report the
                                incident to us so we can notify the seller and health authorities if needed.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading9">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    9. Can I get dosage reminders or patient tips? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. When you purchase prescription medications, you may opt-in to reminder notifications,
                                refill alerts, and health tips related to your treatment.
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4>Safety & Quality Assurance</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading1">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    1. Are the medicines and health products on ValueCeylonHealth.com safe? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. All medicines and health products sold on our platform are sourced from licensed
                                pharmacies, registered manufacturers, and verified healthcare vendors. Each product must
                                meet Sri Lankan regulatory standards.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading2">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. How does ValueCeylonHealth.com ensure product quality? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                We enforce strict vendor verification, require batch tracking, and perform routine
                                compliance checks to ensure all sellers maintain proper storage, expiry tracking, and
                                handling of medical products.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading3">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    3. Are expired or damaged products ever sold? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Absolutely not. Our platform policy strictly prohibits the sale of expired, damaged, or
                                tampered products. Sellers are required to regularly update expiry information, and products
                                near expiry are flagged.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    4. What steps are taken to ensure prescription accuracy? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Uploaded prescriptions are reviewed by licensed pharmacists before dispensing. Sellers are
                                obligated to cross-verify prescriptions with product orders for patient safety and
                                regulatory compliance.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading5">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    5. Are cold chain (temperature-sensitive) medicines handled properly? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. Vendors dealing with temperature-sensitive products must follow cold chain logistics
                                protocols, including insulated packaging and temperature monitoring during transit.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading6">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    6. Can I report a safety concern or product issue? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. You can report safety concerns directly through the “Report a Product” option on the
                                product page or contact Customer Support. We investigate all reports immediately.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading7">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    7. How are sellers monitored for compliance? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Our Quality Assurance team conducts:<br>
                                • Regular audits<br>
                                • Document verification (licenses, storage logs)<br>
                                • Surprise inspections<br>
                                • Tracking of buyer complaints and feedback
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading8">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    8. Do you verify the medical devices sold on the platform? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. Medical devices must be from MOH-approved brands or NMRA-registered suppliers. Each
                                device listing must include instructions, warranty details, and safety certifications where
                                applicable.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading9">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    9. Are product reviews moderated for authenticity? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. Reviews and ratings are verified to ensure they come from real buyers. Fake or
                                misleading reviews are flagged and removed to protect buyers.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading10">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    10. How do I know a seller is verified? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Look for the “Verified Seller” badge on store pages. These sellers have passed
                                ValueCeylonHealth.com's background checks and meet high standards in product handling,
                                safety, and service.
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4>Shipping and Delivery</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading1">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    1. How does shipping work on ValueCeylonHealth.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Each order is shipped directly by the seller (pharmacy or vendor). If your order contains
                                items from multiple sellers, they will be delivered separately.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading2">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. What are the delivery areas covered? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                We deliver to most regions across Sri Lanka, including urban, suburban, and many rural
                                areas. Availability may vary based on seller location and courier services.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading3">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    3. How long does delivery take? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                • Colombo and suburbs: 1–3 working days<br>
                                • Other regions: 2–5 working days<br>
                                Prescription approval or stock verification may affect timelines.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    4. Can I track my order after it's shipped? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. Once your order is shipped, you will receive a tracking link via SMS or email. You can
                                also check real-time updates in My Orders.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading5">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    5. How are temperature-sensitive or fragile items delivered? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Such items (e.g., insulin, vaccines) are shipped using cold chain logistics or special
                                handling methods to maintain product safety and effectiveness.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading6">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    6. What are the delivery charges? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Delivery fees may vary based on:<br>
                                • Location<br>
                                • Weight or size of the package<br>
                                • Seller’s shipping policy<br>
                                Charges are shown during checkout before you place the order.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading7">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    7. Do you offer same-day or express delivery? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Some sellers may offer same-day or next-day delivery within Colombo and nearby areas. Look
                                for the “Express Delivery” badge on product pages.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading8">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    8. Can I schedule a delivery time? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Scheduled delivery is not yet available. However, sellers or delivery agents may contact you
                                prior to delivery for coordination.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading9">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    9. What should I do if I miss the delivery? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                If you miss the delivery attempt, the courier will usually try again or contact you. You can
                                also contact Customer Support for assistance in rescheduling.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading10">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    10. Can I change my delivery address after placing an order? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                You can edit the delivery address only before the order is shipped. Contact Customer Support
                                or the seller immediately to request the change.
                            </div>
                        </div>
                    </div>


                    <br>
                    <h4>Returns and Refunds</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading1">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    1. What is the returns policy on ValueCeylonHealth.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Returns are accepted for damaged, incorrect, or expired products. For prescription
                                medicines, returns are accepted only if the product is unopened and sealed, unless there is
                                a clear quality issue.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading2">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. How do I request a return? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Go to My Orders, select the item you want to return, and click “Request Return”. Follow the
                                instructions to upload photos and provide details about the issue.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading3">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    3. How long do I have to request a return? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Returns must be requested within 7 days of delivery. Some products may have shorter or
                                longer return windows, which will be specified on the product page.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    4. Who pays for the return shipping? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                If the return is due to a seller’s error (wrong product, damaged item),
                                ValueCeylonHealth.com covers the shipping cost. For buyer’s remorse or change of mind, the
                                buyer may be responsible for return shipping.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading5">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    5. How long does it take to process a refund? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Refunds are typically processed within 7-10 business days after the seller receives and
                                inspects the returned product.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading6">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    6. How will I receive my refund? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Refunds are issued to the original payment method used during purchase, such as bank
                                transfer or credit/debit card.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading7">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    7. Can I exchange a product instead of returning it? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Exchanges are handled on a case-by-case basis. Contact Customer Support to discuss if an
                                exchange is possible for your order.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading8">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    8. What if my product is defective or damaged? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Report the issue immediately via the return request form or contact Customer Support with
                                photos of the defect. We will prioritize such cases for swift resolution.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading9">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    9. Can I cancel my order to get a refund? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes, if the order has not been shipped or processed. Go to My Orders to cancel or contact
                                Customer Support as soon as possible.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading10">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    10. What happens if I do not receive my refund? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                If your refund is delayed or missing, contact Customer Support with your order ID and
                                details. We will investigate and ensure your refund is processed.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading11">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    Are there any products that are non-refundable or non-exchangeable? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes, certain products are non-refundable and non-exchangeable due to hygiene, safety, or
                                regulatory reasons. These include surgical items and medical devices, baby care products,
                                injections and injectables, and beauty or personal care products. Once opened or used, such
                                items cannot be resold, as this could compromise consumer health and safety. We also reserve
                                the right to refuse returns for other products that do not meet our return conditions.
                            </div>
                        </div>
                    </div>



                    <br>
                    <h4>Payments and Security</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading1">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    1. What payment methods are accepted on ValueCeylonHealth.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                We accept multiple payment options including:
                                <ul>
                                    <li>Credit/Debit cards (Visa, MasterCard, etc.)</li>
                                    <li>Online bank transfers</li>
                                    <li>Mobile wallets (e.g., eZ Cash, mCash)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading2">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. Is it safe to make payments on ValueCeylonHealth.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. We use secure SSL encryption and partner with trusted payment gateways to ensure your
                                payment details are protected at all times.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading3">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    3. Can I save my payment details for future orders? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                For your convenience, you can securely save your payment methods in your account. All saved
                                data is encrypted and protected according to industry standards.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    4. What should I do if my payment fails? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Check your internet connection and payment details, then try again. If the problem persists,
                                contact your bank or Customer Support for assistance.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading6">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    6. When will my payment be charged? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Payments are usually charged at the time of order confirmation. For Cash on Delivery,
                                payment is collected upon product delivery.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading7">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    7. How can I get a receipt or invoice for my order? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                After your payment is successful, a digital invoice is automatically emailed to you. You can
                                also download it from My Orders in your account.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading8">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    8. How do you protect my personal and payment information? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                We follow strict data privacy policies and use encrypted storage to protect your personal
                                and financial data. We never share your payment info with third parties.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading9">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    9. Can I request a payment refund? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. Refunds are processed according to our Returns and Refunds Policy. Contact Customer
                                Support with your order details to initiate a refund.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading10">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    10. Who can I contact if I suspect fraudulent activity on my account? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Immediately contact our Customer Support team and change your account password. We take
                                fraud very seriously and will assist you with securing your account.
                            </div>
                        </div>
                    </div>


                    <br>
                    <h4>Customer Support</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading1">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    1. How can I contact ValueCeylonHealth.com Customer Support? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                You can reach us via:
                                <ul>
                                    <li>Live chat on the website</li>
                                    <li>Email: support@valueceylonhealth.com</li>
                                    <li>Phone: +94 76 1837685</li>
                                    <li>Contact form on the website</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading2">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. What are the Customer Support working hours? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Our support team is available Monday to Friday, 8:00 AM to 6:00 PM. For urgent matters, use
                                the live chat feature for quicker responses.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading7">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    7. What should I do if my order is delayed or incomplete? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                If your order is delayed or incomplete, please contact our customer support team
                                immediately. We will coordinate with the pharmacy to resolve the issue.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading8">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    8. Can I switch to a different pharmacy for my order? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes, you can choose a different pharmacy during the ordering process or for future orders
                                based on your preferences.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading9">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    9. Can I upload a prescription on behalf of a family member in Sri Lanka? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. Please enter your email and mobile number on the upload page, so you will get the
                                quotation sent to your e-mail address.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading10">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    10. What should I do if some drugs in my prescription are not available? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#CustomerAccordion">
                            <div class="card-body">
                                If the specific drugs in your prescription are unavailable on Value Ceylon:
                                <ol>
                                    <li><strong>Check Alternatives:</strong> Our platform might list alternative brands or
                                        generic versions of the same medication. Consult your healthcare provider or
                                        pharmacist to confirm if these are suitable replacements.</li>
                                    <li><strong>Set Alerts:</strong> Use the "Notify Me" feature on Value Ceylon to get
                                        updates when the drug is back in stock.</li>
                                    <li><strong>Contact Us:</strong> Reach out to our customer support team for assistance.
                                        They can help locate the medicine from other sellers or recommend next steps.</li>
                                    <li><strong>Consult Your Doctor:</strong> If the medicine is unavailable across multiple
                                        sources, consult your doctor for alternative treatments or prescriptions.</li>
                                </ol>
                            </div>
                        </div>
                    </div>


                    <br>
                    <h4>Platform Policies</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingPolicy1">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsePolicy1" aria-expanded="false" aria-controls="collapsePolicy1">
                                    1. What are the key policies I should know as a buyer? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapsePolicy1" class="collapse" aria-labelledby="headingPolicy1"
                            data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Buyers should be aware of our policies on order placement, payment, returns and refunds,
                                privacy, and product authenticity. Detailed policies are available in the Terms & Conditions
                                section on our website.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingPolicy2">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsePolicy2" aria-expanded="false" aria-controls="collapsePolicy2">
                                    2. What are the seller policies on ValueCeylonHealth.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapsePolicy2" class="collapse" aria-labelledby="headingPolicy2"
                            data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Sellers must comply with regulations related to licensing, product listings, order
                                fulfillment, customer service, and data privacy. Non-compliance can lead to suspension or
                                removal from the platform.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingPolicy3">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsePolicy3" aria-expanded="false" aria-controls="collapsePolicy3">
                                    3. How does ValueCeylonHealth.com handle user privacy? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapsePolicy3" class="collapse" aria-labelledby="headingPolicy3"
                            data-parent="#CustomerAccordion">
                            <div class="card-body">
                                We follow strict data protection laws and ensure that your personal and medical data are
                                securely stored and never shared without consent. Our Privacy Policy explains this in
                                detail.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingPolicy4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsePolicy4" aria-expanded="false" aria-controls="collapsePolicy4">
                                    4. Are there policies on prescription medicines? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapsePolicy4" class="collapse" aria-labelledby="headingPolicy4"
                            data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. Prescription medicines require a valid prescription uploaded by the buyer. Sellers are
                                required to verify prescriptions before dispensing, ensuring legal compliance and patient
                                safety.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingPolicy5">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsePolicy5" aria-expanded="false" aria-controls="collapsePolicy5">
                                    5. What is the policy on prohibited items? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapsePolicy5" class="collapse" aria-labelledby="headingPolicy5"
                            data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Certain products, such as unapproved drugs, narcotics, and unsafe supplements, are strictly
                                prohibited. Sellers found listing prohibited items face immediate suspension.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingPolicy6">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsePolicy6" aria-expanded="false" aria-controls="collapsePolicy6">
                                    6. How does the platform handle disputes? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapsePolicy6" class="collapse" aria-labelledby="headingPolicy6"
                            data-parent="#CustomerAccordion">
                            <div class="card-body">
                                We encourage buyers and sellers to resolve disputes amicably. If needed, our Dispute
                                Resolution Team will intervene to mediate and enforce platform rules.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingPolicy7">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsePolicy7" aria-expanded="false" aria-controls="collapsePolicy7">
                                    7. Can policies change, and how will I be informed? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapsePolicy7" class="collapse" aria-labelledby="headingPolicy7"
                            data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Yes. Policies may be updated periodically. Users will be notified via email and platform
                                announcements. Continued use of the platform implies acceptance of updated policies.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingPolicy8">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsePolicy8" aria-expanded="false" aria-controls="collapsePolicy8">
                                    8. What are the terms for advertising on ValueCeylonHealth.com? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapsePolicy8" class="collapse" aria-labelledby="headingPolicy8"
                            data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Advertisers must follow ethical marketing practices, avoiding false claims or misleading
                                information. Our Advertising Policy details acceptable content and promotional guidelines.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingPolicy9">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsePolicy9" aria-expanded="false" aria-controls="collapsePolicy9">
                                    9. Are there guidelines on user-generated content? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapsePolicy9" class="collapse" aria-labelledby="headingPolicy9"
                            data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Reviews, comments, and forum posts must comply with our Community Guidelines which prohibit
                                offensive, spammy, or false content.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="headingPolicy10">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsePolicy10" aria-expanded="false" aria-controls="collapsePolicy10">
                                    10. How do I report a violation of platform policies? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapsePolicy10" class="collapse" aria-labelledby="headingPolicy10"
                            data-parent="#CustomerAccordion">
                            <div class="card-body">
                                Use the “Report” feature on product or seller pages, or contact Customer Support directly
                                with details. We investigate all reports promptly.
                            </div>
                        </div>
                    </div>


                    {{-- Accordian --}}
                </div>
            </div>
        </div>
    </section>

@endsection