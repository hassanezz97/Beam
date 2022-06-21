<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'influencer_id','business_id','rating',
    ];
    public function Influencer()
    {
        return $this->belongsTo('App\Models\Influencer');
    }

    public function Business()
    {
        return $this->belongsTo('App\Models\Business');
    }
}
