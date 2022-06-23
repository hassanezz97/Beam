<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialProfilesInfluencer extends Model
{
    protected $fillable = [
        'tiktok', 'twitter', 'facebook','influencer_id',
    ];
    public function Influencer()
    {
        return $this->belongsTo('App\Models\Influencer','influencer_id');
    }
}
