<?php

namespace App\Http\Controllers\SingleBusiness;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Collaboration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SingleBusinessInInfluencerController extends Controller
{
    public function index($name){
//        $business ='business'=>Business::where("name", $name)->first()
        $collaborations = Collaboration::where('influencer_id',Auth::user()->id)->where('is_accepted',1)->get();
        return view('influencers.single-profile-business', [
            $business =Business::where("name", $name)->first(),
        ], compact('business','collaborations'));
    }
}
