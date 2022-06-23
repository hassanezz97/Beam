<?php

namespace App\Http\Controllers\SingleInfluencer;

use App\Http\Controllers\Controller;
use App\Models\Collaboration;
use App\Models\Influencer;
use App\Models\SocialProfilesInfluencer;
use Illuminate\Http\Request;
use App\Notifications\requestsRecieved;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class SingleInfluencerInBusinessController extends Controller
{
    public function index($name)
    {
        $influencer_id =Influencer::where("name", $name)->get('id');
        $socialprofile = SocialProfilesInfluencer::where('influencer_id',$influencer_id)->first();
        return view('businesses.single-influencer-in-business', [
            $influencer =Influencer::where("name", $name)->first(),
            $collaborations = Collaboration::where('influencer_id',$influencer->id)->where('is_accepted',1)->get(),
            $suggestions = Influencer::inRandomOrder()->limit(3)->get(),
        ], compact('influencer','suggestions','collaborations','socialprofile'));
    }
    public function sendRequest(Request $request){
        $influencer_id= $request->get('influencer_id');
        $business_id = $request->get('business_id');
        $platform = $request->get('platform');
        if($request->has('story')){
            $story = 1;
        }
        else{
            $story = 0;
        }
        if($request->has('post')){
            $post = 1;
        }
        else{
            $post = 0;
        }
        $other_questions=$request->get('other_questions');
        $r = \App\Models\Request::create([
            'influencer_id' => $influencer_id,
            'business_id' => $business_id,
            'platform'=>$platform,
            'story'=>$story,
            'post'=>$post,
            'other_questions'=>$other_questions,
        ]);
        Notification::send($r->Influencer, new requestsRecieved($r));
        toastr()->success('Request is sent successfully!');
        return redirect()->back();
    }


}
