<?php

namespace App\Repository;
use App\Models\Category;
use App\Models\Country;
use App\Models\Gender;
use App\Models\Influencer;

class InfluencerProfileRepository implements InfluencerProfileRepositoryInterface {


    public function index(){
        return view('influencers/edit-profile-influencer', [
            'Genders' => Gender::all(),
            'Countries' => Country::all(),
            'Categories' => Category::all(),
        ]);
    }
    public function getInfluencer()
    {

    }

    public function editInfluencerBasicInfo($id)
    {
//        return Influencer::findOrFail($id);
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
            return redirect()->route('edit-profile.index');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
