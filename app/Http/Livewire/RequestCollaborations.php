<?php

namespace App\Http\Livewire;

use App\Models\Collaboration;
use App\Notifications\CollaborationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Livewire\WithFileUploads;

class RequestCollaborations extends Component
{
    use WithFileUploads;
    public $business;
    public $collaboration_image;
    public $collaboration_caption;
    public function render()
    {
        return view('livewire.request-collaborations');
    }

    public function collaborateWithBusiness(){
        $collaboration_image = $this->collaboration_image;
        if (!empty($this->$collaboration_image)){
            $collaboration_image->storeAs(Auth::user()->name, $collaboration_image->getClientOriginalName(), $disk = 'collaboration_images');
        }
        $this->validate([
            'collaboration_image' => 'image|max:3024', // 1MB Max
        ]);
        $c = new Collaboration;
        $c->collaboration_image = $collaboration_image->getClientOriginalName();
        $c->description = $this->collaboration_caption;
        $c->influencer_id=Auth::user()->id;
        $c->business_id=$this->business->id;
        $c->save();
        Notification::send($c->Business, new CollaborationRequest($c));
        toastr()->success('Collaboration request was sent successfully!');

    }
}
