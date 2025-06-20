<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RQFController extends Controller
{



    public function myRFQs(){
        return view("frontend.user.rfq.my-rfqs");
    }
}
