<?php

namespace App\Http\Controllers\Seller;

use App\Models\Shop;
use App\Models\User;
use App\Models\Country;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Language;
use App\Models\ShopFile;
use Illuminate\Http\Request;
use App\Models\SellerPackage;
use App\Models\BusinessSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Notifications\EmailVerificationNotification;

class SellerCreateController extends Controller
{

    public function stepOne()
    {
        if (Auth::check() && Auth::user()->user_type == 'seller') {
                flash(translate('This user already a seller'))->error();
                return back();
            
        } else {
            $countries = Country::all();
            $currencies = Currency::where('status', 1)->get();
            $languages = Language::where('status', '1')->get();

            return view('frontend.seller_form_step_1', [
                'countries' => $countries,
                'currencies' => $currencies,
                'languages' => $languages
            ]);
        }
    }

    public function stepOneSubmit(Request $request)
    {

        $validated_data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:users|max:255',
            'mobile_number'      => 'required|max:255',
            'country'   => 'required|string',
            'state'    => 'nullable|string',
            'city'    => 'nullable|string',
            'currency'    => 'required|integer',
            'language'    => 'required|integer',
        ]);

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->first_name . " " . $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->mobile_number;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->currency = $request->currency;
        $user->language = $request->language;
        $user->user_type = "seller";
        $user->password = Hash::make(bin2hex(random_bytes(4)));
        $user->has_seller_account = 1;
        $user->seller_account_complete_level = 1;

        if ($user->save()) {
            //generate seller id
            $user->seller_id = 111111 + $user->id;
            $user->save();

            // login user 
            auth()->login($user, false);
            if (BusinessSetting::where('type', 'email_verification')->first()->value == 0) {
                $user->email_verified_at = date('Y-m-d H:m:s');
                $user->save();
            } else {
                $user->notify(new EmailVerificationNotification());
            }

            return redirect()->route("seller.create-step-2");
        }


        return redirect()->back();
    }


    public function stepTwo()
    {

        return view('frontend.seller_form_step_2');
    }

    public function stepTwoSubmit(Request $request)
    {
        $user = auth()->user();
        if ($user->seller_account_complete_level != 1) {
            return redirect('seller/dashboard');
        }

        $validated = $request->validate([
            'business_name'    => 'required|string|max:255',
            'business_address'      => 'required',
            'business_description'    => 'nullable|string|max:5000',
            'type_of_registration'    => 'required|string|max:255',
            'br_number'    => 'nullable|string|max:255',
            'company_website'    => 'nullable|string|max:255',
            'br_registration_date'    => 'nullable|date',
            'number_of_employees'    => 'nullable|integer',
            'your_designation'      => 'required',
            'manufacturing_capacity'      => 'required'
        ]);

        $user->seller_account_complete_level = 2;
        $user->company_name = $request->business_name;
        $user->company_description = $request->business_description;
        $user->type_of_registration = $request->type_of_registration;
        $user->br_number = $request->br_number;
        $user->br_registration_date = $request->br_registration_date;
        $user->number_of_employees = $request->number_of_employees;
        $user->company_address = $request->business_address;
        $user->company_website = $request->company_website;
        $user->manufacturing_capacity = $request->manufacturing_capacity;
        $user->your_designation = $request->your_designation;

        if ($user->save()) {
            $shop = new Shop;
            $shop->user_id = $user->id;
            $shop->name = $request->business_name;
            $shop->meta_title = $request->business_name;
            $shop->meta_description = $request->business_description;
            $shop->phone = $request->phone;
            $shop->address = $request->business_address;
            $shop->slug = preg_replace('/\s+/', '-', str_replace("/", " ", $request->shop_name));
            $shop->save();
        }

        return redirect()->route("seller.create-step-3");
    }


    public function stepThree()
    {

        $categories = Category::where('level', "0")->get();
        
        return view('frontend.seller_form_step_3',[
            'categories' => $categories
        ]);
    }

    public function stepThreeSubmit(Request $request)
    {
        $user = auth()->user();
        if ($user->seller_account_complete_level != 2) {
            return redirect('seller/dashboard');
        }

        $validated = $request->validate([
            'product_category'    => 'required|string|max:255',
            'password'      => 'required|string|min:6|confirmed',
            'certificates' => 'nullable',
        ]);

        $user->product_category = $request->product_category;
        $user->password = Hash::make($validated['password']);
        $user->seller_account_complete_level = 3;
        $user->save();

        if ($request->hasfile('certificates')) {

            $files = $request->file('certificates');

            foreach ($files as $file) {
                $originalFilename = $file->getClientOriginalName();
                $filename = uniqid() . '.' . $file->getClientOriginalExtension(); // Generate unique filename
    
                $file->storeAs('shop_files', $filename); // Save file in 'shop_files' directory
    
                ShopFile::create([
                    'original_name' => $originalFilename,
                    'filename' => $filename,
                    // Add other relevant fields for your ShopFile model (e.g., shop_id)
                ]);
            }

            // dd(ShopFile::all());
        
        }
        return redirect()->route("seller.create-step-4");
        
    }

    public function stepFour()
    {
        $seller_packages = SellerPackage::all();
        return view('frontend.seller_form_step_4', compact('seller_packages'));

    }


    public function stepFourSubmit(Request $request)
    {
    }
}
