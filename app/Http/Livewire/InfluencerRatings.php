<?php

namespace App\Http\Livewire;

use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InfluencerRatings extends Component
{
    public $rating;
    public $influencer;


    protected $rules = [
        'rating' => ['required', 'in:1,2,3,4,5'],
    ];
    public function render()
    {
          return view('livewire.influencer-ratings');
    }
    public function mount()
    {

        if(Auth::user()){
            $rating = Rating::where('business_id', Auth::user()->id)->where('influencer_id', $this->influencer->id)->first();
            if (!empty($rating)) {
                $this->rating  = $rating->rating;
            }
        }

        return view('livewire.influencer-ratings');
    }
    public function rate()
    {
        $rating = Rating::where('business_id', Auth::user()->id)->where('influencer_id', $this->influencer->id)->first();
        $this->validate();
        if(!empty($rating)){
            $rating->influencer_id = $this->influencer->id;
            $rating->business_id =  Auth::user()->id;
            $rating->rating = $this->rating;
            $rating->save();
        }
        else{
            $rating = new Rating;
            $rating->influencer_id = $this->influencer->id;
            $rating->business_id =  Auth::user()->id;
            $rating->rating = $this->rating;
            $rating->save();
        }
        toastr()->success('Influencer is rated successfully!');


    }
}
