<?php

namespace App\Http\Controllers\Influencers;

use App\Http\Controllers\Controller;
use App\Repository\InfluencerProfileRepositoryInterface;
use Illuminate\Http\Request;

class InfluencerProfileController extends Controller
{
    protected $Influencer;

    public function __construct(InfluencerProfileRepositoryInterface $Influencer)
    {
        $this->Influencer = $Influencer;
    }
    public function index()
    {
        return $this->Influencer->index();
    }
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
//        return $this->Influencer->editInfluencerBasicInfo($id);

//        return view('influencers.edit-profile-influencer',compact('Influencer'));
    }


    public function update(Request $request, $id)
    {
        return $this->Influencer->updateInfluencerBasicInfo($request);
    }

    public function destroy($id)
    {
        //
    }
}
