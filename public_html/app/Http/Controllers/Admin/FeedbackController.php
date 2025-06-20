<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        
        $feedbacks = Feedback::paginate(10);

        return view('backend.feedbacks.index',[
            'feedbacks' => $feedbacks
        ]);
    }


    public function show(Feedback $feedback){
        return  view('backend.feedbacks.show',[
            'feedback' => $feedback
        ]);
    }


    public function edit(Feedback $feedback){
        return  view('backend.feedbacks.edit',[
            'feedback' => $feedback
        ]);
    }


    public function update(Request $request, Feedback $feedback){

        $feedback->update([
            'status' =>$request->status,
            'comment' => $request->comment
        ]);

        flash(translate("Feedback updated successfully"))->success();
        return back();
        
    }


    public function destroy (Request $request, Feedback $feedback){
        $feedback->delete();

        flash(translate("Feedback deleted successfully"))->success();
        return redirect()->route('admin.feedbacks.index');
    }
}
