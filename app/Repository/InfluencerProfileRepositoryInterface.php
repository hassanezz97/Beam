<?php
namespace App\Repository;

interface InfluencerProfileRepositoryInterface{

    // Return view
    public function index();
    // Get Influencer
    public function getInfluencer();
    // Edit Influencer
    public function editInfluencerBasicInfo($id);
    public function updateInfluencerBasicInfo($request);

}
