<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
        'influencer_id', 'business_id','story_price','post_price','other_comments',
    ];
    public function influencer(){
        return $this->belongsTo('App\Models\Influencer');
    }
    public function business(){
        return $this->belongsTo('App\Models\Business');
    }
}
