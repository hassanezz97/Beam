<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Country;
use App\Models\Gender;
use App\Models\Influencer;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Notifications\VerifyEmail;
use Livewire\WithFileUploads;

class RegisterWizard  extends Component
{
    use WithFileUploads;
    public $currentStep = 1;
    public $name, $email, $password,$password_confirmation,$first_name,$last_name,$gender,$mobile,$country,$city,$category,$date_of_birth,$instagram_username,$headline;
    public $profile_picture;
    public $successMessage = '';


    public function render()
    {
        return view('livewire.register-wizard', [
            'Genders' => Gender::all(),
            'Countries' => Country::all(),
            'Categories' => Category::all(),
        ]);
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255|unique:influencers|alpha_num',
            'email' => 'required|string|email|max:255|unique:influencers',
            'password' => 'required|string|confirmed|min:8',
            'password_confirmation' => 'required|string',
        ]);

//        event(new Registered($user));
//        Auth::login($user);
       $this->currentStep = 2;

    }


    public function second2StepSubmit()
    {
//        $user = Auth::user();
//        if( $user->hasVerifiedEmail()){
//            $this->currentStep = 2;
//        }
//        else{
//            $this->currentStep = 4;
//        }
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'mobile' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
        ]);

        $this->currentStep = 3;
    }


    public function submitForm()
    {
         $profile_picture = $this->profile_picture;
        $profile_picture->storeAs($this->name, $profile_picture->getClientOriginalName(), $disk = 'influencer_images');

        $user= Influencer::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'gender_id' => $this->gender,
            'country_id' => $this->country,
            'mobile' => $this->mobile,
            'city' => $this->city,
            'profile_picture' => $profile_picture->getClientOriginalName(),
            'category_id' => $this->category,
            'date_of_birth' => $this->date_of_birth,
            'instagram_username' => $this->instagram_username,
            'headline' => $this->headline,
        ]);
        event(new Registered($user));
        Auth::login($user);
        $this->successMessage = 'Product Created Successfully.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->stock = '';
        $this->status = 1;
    }
}
