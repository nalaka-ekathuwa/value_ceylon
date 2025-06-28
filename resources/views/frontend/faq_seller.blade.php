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
                    <br>
                    <hr>
                    <br>
                    <h4>Seller Account management </h4>
                    <br>

                    {{-- Start accordian --}}
                    <div id="SellerAccordion">
                        <div class="card custom-accordion">
                            <div class="card-header" id="heading28">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                        How do I register as a seller on ValueCeylonHealth.com? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse28" class="collapse" aria-labelledby="heading28"
                                data-parent="#SellerAccordion">
                                <div class="card-body">
                                    Visit the Seller Registration page and complete the online application form. You’ll need
                                    to
                                    provide business details, pharmacy/manufacturer license, and NMRA certification (if
                                    applicable). Our team will verify your documents before approval.
                                </div>
                            </div>
                        </div>

                        <div class="card custom-accordion">
                            <div class="card-header" id="heading29">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                        What types of sellers are eligible to join the platform? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse29" class="collapse" aria-labelledby="heading29"
                                data-parent="#SellerAccordion">
                                <div class="card-body">
                                    We welcome the following verified sellers:<br>
                                    • Licensed Pharmacies<br>
                                    • Healthcare Distributors & Wholesalers<br>
                                    • Manufacturers (Pharma, Ayurveda, Medical Devices)<br>
                                    • Importers & Exporters<br>
                                    • Doctors offering consultation<br>
                                    • B2B healthcare suppliers
                                </div>
                            </div>
                        </div>

                        <div class="card custom-accordion">
                            <div class="card-header" id="heading30">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                        Is there a registration or subscription fee? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse30" class="collapse" aria-labelledby="heading30"
                                data-parent="#SellerAccordion">
                                <div class="card-body">
                                    Basic registration is free. However, certain premium features (like advanced ads or
                                    analytics) may require a subscription or service fee.
                                </div>
                            </div>
                        </div>

                        <div class="card custom-accordion">
                            <div class="card-header" id="heading31">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                        How can I update my business or contact information? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse31" class="collapse" aria-labelledby="heading31"
                                data-parent="#SellerAccordion">
                                <div class="card-body">
                                    Log in to your seller dashboard, navigate to Account Settings, and update your profile,
                                    address, or contact details. Major changes may require re-verification by our team.
                                </div>
                            </div>
                        </div>

                        <div class="card custom-accordion">
                            <div class="card-header" id="heading32">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                                        Can I add multiple users or staff to my seller account? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse32" class="collapse" aria-labelledby="heading32"
                                data-parent="#SellerAccordion">
                                <div class="card-body">
                                    Yes. You can assign roles such as product manager, order handler, or finance officer
                                    under
                                    your main account. Each user can have customized access rights.
                                </div>
                            </div>
                        </div>

                        <div class="card custom-accordion">
                            <div class="card-header" id="heading33">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                        What should I do if I forget my seller login password? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse33" class="collapse" aria-labelledby="heading33"
                                data-parent="#SellerAccordion">
                                <div class="card-body">
                                    Click "Forgot Password" on the login page and follow the steps to reset your password
                                    using
                                    your registered email or mobile number.
                                </div>
                            </div>
                        </div>

                        <div class="card custom-accordion">
                            <div class="card-header" id="heading34">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                                        How do I deactivate or close my seller account? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse34" class="collapse" aria-labelledby="heading34"
                                data-parent="#SellerAccordion">
                                <div class="card-body">
                                    To close your seller account, submit a request via Support or email our seller
                                    management
                                    team. You must resolve all pending orders, refunds, and dues before account closure.
                                </div>
                            </div>
                        </div>

                        <div class="card custom-accordion">
                            <div class="card-header" id="heading35">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
                                        How do I manage my shop profile or logo? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse35" class="collapse" aria-labelledby="heading35"
                                data-parent="#SellerAccordion">
                                <div class="card-body">
                                    Go to Store Settings in your dashboard where you can upload your store logo, banner,
                                    description, and business details that will be visible to buyers.
                                </div>
                            </div>
                        </div>

                        <div class="card custom-accordion">
                            <div class="card-header" id="heading36">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
                                        Is there training available for new sellers? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse36" class="collapse" aria-labelledby="heading36"
                                data-parent="#SellerAccordion">
                                <div class="card-body">
                                    Yes. Once registered, you’ll receive access to our Seller Onboarding Guide, training
                                    videos,
                                    and dedicated support team to help you start and succeed.
                                </div>
                            </div>
                        </div>

                        <div class="card custom-accordion">
                            <div class="card-header" id="heading37">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse37" aria-expanded="false" aria-controls="collapse37">
                                        Can I sell both B2C and B2B products under one account? &nbsp;&nbsp;
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse37" class="collapse" aria-labelledby="heading37"
                                data-parent="#SellerAccordion">
                                <div class="card-body">
                                    Yes. ValueCeylonHealth.com supports both B2C (consumer sales) and B2B (bulk/wholesale
                                    orders) from a single seller account. You can mark specific items for wholesale pricing.
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h4>Product Management</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading38">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
                                    1. How do I add a new product to my store ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse38" class="collapse" aria-labelledby="heading38" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Log in to your seller dashboard, go to "Products" > "Add New", and fill in the required
                                details like product name, category, brand, price, stock quantity, images, and description.
                                Upload regulatory documents (e.g., NMRA certificate) if required.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading39">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
                                    3. Can I bulk upload products ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse39" class="collapse" aria-labelledby="heading39" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. Use the bulk upload CSV template available in the seller dashboard to upload multiple
                                products at once. Ensure all fields are correctly filled to avoid errors.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading40">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
                                    4. How do I edit or update product information ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse40" class="collapse" aria-labelledby="heading40" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Go to "My Products" in your dashboard, select the item you want to update, and click "Edit."
                                You can modify price, stock level, description, and images. Changes will reflect after admin
                                approval (if required).
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading41">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
                                    5. What should I include in the product description ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse41" class="collapse" aria-labelledby="heading41" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Include the following for clarity:<br>
                                • Generic & brand name<br>
                                • Dosage/form (e.g., 500mg tablets)<br>
                                • Indications or uses<br>
                                • Instructions or directions<br>
                                • Storage guidelines<br>
                                • Manufacturer details<br>
                                • NMRA license number (if applicable)
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading42">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                    6. How do I manage out-of-stock products ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse42" class="collapse" aria-labelledby="heading42" data-parent="#SellerAccordion">
                            <div class="card-body">
                                You can either:<br>
                                • Set the stock to “0” to make it temporarily unavailable, or<br>
                                • Enable the “Out of Stock” status to inform customers clearly.<br><br>
                                Make sure to update stock regularly to avoid failed orders.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading43">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse43" aria-expanded="false" aria-controls="collapse43">
                                    7. Can I set special prices or discounts ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse43" class="collapse" aria-labelledby="heading43" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. You can set promotional prices, bulk discounts, or wholesale rates under the "Pricing"
                                section of the product page. You can also schedule sales for specific dates.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading44">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
                                    8. How are prescription-only (Rx) products managed ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse44" class="collapse" aria-labelledby="heading44" data-parent="#SellerAccordion">
                            <div class="card-body">
                                You must clearly mark such products as Rx Required. Buyers will be prompted to upload a
                                valid prescription, which will be verified by ValueCeylon's pharmacist or the seller before
                                order confirmation.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading45">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
                                    9. Can I hide or deactivate a product temporarily ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse45" class="collapse" aria-labelledby="heading45" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. Use the “Deactivate” toggle in your product list to temporarily hide the product
                                without deleting it.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading46">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse46" aria-expanded="false" aria-controls="collapse46">
                                    10. What if a product is rejected during approval ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse46" class="collapse" aria-labelledby="heading46" data-parent="#SellerAccordion">
                            <div class="card-body">
                                If your product is flagged or rejected, the reason will be shown in the dashboard. You can
                                correct and resubmit it for approval. Common issues include missing licenses, incomplete
                                info, or non-compliance with NMRA rules.
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4>Order Management</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading47">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse47" aria-expanded="false" aria-controls="collapse47">
                                    1. How do I receive new orders ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse47" class="collapse" aria-labelledby="heading47" data-parent="#SellerAccordion">
                            <div class="card-body">
                                You’ll receive a notification via email and your seller dashboard when a new order is
                                placed. Go to the “Orders” section to view full order details, including product, quantity,
                                shipping method, and buyer info.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading48">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse48" aria-expanded="false" aria-controls="collapse48">
                                    2. How should I process an order ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse48" class="collapse" aria-labelledby="heading48" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Once you receive an order:<br>
                                • Verify stock availability<br>
                                • Check prescription validity (for Rx products)<br>
                                • Pack the order securely<br>
                                • Mark it as “Ready to Ship”<br><br>
                                Then, arrange pickup or delivery with the designated courier partner.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading49">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse49" aria-expanded="false" aria-controls="collapse49">
                                    3. How do I handle prescription validation ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse49" class="collapse" aria-labelledby="heading49" data-parent="#SellerAccordion">
                            <div class="card-body">
                                For Rx items, review the uploaded prescription to ensure:<br>
                                • It's issued by a registered medical practitioner<br>
                                • It includes patient name, date, and doctor’s signature<br><br>
                                If unclear, you may contact the buyer or flag it for ValueCeylon's pharmacist team for
                                verification.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading50">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse50" aria-expanded="false" aria-controls="collapse50">
                                    4. How can I update the shipping status ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse50" class="collapse" aria-labelledby="heading50" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Once the package is handed over to the courier, update the order status to “Shipped” and
                                enter the tracking number. The buyer will be automatically notified via email/SMS.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading51">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
                                    5. Can I cancel an order as a seller ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse51" class="collapse" aria-labelledby="heading51" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes, under certain circumstances (e.g., product out of stock, invalid prescription, or
                                payment issues). Use the “Cancel Order” option and clearly state the reason. The customer
                                will be informed.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading52">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse52" aria-expanded="false" aria-controls="collapse52">
                                    6. How do I manage bulk or B2B orders ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse52" class="collapse" aria-labelledby="heading52" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Large-volume orders will be flagged as “B2B Order” in your dashboard. Coordinate with the
                                buyer for logistics and delivery arrangements. You may also offer custom quotes.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading53">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse53" aria-expanded="false" aria-controls="collapse53">
                                    7. What happens if I delay shipping an order ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse53" class="collapse" aria-labelledby="heading53" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Delays can affect your seller rating and lead to penalties or order cancellations. Always
                                ship orders within the committed time frame to ensure buyer satisfaction.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading54">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse54" aria-expanded="false" aria-controls="collapse54">
                                    8. Can buyers modify or cancel orders after placing them ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse54" class="collapse" aria-labelledby="heading54" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Buyers can request modifications within a short time frame before shipping. As a seller,
                                you’ll receive a notification and must approve or reject the request.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading55">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse55" aria-expanded="false" aria-controls="collapse55">
                                    9. How do I handle returns or refund requests ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse55" class="collapse" aria-labelledby="heading55" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Returns are managed through the “Returns & Refunds” section. If a return is approved (due to
                                wrong item, expired product, or quality issue), follow the instructions to coordinate
                                reverse logistics and issue a refund.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading56">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse56" aria-expanded="false" aria-controls="collapse56">
                                    10. Can I print invoices or shipping labels ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse56" class="collapse" aria-labelledby="heading56" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. Under each order, there are options to print tax invoices, order summaries, and
                                shipping labels directly from your seller dashboard.
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4>Payments and Finances</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading57">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
                                    1. How do I get paid for the orders I receive ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse57" class="collapse" aria-labelledby="heading57" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Payments for completed and delivered orders are transferred to your registered bank account
                                according to the payment cycle (e.g., weekly or bi-weekly). You can view payment summaries
                                in your seller dashboard.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading58">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse58" aria-expanded="false" aria-controls="collapse58">
                                    2. What is the commission rate on sales ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse58" class="collapse" aria-labelledby="heading58" data-parent="#SellerAccordion">
                            <div class="card-body">
                                ValueCeylonHealth.com charges a commission fee based on product category. The rate is
                                clearly communicated during seller onboarding and shown in each order’s invoice breakdown.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading59">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse59" aria-expanded="false" aria-controls="collapse59">
                                    3. Are there any hidden fees or charges ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse59" class="collapse" aria-labelledby="heading59" data-parent="#SellerAccordion">
                            <div class="card-body">
                                No hidden fees. All applicable commissions, service charges, or transaction fees are
                                transparently displayed in your Order and Finance section.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading60">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse60" aria-expanded="false" aria-controls="collapse60">
                                    4. Where can I view my earnings and transaction history ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse60" class="collapse" aria-labelledby="heading60" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Go to your Seller Dashboard > Finance > Transaction History to view:<br>
                                • Total earnings<br>
                                • Pending settlements<br>
                                • Commission deductions<br>
                                • Invoice downloads
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading61">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse61" aria-expanded="false" aria-controls="collapse61">
                                    5. When will I receive my payment after delivery ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse61" class="collapse" aria-labelledby="heading61" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Once an order is marked as “Delivered” and the return window has passed (if applicable), the
                                payment is processed within the next payment cycle. Exact timing depends on your seller
                                agreement (e.g., 7–10 business days).
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading62">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse62" aria-expanded="false" aria-controls="collapse62">
                                    6. How are refunds handled financially ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse62" class="collapse" aria-labelledby="heading62" data-parent="#SellerAccordion">
                            <div class="card-body">
                                If a buyer refund is approved:<br>
                                • The refunded amount will be deducted from your upcoming settlement<br>
                                • You will receive a notification with breakdown details<br>
                                • If it’s due to seller fault (e.g., wrong item), additional penalties may apply
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading63">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse63" aria-expanded="false" aria-controls="collapse63">
                                    7. Can I request an early payment or advance ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse63" class="collapse" aria-labelledby="heading63" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Currently, early payment requests are only available for top-rated sellers with consistent
                                order volumes. Contact our Seller Support Team to check eligibility.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading64">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse64" aria-expanded="false" aria-controls="collapse64">
                                    8. How do I update my bank account details ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse64" class="collapse" aria-labelledby="heading64" data-parent="#SellerAccordion">
                            <div class="card-body">
                                In your seller dashboard, go to Account Settings > Bank Info. Changes will require
                                verification and may take 24–48 hours to take effect.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading65">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse65" aria-expanded="false" aria-controls="collapse65">
                                    9. Will I receive tax invoices or commission statements ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse65" class="collapse" aria-labelledby="heading65" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. You can download commission invoices, GST/VAT reports, and monthly summaries from your
                                finance dashboard for accounting and tax filing.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading66">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse66" aria-expanded="false" aria-controls="collapse66">
                                    10. What should I do if there is a payment discrepancy ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse66" class="collapse" aria-labelledby="heading66" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Contact Seller Finance Support with the relevant order ID and transaction reference. Our
                                finance team will investigate and resolve the issue promptly.
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4>Marketing and Promotion</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading67">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse67" aria-expanded="false" aria-controls="collapse67">
                                    1. Can I advertise my products on ValueCeylonHealth.com ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse67" class="collapse" aria-labelledby="heading67" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes! We offer various advertising and promotional tools for sellers to increase product
                                visibility and boost sales, including featured listings, homepage banners, sponsored
                                products, and targeted email campaigns.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading68">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse68" aria-expanded="false" aria-controls="collapse68">
                                    2. What types of promotions are available for sellers ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse68" class="collapse" aria-labelledby="heading68" data-parent="#SellerAccordion">
                            <div class="card-body">
                                You can choose from:<br>
                                • Sponsored product ads (appear on top of search results)<br>
                                • Category page banners<br>
                                • Homepage sliders<br>
                                • Email newsletter promotions<br>
                                • Time-bound deals (e.g., Health Week, Flash Sales)<br>
                                • Bulk order/B2B buyer highlights
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading69">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse69" aria-expanded="false" aria-controls="collapse69">
                                    3. How do I run an ad campaign or promotion ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse69" class="collapse" aria-labelledby="heading69" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Log in to your seller dashboard, go to Marketing > Create Campaign, choose your promotion
                                type, set your budget, and submit your request. Our marketing team will review and activate
                                it.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading70">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse70" aria-expanded="false" aria-controls="collapse70">
                                    4. Is there a fee for advertising ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse70" class="collapse" aria-labelledby="heading70" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. Advertising options come with flexible pricing plans based on placement, duration, and
                                campaign type. You’ll see a full cost breakdown before confirming your ad.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading71">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse71" aria-expanded="false" aria-controls="collapse71">
                                    5. Can I run product-specific discounts or coupons ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse71" class="collapse" aria-labelledby="heading71" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Absolutely. You can create custom discount codes, buy-one-get-one offers, or limited-time
                                price reductions for specific products directly from your dashboard.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading72">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse72" aria-expanded="false" aria-controls="collapse72">
                                    6. How do I track the performance of my ads ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse72" class="collapse" aria-labelledby="heading72" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Your seller dashboard includes a Marketing Analytics section where you can monitor:<br>
                                • Ad impressions<br>
                                • Click-through rate (CTR)<br>
                                • Conversion rate<br>
                                • Sales from campaigns<br>
                                • ROI (Return on Investment)
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading73">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse73" aria-expanded="false" aria-controls="collapse73">
                                    7. Can I promote my store (not just products) ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse73" class="collapse" aria-labelledby="heading73" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. You can boost your entire store profile with Store Spotlight Ads, available on the
                                homepage or category banners. These highlight your store to potential buyers.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading74">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse74" aria-expanded="false" aria-controls="collapse74">
                                    8. Is there any help available for creating ad content ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse74" class="collapse" aria-labelledby="heading74" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. Our team offers basic creative support, including banner design and ad copy assistance,
                                especially for premium ad packages. You may also use your own visuals if they meet platform
                                guidelines.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading75">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse75" aria-expanded="false" aria-controls="collapse75">
                                    9. Are there seasonal or festive campaigns I can join ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse75" class="collapse" aria-labelledby="heading75" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. We organize platform-wide sales campaigns during health awareness weeks, national
                                festivals, and global observances (e.g., World Health Day). You can opt in via your seller
                                portal.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading76">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse76" aria-expanded="false" aria-controls="collapse76">
                                    10. Who can I contact for customized marketing support ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse76" class="collapse" aria-labelledby="heading76" data-parent="#SellerAccordion">
                            <div class="card-body">
                                You can reach out to our Seller Marketing Team through your dashboard or by emailing <a
                                    href="mailto:marketing@valueceylonhealth.com">marketing@valueceylonhealth.com</a> for
                                personalized strategies or bundled promo packages.
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4>Customer Communication</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading77">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse77" aria-expanded="false" aria-controls="collapse77">
                                    1. How can I communicate with my customers ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse77" class="collapse" aria-labelledby="heading77" data-parent="#SellerAccordion">
                            <div class="card-body">
                                You can message customers directly through the in-platform messaging system available in
                                your Seller Dashboard > Orders section. This ensures secure and documented communication.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading78">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse78" aria-expanded="false" aria-controls="collapse78">
                                    2. What kind of communication is allowed between sellers and customers ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse78" class="collapse" aria-labelledby="heading78" data-parent="#SellerAccordion">
                            <div class="card-body">
                                You may communicate regarding:<br>
                                • Prescription verification<br>
                                • Order status updates<br>
                                • Product clarifications (e.g., ingredients, usage, availability)<br>
                                • Shipping and delivery timelines<br>
                                • Return or refund queries<br><br>
                                Avoid sharing personal contact details or redirecting buyers outside the platform.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading79">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse79" aria-expanded="false" aria-controls="collapse79">
                                    3. Can I call the customer directly ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse79" class="collapse" aria-labelledby="heading79" data-parent="#SellerAccordion">
                            <div class="card-body">
                                No. For security and privacy reasons, direct calls are not allowed. All communication must
                                happen through the ValueCeylonHealth.com messaging system to ensure transparency and buyer
                                protection.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading80">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse80" aria-expanded="false" aria-controls="collapse80">
                                    4. How should I respond to prescription upload queries ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse80" class="collapse" aria-labelledby="heading80" data-parent="#SellerAccordion">
                            <div class="card-body">
                                If a buyer’s prescription is missing or unclear, kindly request them to re-upload a valid
                                and legible prescription. Be professional, polite, and maintain patient confidentiality at
                                all times.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading81">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse81" aria-expanded="false" aria-controls="collapse81">
                                    5. What is the expected response time to buyer messages ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse81" class="collapse" aria-labelledby="heading81" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Sellers are expected to respond to buyer inquiries within 24 hours. Fast and clear
                                communication improves your seller rating and increases buyer trust.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading82">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse82" aria-expanded="false" aria-controls="collapse82">
                                    6. Can I send promotional messages or offers directly to buyers ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse82" class="collapse" aria-labelledby="heading82" data-parent="#SellerAccordion">
                            <div class="card-body">
                                No, unsolicited promotions are not allowed via direct messaging. You may promote your offers
                                through approved marketing tools such as sponsored products or banner ads.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading83">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse83" aria-expanded="false" aria-controls="collapse83">
                                    7. How do I handle customer complaints or disputes ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse83" class="collapse" aria-labelledby="heading83" data-parent="#SellerAccordion">
                            <div class="card-body">
                                If a buyer raises a complaint:<br>
                                • Respond promptly and professionally<br>
                                • Try to resolve the issue amicably<br>
                                • If unresolved, escalate the matter to ValueCeylon’s support team via your
                                dashboard<br><br>
                                All dispute logs are reviewed by our support team fairly.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading84">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse84" aria-expanded="false" aria-controls="collapse84">
                                    8. How can I manage abusive or fraudulent customer communication ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse84" class="collapse" aria-labelledby="heading84" data-parent="#SellerAccordion">
                            <div class="card-body">
                                If a buyer sends abusive or inappropriate messages, report the interaction using the
                                “Report” button in the message thread. Our moderation team will take appropriate action.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading85">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse85" aria-expanded="false" aria-controls="collapse85">
                                    9. Will my messages be monitored ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse85" class="collapse" aria-labelledby="heading85" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. All messages are monitored for quality and safety by the ValueCeylon support team to
                                ensure compliance with platform policies and healthcare regulations.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading86">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse86" aria-expanded="false" aria-controls="collapse86">
                                    10. Can I get support with difficult customer situations ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse86" class="collapse" aria-labelledby="heading86" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Absolutely. If you’re facing a challenging communication issue, contact our Seller Support
                                Team for guidance on how to proceed, especially with Rx concerns or refund cases.
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4>Platform Features</h4>
                    <br>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading87">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse87" aria-expanded="false" aria-controls="collapse87">
                                    1. What is ValueCeylonHealth.com’s multi-vendor feature ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse87" class="collapse" aria-labelledby="heading87" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Our platform allows multiple verified pharmacies, healthcare sellers, doctors, and
                                manufacturers to register and sell products/services. Each vendor manages their own store,
                                orders, and inventory independently under a centralized, trusted platform.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading88">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse88" aria-expanded="false" aria-controls="collapse88">
                                    2. Does the platform support prescription-based orders ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse88" class="collapse" aria-labelledby="heading88" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. Buyers can upload valid prescriptions when purchasing Rx medicines. The system enables
                                secure prescription management, and sellers can validate or request clarification through
                                the dashboard.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading89">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse89" aria-expanded="false" aria-controls="collapse89">
                                    3. Can I manage my entire store through a seller dashboard ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse89" class="collapse" aria-labelledby="heading89" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. The Seller Dashboard offers complete control over:<br>
                                • Product listings<br>
                                • Order management<br>
                                • Customer messaging<br>
                                • Marketing tools<br>
                                • Payment tracking<br>
                                • Reports and analytics
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading90">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse90" aria-expanded="false" aria-controls="collapse90">
                                    4. What analytics tools are available to sellers ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse90" class="collapse" aria-labelledby="heading90" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Sellers can access sales reports, best-performing products, traffic insights, and campaign
                                performance to make data-driven decisions and improve store performance.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading91">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse91" aria-expanded="false" aria-controls="collapse91">
                                    5. Is the platform mobile-friendly ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse91" class="collapse" aria-labelledby="heading91" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. ValueCeylonHealth.com is fully mobile-optimized, allowing both buyers and sellers to
                                access features and manage accounts from smartphones or tablets.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading92">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse92" aria-expanded="false" aria-controls="collapse92">
                                    6. What security features are built into the platform ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse92" class="collapse" aria-labelledby="heading92" data-parent="#SellerAccordion">
                            <div class="card-body">
                                We use SSL encryption, secure login protocols, and data privacy standards to protect all
                                user data, transactions, and prescription information.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading93">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse93" aria-expanded="false" aria-controls="collapse93">
                                    7. Can I offer multiple payment and shipping options ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse93" class="collapse" aria-labelledby="heading93" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. The platform supports multiple payment methods (credit/debit cards, bank transfers,
                                cash-on-delivery) and offers flexible shipping integrations for sellers to choose preferred
                                logistics.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading94">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse94" aria-expanded="false" aria-controls="collapse94">
                                    8. Are there special features for healthcare professionals ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse94" class="collapse" aria-labelledby="heading94" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. ValueCeylonHealth.com offers:<br>
                                • Doctor’s Counter for consultations<br>
                                • e-Prescription tools<br>
                                • B2B modules for manufacturers, distributors, and hospitals<br>
                                • Verified professional profiles
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading95">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse95" aria-expanded="false" aria-controls="collapse95">
                                    9. How are returns and refunds handled on the platform ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse95" class="collapse" aria-labelledby="heading95" data-parent="#SellerAccordion">
                            <div class="card-body">
                                The platform includes a Return & Refund Management system, where sellers can respond to
                                buyer return requests, approve or reject claims, and handle refund settlements.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading96">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse96" aria-expanded="false" aria-controls="collapse96">
                                    10. Is there technical support if I face issues with the platform ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse96" class="collapse" aria-labelledby="heading96" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Yes. Our technical support team is available to assist with login issues, dashboard errors,
                                listing problems, or any feature malfunction. You can raise a ticket through the Support
                                Center.
                            </div>
                        </div>
                    </div>

                    <div class="card custom-accordion">
                        <div class="card-header" id="heading97">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse97" aria-expanded="false" aria-controls="collapse97">
                                    11. How can I get more information about selling on ValueCeylon ? &nbsp;&nbsp;
                                </button>
                            </h2>
                        </div>
                        <div id="collapse97" class="collapse" aria-labelledby="heading97" data-parent="#SellerAccordion">
                            <div class="card-body">
                                Register as a seller to access our Seller Knowledge Base with step-by-step guides, FAQs, and
                                selling tips.
                            </div>
                        </div>
                    </div>

                    {{-- End Accordian --}}
                </div>
            </div>
        </div>
    </section>

@endsection