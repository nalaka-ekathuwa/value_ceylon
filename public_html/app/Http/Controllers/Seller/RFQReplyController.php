<?php

namespace App\Http\Controllers\Seller;

use App\Models\Rfq;
use App\Models\RfqReply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RFQReplyController extends Controller
{
    public function index()
    {
        $user_id =  Auth::user()->id;

        $today = date('Y-m-d');

        // user replyied ids
        $replied_rfq = RfqReply::where('user_id', $user_id)
            ->get('rfq_id')->pluck('rfq_id')->toArray();

        // new, peiding, accepted, not-seen, seen
        $allowed_status = [1, 2, 3, 4, 5, 6];


        // get all rfqs that user never replyed
        $rfqs = Rfq::whereIn('id', $replied_rfq)
            ->whereIn('status', $allowed_status)
            ->with(['category', 'images', 'package_type', 'quoteStatus'])->paginate(20);

        // dd($rfqs);

        return view('seller.rfq.replies.index', [
            'rfqs' => $rfqs
        ]);
    }

    public function show(Rfq $rfq)
    {

        $user_id =  Auth::user()->id;

        $replies = RfqReply::where('user_id',  $user_id)
            ->where('rfq_id', $rfq->id)
            ->orderBy('id', 'desc')
            ->get();

        return view('seller.rfq.replies.show', [
            'rfq' => $rfq,
            'replies' => $replies
        ]);
    }


    public function edit(Rfq $rfq, $reply)
    {
        $user_id =  Auth::user()->id;

        $reply = RfqReply::findOrFail($reply);

        if (is_null($reply)) {
            return redirect()->back();
        }

        return view('seller.rfq.replies.edit', [
            'rfq' => $rfq,
            'reply' => $reply
        ]);
    }


    public function update(Request $request, Rfq $rfq, $reply)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'message' => 'required|string'
        ]);


        $reply = RfqReply::findOrFail($reply);

        $reply->update([
            'title' => $validated['title'],
            'message' => $validated['message'],
        ]);

        flash(translate('Your request for quotation reply is updated'))->success();

        return redirect()->route('seller.rfqs.replies.show', ['rfq' => $rfq->id]);
    }
}
