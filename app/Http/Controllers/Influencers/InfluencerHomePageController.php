<?php

namespace App\Http\Controllers\Influencers;

use App\Http\Controllers\Controller;
use App\Models\Collaboration;
use App\Models\Influencer;
use App\Models\Information;
use App\Models\Rating;
use App\Models\SocialProfilesInfluencer;
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
        $suggestions = Influencer::inRandomOrder()->limit(3)->get()->except(Auth::id()) ;
        return view('influencers.home-influencers',compact('requests','ratings','suggestions'));
    }

    public function viewProfileInfluencer(){
        $socialprofile = SocialProfilesInfluencer::where('influencer_id',Auth::user()->id)->first();
        $collaborations = Collaboration::where('influencer_id',Auth::user()->id)->where('is_accepted',1)->get();
        $suggestions = Influencer::inRandomOrder()->limit(3)->get()->except(Auth::id()) ;
        return view('influencers.view-profile-influencer',compact('collaborations','suggestions','socialprofile'));
    }

    public function sendInformation(Request $request){
        $influencer_id= $request->get('influencer_id');
        $business_id = $request->get('business_id');
        $story_price = $request->get('story_price');
        $post_price = $request->get('post_price');
        $other_comments = $request->get('other_comments');
        try {
            $i = Information::create([
                'influencer_id' => $influencer_id,
                'business_id' => $business_id,
                'story_price'=>$story_price,
                'post_price'=>$post_price,
                'other_comments'=>$other_comments,
            ]);
            Notification::send($i->Business, new informationRecieved($i));
//        event(new \App\Events\informationRecieved($data));
            toastr()->success('Information is sent successfully!');
            return redirect()->back();
        }catch
        (\Exception $e) {
            toastr()->error('Make sure to fill al the input fields');
            return redirect()->back();
        }

//        $data =[
//            'user_id' => Auth::user()->id,
//        ];

    }

    public function deleteNotification(Request $request){
            $request_id = $request->get('request_id');
            $request = \App\Models\Request::findOrFail($request_id)->delete();
            toastr()->success('Request deleted successfully!');
            return redirect()->back();
    }
}
