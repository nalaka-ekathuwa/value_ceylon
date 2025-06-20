<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rfq;
use App\Models\Category;
use App\Models\RFQImage;
use App\Models\RFQStatus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\RfqPackageType;
use App\Http\Controllers\Controller;


class RFQController extends Controller
{
    

    public function index(){

        $rfqs = Rfq::with(['package_type','category', 'quoteStatus'])->orderBy('id', 'desc')->paginate(20);

        return view('backend.rfq.index',[
            'rfqs' => $rfqs
        ]);
    }

    public function show(Rfq $rfq){


        $rfq = Rfq::with(['images','category','package_type'])->where('id', $rfq->id)->first();

        $package_types = RfqPackageType::all();
        $categories = Category::all();

        return view('backend.rfq.show',[
            'package_types' => $package_types,
            'categories' => $categories,
            'rfq' => $rfq
        ]);
        
    }


    public function edit(Rfq $rfq){

        $package_types = RfqPackageType::all();
        $categories = Category::all();
        $rfq_statuses = RFQStatus::all();

        return view('backend.rfq.edit', [
            'package_types' => $package_types,
            'categories' => $categories,
            'rfq' => $rfq,
            'rfq_statuses' =>$rfq_statuses
        ]);

    }

    public function update(Rfq $rfq, Request $request){

        $data = $request->validate([
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
            'status' => 'required|integer',
        ]);

        $updated = $rfq->update($data);

        $this->storeImages($request, $rfq);

        flash(translate("RFQ updated successfully"))->success();
        return redirect()->route('admin.rfq.index');
    }



    public function delete(Rfq $rfq){

        $rfq = Rfq::with(['images','category','package_type'])->where('id', $rfq->id)->first();

        return view('backend.rfq.delete',[
            'rfq' => $rfq
        ]);
        
    }

    public function destroy(Rfq $rfq){

        $rfq->delete();

        flash(translate("Rfq deleted successfully"))->success();
        return redirect()->route('admin.rfq.index');
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

}
