<?php

namespace App\Http\Controllers\Influencers;

use App\Http\Controllers\Controller;
use App\Models\Collaboration;
use App\Models\Rating;
use App\Notifications\CollaborationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class CollaborationsController extends Controller
{

   public function index(){
       $ratings = Rating::where('influencer_id',Auth::user()->id)->avg('rating');
       $requests = \App\Models\Request::where('influencer_id',Auth::user()->id)->get();
       $collaborations = Collaboration::where('influencer_id',Auth::user()->id)->where('is_accepted',1)->get();
        return view('influencers.collaborations-influencer',compact('ratings','collaborations','requests'));
   }

   public function collaborateWithBusiness(Request $request){
        $business_id = $request->business_id;
        $collaboration_image = $request->collaboration_image;

       if ($request->hasFile('collaboration_image')){
           $request->file('collaboration_image')->storeAs(Auth::user()->name, $request->file('collaboration_image')->getClientOriginalName(), $disk = 'collaboration_images');
       }
        $caption = $request->collaboration_caption;
        $c =Collaboration::create([
            'collaboration_image' => $collaboration_image->getClientOriginalName(),
            'description'=>$caption,
            'influencer_id'=>Auth::user()->id,
            'business_id'=>$business_id,
        ]);
        Notification::send($c->Business, new CollaborationRequest($c));
        return "success";
   }
}
