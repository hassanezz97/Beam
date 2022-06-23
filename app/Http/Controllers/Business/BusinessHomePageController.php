<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Collaboration;
use App\Models\Influencer;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessHomePageController extends Controller
{

    public function index(){
        $suggestions = Influencer::inRandomOrder()->limit(3)->get();
        $business_auth_id = Auth::user()->id;
        $informations = Information::where('business_id',$business_auth_id)->get();
        return view('businesses.home-business',compact('informations','suggestions'));
    }

    public function viewProfileBusiness(){
        $suggestions = Influencer::inRandomOrder()->limit(3)->get()->except(Auth::id()) ;
        $collaborations = Collaboration::where('influencer_id',Auth::user()->id)->where('is_accepted',1)->get();
        return view('businesses.view-profile-business',compact('collaborations','suggestions'));
    }
}
