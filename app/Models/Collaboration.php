<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collaboration extends Model
{
    protected $fillable = [
        'collaboration_image','description','influencer_id','business_id','is_accepted',
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
