<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Collaboration;
use App\Notifications\CollaborationAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class CollaborationBusinessController extends Controller
{
    public function index(){
        $collaborations = Collaboration::where('business_id',Auth::user()->id)->where('is_accepted',1)->get();
        return view('businesses.collaborations-business',compact('collaborations'));
    }

    public function acceptCollaboration(Request $request){
        $collaboration = Collaboration::where('business_id',Auth::user()->id)->where('id',$request->collaboration_id)->first();
        $collaboration->is_accepted = 1;
        $collaboration->save();
        Notification::send($collaboration->Influencer, new CollaborationAnswer($collaboration));
        toastr()->success("Collaboration Request Accepted Successfully ");
        return redirect()->back();
    }
}
