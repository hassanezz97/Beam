<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'influencer_id', 'business_id','platform','story','post','other_questions',
    ];

    public function influencer(){
        return $this->belongsTo('App\Models\Influencer');
    }
    public function business(){
        return $this->belongsTo('App\Models\Business');
    }

}
