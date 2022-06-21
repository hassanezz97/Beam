<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Country;
use App\Models\Gender;
use App\Models\Influencer;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class InfluencerRegistration extends Controller
{
    public function index(){
        return view('influencers.registration-influencers', [
            'Genders' => Gender::all(),
            'Countries' => Country::all(),
            'Categories' => Category::all(),
        ]);
    }
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string','unique:influencers','alpha_num', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:influencers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function register(Request $request){
        $user= Influencer::create([
            'name' => $request->multiStepsUsername,
            'email' => $request->multiStepsEmail,
            'password' => Hash::make($request->multiStepsPass),
            'full_name' => $request->multiStepsFirstName,
            'gender_id' => $request->multiStepsGender,
            'country_id' => $request->multiStepsState,
            'mobile' => $request->multiStepsMobile,
            'city' => $request->multiStepsAddress,
            'category_id' => $request->multiStepsCategory,
            'date_of_birth' => $request->date_of_birth,
            'instagram_username' => $request->multiStepsInstagramUsername,
            'headline' => $request->multiStepsHeadline,
        ]);
        Auth::login($user);
        return redirect()->to(RouteServiceProvider::Influencer);
        //        event(new Registered($user));
    }
}
