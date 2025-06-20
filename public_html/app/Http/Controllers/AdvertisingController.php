<?php

namespace App\Http\Controllers;

use App\Models\AdvertisingBanner;
use Illuminate\Http\Request;

class AdvertisingController extends Controller
{
    

    public function index(){
        $banners = AdvertisingBanner::all();

        return view("backend.advertising.index", [
            'banners' => $banners
        ]);
    }

    public function create(){
        return view("backend.advertising.create");
    }

    public function store(Request $request){
        $validated = $this->validate($request,[
            "title"=> "required",
            "banner"=> "required",
            "category_id"=> "required",
        ]);

        AdvertisingBanner::create($validated);

        return redirect()->route('advertising.index');
    }

    public function show(AdvertisingBanner $advertisingBanner ){

    }



    public function destroy(Request $request,AdvertisingBanner $advertisingBanner ){



        flash(translate('Banner deleted'))->success();
        return redirect()->route('advertising.index');
    }


    public function delete ($advertising){
        
        $advertisingBanner = AdvertisingBanner::find($advertising);

        if($advertisingBanner){
            $advertisingBanner->delete();
        }
        else{
            // no item found
            return redirect()->route('advertising.index');
        }
        
        flash(translate('Banner deleted'))->success();
        return redirect()->route('advertising.index');
    }
}
