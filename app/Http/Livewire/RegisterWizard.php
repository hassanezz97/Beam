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
use App\Http\Controllers\Auth\LoginController;

class RegisterWizard extends Component
{

    use WithFileUploads;

    public $currentStep = 1;
    public $name, $email, $password, $password_confirmation, $full_name, $gender, $mobile, $country, $city, $category, $date_of_birth, $instagram_username, $headline;
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
        $this->currentStep = 2;
    }
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'full_name' => 'required|string|max:255',
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
        if (!empty($profile_picture)) {
            $profile_picture->storeAs($this->name, $profile_picture->getClientOriginalName(), $disk = 'influencer_images');
        }
        $user = Influencer::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'full_name' => $this->full_name,
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
        Auth::guard('influencer')->login($user);
        return redirect()->to(RouteServiceProvider::Influencer);
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

    }
}
