<?php

namespace App\Http\Controllers;

use App\Models\Influencer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


//    public function index()
//    {
////        $influencer_id = Auth::user()->id ;
////        return view('influencers.home-influencers', compact('influencer_id'));
//    }
    public function visitBusiness()
    {
        return view('home_page.businesses');
    }
    public function visitBusinessHome()
    {
        return view('businesses.home-business');
    }
    public function home()
    {
        return view('home_page.influencer');
    }
    public function registerInfluencer()
    {
        return view('auth.register');
    }
    public function registerBusiness()
    {
        return view('auth.register-business');
    }

//    public function visitInfluencersHome()
//    {
//
//        return view('influencers.home-influencers');
//    }
    public function setupProfile()
    {
        return view('influencers.edit-profile-influencer');
    }
//    public function viewProfile()
//    {
//        return view('influencers.view-profile-influencer', [
//            'influencers'=>Influencer::inRandomOrder()->limit(3)->get(),
//        ]);
//    }

    public function viewSingleInfluencer($name)
    {
        return view('influencers.single-profile-influencer', [
            $influencer ='influencers'=>Influencer::where("name", $name)->first(),
            $suggestions = Influencer::inRandomOrder()->limit(3)->get(),
            ], compact('influencer','suggestions'));
    }
//    public function advancedSearch()
//    {
//        return view('influencers.advanced-search-influencers');
//    }
    public function searchInfluencer()
    {
        return view('influencers.search.influencer-search');
    }
    public function searchBusiness()
    {
        return view('influencers.search.business-search');
    }
    public function searchUsername()
    {
        return view('influencers.search.username-search');
    }

    public function setupBusinessProfile()
    {
        return view('businesses.profile-business');
    }

    public function verification()
    {
        return view('login.email-verification');
    }

    public function SingleInfluencerInBusiness()
    {
        return view('businesses.single-influencer-in-business');
    }
}
