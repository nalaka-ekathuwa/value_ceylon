@extends('frontend.layouts.app')

@section('content')
    <section class="request-for-quotation my-5">
        <div class="container">
            <div class="row">

                <!-- <div class="col-md-12 mb-3">
                                            <img class="img-fluid" src="{{ static_asset('assets/img/banner/sourcing-banner.jpg') }}">
                                        </div> -->

                <div class="row mt-4 justify-content-center">
                    <div class="col-md-4">
                        <div class="container my-4" id="upload-prescription-guide">
                            <h2 class="mb-3">Guide to Upload Prescription</h2>
                            <ul class="list-group mb-4">
                                <li class="list-group-item">You can upload up to 5 photos.</li>
                                <li class="list-group-item">Please upload a full, clear photo of your prescription. Partial
                                    prescription images will not be processed. Don’t crop out any part of the image.</li>
                                <li class="list-group-item">If you have specific instructions or specific/preferable brands,
                                    please mention in the ‘Notes’ section.</li>
                                <li class="list-group-item">Please double check your mobile phone number before submitting
                                    the prescription.</li>
                                <li class="list-group-item">Your prescription must be a valid prescription from a registered
                                    medical practitioner.</li>
                                <li class="list-group-item">Upload only recent prescription.</li>
                            </ul>

                            <h4 class="mb-3">බෙහෙත් වට්ටෝරුව උඩුගත කිරීමට මාර්ගෝපදේශය</h4>
                            <ul class="list-group">
                                <li class="list-group-item">ඔබට ඔබට ඇතුළත් කළ හැකි උපරිම ඖෂධ වට්ටෝරු ගණන පහකි</li>
                                <li class="list-group-item">කරුණාකර ඔබේ බෙහෙත් වට්ටෝරුවේ සම්පූර්ණ පැහැදිලි ඡායාරූපයක් ඇතුළත්
                                    කරන්න.</li>
                                <li class="list-group-item">විශේෂිත වෙළඳ නාම තිබේ නම් කරුණාකර ‘සටහන්’ (Notes) කොටසෙහි
                                    පැහැදිලිව සඳහන් කරන්න.</li>
                                <li class="list-group-item">කරුණාකර බෙහෙත් වට්ටෝරුව ඉදිරිපත් කිරීමට පෙර ඔබගේ ජංගම දුරකථන
                                    අංකය දෙවරක් පරීක්ෂා කරන්න</li>
                                <li class="list-group-item">ඔබේ බෙහෙත් වට්ටෝරුව ලියාපදිංචි වෛද්‍යවරයෙකුගේ වලංගු බෙහෙත්
                                    වට්ටෝරුවක් විය යුතුය.</li>
                                <li class="list-group-item">මෑත කාලීන බෙහෙත් වට්ටෝරු පමණක් Upload කරන්න</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="get-quotation">

                            <!-- Error Meassages -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('customer.prescription.save') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <h3>Submit Your Prescription </h3>

                                @if (!isCustomer())
                                    <h5 class="mt-4 p-2 px-4 bg-danger text-white ">Please login as a customer to Submit
                                        prescription
                                    </h5>
                                @endif

                                <h5>Customer Information</h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Customer Name</label>
                                            <input type="text" name="cus_name" class="form-control"
                                                value="{{ old('cus_name') }}" required>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email address </label>
                                            <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="mt-3">Patient Information | රෝගියාගේ තොරතුරු</h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Patient Name | රෝගියාගේ නම  </label>
                                            <input type="text" name="patient_name" class="form-control"
                                                value="{{ old('patient_name') }}" required>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Patient Age | රෝගියාගේ වයස </label>
                                            <input type="number" name="patient_age" class="form-control" max="130" min="0"
                                                value="{{ old('patient_age') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Contact Number | දුරකථන අංකය</label>
                                            <input type="text" name="contact_number" class="form-control"
                                                value="{{ old('contact_number') }}" required>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Gender | ස්ත්‍රී පුරුෂභාවය  </label> <br><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Male | පිරිමි</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Female | ගැහැණු</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Delivery Address | ලිපිනය :  </label>
                                            <input type="text" name="address" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="mt-3">Prescription Details | බෙහෙත් වට්ටෝරු විස්තර</h5>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="duration">Duration | ඖෂධ අවශ්‍ය කාල සීමාව </label>
                                            <select name="duration" class="form-control" id="" required>
                                                <option value="1">one week</option>
                                                <option value="2">two weeks</option>
                                                <option value="3">three weeks</option>
                                                <option value="4">one month</option>
                                                <option value="5">two months</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="">Delivery Method </label>
                                            <select name="delivery_method" class="form-control" id="" required>
                                                <option value="1">Standard delivery (1–3 business days)- Rs. 500.00
                                                </option>
                                                <option value="2">Express delivery (within 24 hours in selected areas)-
                                                    9.00 am to 3.00 pm on Weekdays: Rs. 550.00</option>
                                                <option value="3">Pickup from seller location (if offered)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Upload Prescription | ඔබේ වෛද්‍යවරයාගේ බෙහෙත් වට්ටෝරුව අමුණන්න  </label>
                                        <p class="text-muted"><small>Please mention about your product requirements and
                                                product features to
                                                make
                                                sure Fast and efficient responses from suppliers. You can include Raw
                                                material,
                                                price expectations, Size/Dimensions ,Brand Names, Standards ,Required
                                                Company/Product Certification(s) and packaging
                                                requirements.</small></p>
                                        <input name="prescription" id="" type="file" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                        <label class="text-muted">Do you allow equivalent (generic or brand) substitutes
                                            if your prescribed medicine is unavailable?" <br> 
                                            ඔබේ නිර්දේශිත ඖෂධය නොමැති නම්, ඔබ සමාන (සාමාන්‍ය හෝ වෙළඳ නාම) ආදේශක වලට ඉඩ දෙනවාද?</label>
                                        <br>

                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="substitutes" name="substitutes"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="substitutes">Yes | ඔව් </label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="substitutes2" name="substitutes"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="substitutes2">No | නැත</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <label for="">Patient Allergies if have | ඔබට යම්කිසි ඖෂධ අසාත්මිකතාවයක් ඇත්නම් සඳහන් කරන්න</label>
                                        <textarea name="allergies" id="" cols="30" rows="3" class="form-control"></textarea>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <p><small>By submitting the sourcing request form, you will also gain the
                                                membership
                                                for
                                                Value Ceylon Online Sourcing. A registration confirmation will be sent
                                                to
                                                you
                                                later to access all the benefits and stay up to date with the latest
                                                offerings.
                                                Please see our Privacy Policy and Cookie Policy for information
                                                regarding
                                                the
                                                processing of your data. By clicking "Submit" you agree that you have
                                                read
                                                our
                                                Privacy and Cookie Policies and accepted our Terms and conditions.
                                            </small></p>
                                    </div>

                                </div>

                                <div class="form-group mt-3 text-right">
                                    @if (isCustomer())
                                        <button type="submit" class="btn btn-primary"> Send Prescription </button>
                                    @else
                                        <a href="{{ route('user.login') }}">Login as a customer to submit prescription</a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('script')
@endsection