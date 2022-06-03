<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function index()
    {
        return view('influencers.home-influencers');
        //        return view('home');
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
    public function visitBusiness()
    {
        return view('home_page.businesses');
    }
    public function visitInfluencersHome()
    {
        return view('influencers.home-influencers');
    }
    public function setupProfile()
    {
        return view('influencers.edit-profile-influencer');
    }
    public function viewProfile()
    {
        return view('influencers.view-profile-influencer');
    }
    public function advancedSearch()
    {
        return view('influencers.search.advanced-search');
    }
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
    public function visitBusinessHome()
    {
        return view('businesses.home-business');
    }
    public function setupBusinessProfile()
    {
        return view('businesses.profile-business');
    }

    public function verification()
    {
        return view('login.email-verification');
    }
}
