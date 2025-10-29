<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Prescription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Shop;

class PrescriptionController extends Controller
{
    public function index()
    {
        $shops = Shop::where('verification_status', 1)
             ->whereHas('user') // Ensure the shop has a user
             ->get();
        return view('frontend.upload_prescription', compact('shops'));
    }

    public function save(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'patient_name' => 'required|string',
            'patient_age' => 'required|integer|min:0|max:130',
            'contact_number' => 'required|string',
            'duration' => 'required|string',
            'delivery_method' => 'required|string',
            'address' => 'required|string',
            'allergies' => 'nullable|string',
            'gender' => 'required|string',
            'substitutes' => 'required|string',
            'seller_id' => 'nullable',
            'prescription' => '',
        ], [
            'patient_age.max' => 'Patient age cannot be greater than 130.',
            'patient_age.min' => 'Patient age must be a positive number.',
        ]);

        $prescription = Prescription::create([
            'patient_name' => $data['patient_name'],
            'patient_age' => $data['patient_age'],
            'contact_number' => $data['contact_number'],
            'gender' => $data['gender'],
            'address' => $data['address'],
            'allergies' => $data['allergies'],
            'seller_id' => $data['seller_id'],
            'duration' => $data['duration'],
            'delivery_method' => $data['delivery_method'],
            'substitutes' => $data['substitutes'],
            'user_id' => Auth::id(),
            'prescription' => '', // Temporary, will update after upload
        ]);

        // Process and move image
        if ($request->hasFile('prescription')) {
            $image = $request->file('prescription');
            $originalName = $image->getClientOriginalName();
            $newName = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $folderPath = "uploads/prescriptions/" . $prescription->id;

            // Create folder and move image
            $image->move(public_path($folderPath), $newName);

            // Update the record with the correct path
            $prescription->update([
                'prescription' => $folderPath . '/' . $newName,
            ]);
        }

        flash(translate('Your prescription was submitted'))->success();
        return redirect()->back();
    }
}


