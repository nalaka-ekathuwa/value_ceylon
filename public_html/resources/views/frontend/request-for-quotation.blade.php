@extends('frontend.layouts.app')

@section('content')
    <section class="request-for-quotation my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sourcing">
                        <h1 class="title">Value Ceylon Sourcing… <span>We will find it for you</span></h1>

                        <p>We are here to help you to find the Best Quality Sri Lankan Products …</p>

                        <ul>
                            <li><span>Step 01</span> Tell us what you need …</li>
                            <li><span>Step 02</span> We will give you the perfect fit suppliers.. </li>
                            <li><span>Step 03</span> Talk to each other..</li>
                            <li><span>Step 04</span> Complete the transaction..</li>
                        </ul>

                    </div>



                </div>
            </div>

            <div class="row mt-4 justify-content-center">
                <div class="col-md-6">
                    <div class="get-quotation">
                        <form action="{{ route('customer.rfq.save') }}" method="POST">
                            @csrf
                            <h3>Get quotation now</h3>

                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input type="text" name="product_name" class="form-control" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Quantity</label>
                                    <input type="text" name="quantity" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Package type</label>
                                    <select name="package_type_id" class="form-control" id="" required>
                                        @forelse ($package_types as $package_type )
                                        <option value="{{ $package_type->id }}">{{$package_type->name }}</option>
                                        @empty
                                            <option value=""></option>
                                        @endforelse
                                        
                                    </select>
                                </div>

                            </div>


                            <div class="form-group mt-3 text-right">
                                @if (isCustomer())
                                <button type="submit" class="btn btn-primary" > Send Request </button>
                                @else
                                    <a href="{{ route('user.login')}}">Login as a customer to post a RFQ</a>
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
