@extends('frontend.layouts.app')

@section('content')
    <section class="create-feedback-section my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center">Create Feedback</h2>
                    <p>Please use the form below to send us your comments and feedback. We appreciate you taking the time to
                        provide us with your views so that we can best meet the needs of users.</p>

                    <form action="{{ route('feedback.save') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">
                                <h5>Email:</h5>
                            </label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">
                                <h5>Description:</h5>
                            </label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <label for="">
                            <h5>Please tell us what is your feedback related to:</h5>
                        </label>

                        <div class="form-group">
                            <label for=""> <input type="radio" name="category" value="Buylead/Enquiry related issue"
                                > Buylead/Enquiry related issue</label>
                        </div>
                        <div class="form-group">
                            <label for=""> <input type="radio" name="category" value="Seller/Buyer related issue"
                                > Seller/Buyer related issue</label>
                        </div>

                        <div class="form-group">
                            <label for=""> <input type="radio" name="category" value="Product related issue"
                                > Product related issue</label>
                        </div>
                        <div class="form-group">
                            <label for=""> <input type="radio" name="category" value="Profile/Account related issue"
                                > Profile/Account related issue</label>
                        </div>
                        <div class="form-group">
                            <label for=""> <input type="radio" name="category" value="Others"
                                > Others</label>
                        </div>


                        <div class="form-group">
                            <label for="">
                                <h5>Phone:</h5>
                            </label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="form-group">
                           <button type="submit" class="btn btn-primary">SUBMIT FEEDBACK</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
