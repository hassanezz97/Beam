<?php
namespace App\Repository;

interface InfluencerProfileRepositoryInterface{


    public function index();
    public function updateInfluencerBasicInfo($request);
    public function addSocialProfiles($request);

}
