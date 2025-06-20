<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rfq;
use App\Models\RfqReply;
use Illuminate\Support\Facades\Auth;

class RFQController extends Controller
{

    public function index(){
        $user_id =  Auth::user()->id;

        $today = date('Y-m-d');
        
        // user replyied ids
        $replied_rfq = RfqReply::where('user_id', $user_id)
                            ->get('rfq_id')->pluck('rfq_id')->toArray();
        
        // new, peiding, accepted, not-seen, seen
        $allowed_status = [3];

        // get all rfqs that user never replyed
        $rfqs = Rfq::whereNotIn('id',$replied_rfq)
                    ->whereIn('status', $allowed_status)
                    ->where('rfq_deadline_date', '>=',$today)
                    ->with(['category','images', 'package_type'])->paginate(20);
        // dd($rfqs);

        return view('seller.rfq.index',[
            'rfqs' => $rfqs
        ]);
    }


    public function show(Rfq $rfq){

        $query = Rfq::where('id', $rfq->id)
                    ->with(['images', 'category', 'package_type', 'quoteStatus'])
                    ->first();
        
        return view('seller.rfq.show',[
            'rfq' => $query
        ]);
    }


    public function save(Rfq $rfq, Request $request){

        $user_id = Auth::user()->id;

        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'message' => 'required|string'
        ]);

        RfqReply::create([
            'title' => $validated['title'],
            'message' => $validated['message'],
            'user_id' => $user_id,
            'rfq_id' => $rfq->id
        ]);

        flash(translate('Your request for quotation is updated'))->success();
        return redirect()->route('seller.rfqs.replies.show', ['rfq' =>$rfq->id]);

    }
}
