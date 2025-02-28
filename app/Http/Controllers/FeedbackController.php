<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //

    public function create(){
        return view('frontend.create-feedback');
    }


    public function save(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'description' => 'required|string',
            'category' => 'required|string',
            'phone' => 'required'
        ]);

        $feedback = Feedback::create($data);

        if(!is_null($feedback)){
            flash(translate('Feedback created successfully'))->success();
        }
        else{
            flash(translate('Feedback could not created'))->success();
        }

        return redirect()->route('feedback.create');
    }
}
