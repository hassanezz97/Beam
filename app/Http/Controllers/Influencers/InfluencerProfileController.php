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


    public function store()
    {

    }


    public function show($id)
    {

    }


    public function edit(Request $request)
    {
        return $this->Influencer->addSocialProfiles($request);
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
