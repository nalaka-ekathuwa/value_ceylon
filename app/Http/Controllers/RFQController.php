<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rfq;
use App\Models\RFQImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\RfqPackageType;
use App\Models\RfqReply;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RFQController extends Controller
{

    public function index()
    {
        $package_types = RfqPackageType::all();
        $categories = Category::where('level', "0")->get();

        return view('frontend.value-ceylon-sourcing', [
            'package_types' => $package_types,
            'categories' => $categories
        ]);
    }


    public function myRFQs()
    {

        $this_user_id = Auth::user()->id;
        $rfqs =  Rfq::where('user_id', $this_user_id)
                    ->with(['user', 'package_type','quoteStatus'])
                    ->orderBy('id', 'DESC')
                    ->paginate(15);

        return view("frontend.user.rfq.my-rfqs", [
            'rfqs' => $rfqs
        ]);
    }


    public function save(Request $request)
    {
        $validated_data = $request->validate([
            'first_name' => 'required|string|max:200',
            'last_name' => 'required|string|max:200',
            'email' => 'required|string|max:200',
            'designation' => 'required|string|max:200',
            'country' => 'required|string|max:200',
            'city' => 'required|string|max:200',
            'contact_number' => 'required|string|max:200',
            'company_name' => 'required|string|max:200',
            'company_email' => 'required|string|max:200',
            'company_address' => 'required|string|max:5000',
            'product_name' => 'required|string|max:200',
            'product_category' => 'required|integer',
            'product_customization' => 'required|string|max:20000',
            'quantity' => 'required|numeric',
            'package_type_id' => 'required|integer',
            'delivery_lead_time' => 'required|string|max:200',
            'delivery_destination' => 'required|string|max:200',
            'delivery_address' => 'required|string|max:5000',
            'delivery_country' => 'required|string|max:200',
            'delivery_city' => 'required|string|max:200',
            'delivery_zipcode' => 'required|string|max:200',
            'payment_terms' => 'required|string|max:20000',
            'annual_sourcing_amount' => 'required|string|max:200',
            'rfq_submission_date' => 'required|date',
            'rfq_deadline_date' => 'required|date',
        ]);

        $validated_data['user_id'] = Auth::user()->id;

        $rfq =  Rfq::create($validated_data);

    
        $this->storeImages($request, $rfq);

        flash(translate('Your request for quotation is sent'))->success();
        return redirect()->route('customer.request-for-quotation');
    }


    private function storeImages(Request $request, Rfq $rfq)
    {
        $images = $request->file('product_images'); // Assuming 'images' is the input name for multiple files

        if ($images && is_array($images)) {
            $rfqId = $rfq->id;
            $storagePath = "rfq_images/$rfqId"; // Path relative to the public folder

    
            foreach ($images as $image) {
                // Generate a unique filename
                $originalName = $image->getClientOriginalName();
                $newName = Str::random(40) . '.' . $image->getClientOriginalExtension();
    
                // Move the file to the public directory
                $image->move(public_path($storagePath), $newName);
    
                // Create a new RFQImage instance and save it
                $rfqImage = new RFQImage([
                    'rfq_id' => $rfqId,
                    'image' => $newName, // Save relative path
                    'name' => $originalName, // Save original filename if needed
                ]);
    
                $rfqImage->save();
            }
        }
    }


    public function show(Rfq $rfq){

        $this_user_id = Auth::user()->id;

        $rfq = Rfq::with(['images','category','package_type', 'quoteStatus'])
                ->where('user_id', $this_user_id)
                ->where('id', $rfq->id)
                ->first();

        if(is_null($rfq)){
            return redirect('/my-rfqs');
        }

        $package_types = RfqPackageType::all();
        $categories = Category::where('level', "0")->get();

        $replies = RfqReply::where('rfq_id', $rfq->id)
                            ->with(['shop'])
                            ->orderBy('id','desc')
                            ->get();


        // dd($rfq);

        return view('frontend.user.rfq.show',[
            'package_types' => $package_types,
            'categories' => $categories,
            'rfq' => $rfq,
            'replies'=> $replies
        ]);
        
    }


    public function edit(Rfq $rfq)
    {

        // if no item send user back
        if (is_null($rfq)) {
            return redirect()->back();
        }

        $package_types = RfqPackageType::all();
        $categories = Category::all();

        return view("frontend.user.rfq.edit", [
            'rfq' => $rfq,
            'package_types' => $package_types,
            'categories' => $categories,
        ]);
    }

    public function update(Rfq $rfq, Request $request)
    {
        
        // if no item send user back
        if (is_null($rfq)) {
            return redirect()->back();
        }

        // get this user
        $this_user_id = Auth::user()->id;

        // limit editing to created user
        if($rfq->user_id != $this_user_id){
            return redirect()->back();
        }


        $validated_data = $request->validate([
            'first_name' => 'required|string|max:200',
            'last_name' => 'required|string|max:200',
            'email' => 'required|string|max:200',
            'designation' => 'required|string|max:200',
            'country' => 'required|string|max:200',
            'city' => 'required|string|max:200',
            'contact_number' => 'required|string|max:200',
            'company_name' => 'required|string|max:200',
            'company_email' => 'required|string|max:200',
            'company_address' => 'required|string|max:5000',
            'product_name' => 'required|string|max:200',
            'product_category' => 'required|integer',
            'product_customization' => 'required|string|max:20000',
            'quantity' => 'required|numeric',
            'package_type_id' => 'required|integer',
            'delivery_lead_time' => 'required|string|max:200',
            'delivery_destination' => 'required|string|max:200',
            'delivery_address' => 'required|string|max:5000',
            'delivery_country' => 'required|string|max:200',
            'delivery_city' => 'required|string|max:200',
            'delivery_zipcode' => 'required|string|max:200',
            'payment_terms' => 'required|string|max:20000',
            'annual_sourcing_amount' => 'required|string|max:200',
            'rfq_deadline_date' => 'required|date',
        ]);

        $rfq->update($validated_data);

        $this->storeImages($request, $rfq);

        flash(translate('Your request for quotation is updated'))->success();
        return redirect()->route('customer.my-rfqs');
    }
}
