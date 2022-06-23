<?php

namespace App\Repository;
use App\Models\Category;
use App\Models\Country;
use App\Models\Gender;
use App\Models\Influencer;
use App\Models\SocialProfilesInfluencer;
use Illuminate\Support\Facades\Auth;

class InfluencerProfileRepository implements InfluencerProfileRepositoryInterface {


    public function index(){
        $socialprofile = SocialProfilesInfluencer::where('influencer_id',Auth::user()->id)->first();
        return view('influencers/edit-profile-influencer', [
            'Genders' => Gender::all(),
            'Countries' => Country::all(),
            'Categories' => Category::all(),
        ],compact('socialprofile'));
    }

    public function updateInfluencerBasicInfo($request)
    {
        try {
            $Influencer = Influencer::findOrFail($request->id);
            $Influencer->full_name = $request->full_name;
            $Influencer->gender_id = $request->gender;
            $Influencer->date_of_birth = $request->date_of_birth;
            $Influencer->country_id = $request->country;
            $Influencer->city = $request->city;
            $Influencer->headline = $request->headline;
            $Influencer->instagram_username = $request->instagram_username;
            $Influencer->mobile = $request->mobile;
            $Influencer->save();
            toastr()->success("profile edited successfuly");
            return redirect()->back();
        }
        catch (Exception $e) {
            toastr()->error("Error occured, please try again");
            return redirect()->back();
        }
    }

    public function addSocialProfiles($request)
    {
        $influencer_id = Auth::user()->id;
        $tiktok = $request->tiktok;
        $twitter = $request->twitter;
        $facebook = $request->facebook;
        $socialprofile = SocialProfilesInfluencer::where('influencer_id',$influencer_id)->first();
        if(!empty($socialprofile)){

            $socialprofile->tiktok = $tiktok;
            $socialprofile->twitter= $twitter;
            $socialprofile->facebook=$facebook;
            $socialprofile->influencer_id=$influencer_id;
            $socialprofile->save();
            toastr()->success("Platform updated successfully");

        }
        else{
            $socialprofile = new SocialProfilesInfluencer;
            $socialprofile->tiktok = $tiktok;
            $socialprofile->twitter= $twitter;
            $socialprofile->facebook=$facebook;
            $socialprofile->influencer_id=$influencer_id;
            $socialprofile->save();
            toastr()->success("Platform added successfully");
        }
        return redirect()->back();




    }
}
