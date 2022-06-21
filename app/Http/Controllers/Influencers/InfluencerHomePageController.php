<?php

namespace App\Http\Controllers\Influencers;

use App\Http\Controllers\Controller;
use App\Models\Collaboration;
use App\Models\Influencer;
use App\Models\Information;
use App\Models\Rating;
use App\Notifications\informationRecieved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class InfluencerHomePageController extends Controller
{
    public function index(){
        $influencer_id = Auth::user()->id ;
        $requests = \App\Models\Request::where('influencer_id',$influencer_id)->get();
        $ratings = Rating::where('influencer_id',$influencer_id)->avg('rating');
//        $suggestions = Influencer::where('influencer_id','!=',$influencer_id)->inRandomOrder()->limit(3)->get() ;
        return view('influencers.home-influencers',compact('requests','ratings'));
    }

    public function viewProfileInfluencer(){
        $collaborations = Collaboration::where('influencer_id',Auth::user()->id)->where('is_accepted',1)->get();
        return view('influencers.view-profile-influencer', [
            'influencers'=>Influencer::inRandomOrder()->limit(3)->get(),
        ],compact('collaborations'));
    }

    public function sendInformation(Request $request){
        $influencer_id= $request->get('influencer_id');
        $business_id = $request->get('business_id');
        $story_price = $request->get('story_price');
        $post_price = $request->get('post_price');
        $other_comments = $request->get('other_comments');
        $i = Information::create([
            'influencer_id' => $influencer_id,
            'business_id' => $business_id,
            'story_price'=>$story_price,
            'post_price'=>$post_price,
            'other_comments'=>$other_comments,
        ]);
//        $data =[
//            'user_id' => Auth::user()->id,
//        ];
        Notification::send($i->Business, new informationRecieved($i));
//        event(new \App\Events\informationRecieved($data));
        toastr()->success('Information is sent successfully!');
        return redirect()->back();
    }
}
