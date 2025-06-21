<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Prescription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PrescriptionController extends Controller
{
    //
    public function index()
    {
        return view('frontend.upload_prescription');
    }

    public function save(Request $request)
    {

        // dd($request);
        $data = $request->validate([
            'cus_name' => 'required|string',
            'email' => 'required|email',
            'patient_name' => 'required|string',
            'patient_age' => 'required|integer|min:0|max:130',
            'contact_number' => 'required|string',
            'duration' => 'required|string',
            'delivery_method' => 'required|string',
            'address' => 'required|string',
            // 'user_id' => 'required|exists:users,id',
            // 'seller_id' => 'nullable|exists:users,id',
            'prescription' => '',
        ], [
            'patient_age.max' => 'Patient age cannot be greater than 130.',
            'patient_age.min' => 'Patient age must be a positive number.',
        ]);

        // $data['user_id'] = Auth::id();

        // if ($request->hasFile('prescription')) {
        //     $data['prescription'] = $request->file('prescription')->store('prescriptions', 'public');
        // }
        // Create the prescription without the image first

        $prescription = Prescription::create([
            'cus_name' => $data['cus_name'],
            'email' => $data['email'],
            'patient_name' => $data['patient_name'],
            'patient_age' => $data['patient_age'],
            'contact_number' => $data['contact_number'],
            'duration' => $data['duration'],
            'delivery_method' => $data['delivery_method'],
            'address' => $data['address'],
            'user_id' => Auth::id(),
            // 'seller_id' => $data['seller_id'] ?? null,
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

        // Prescription::create($data);

        flash(translate('Your prescription was submitted'))->success();
        return redirect()->back();

    }
}


