<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Influencer extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password','full_name','gender_id','mobile','country_id','city','profile_picture','category_id','date_of_birth','instagram_username','headline',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }
    public function Category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function Gender()
    {
        return $this->belongsTo('App\Models\Gender', 'gender_id');
    }
    public function Request()
    {
        return $this->hasMany('App\Models\Request','request_id');
    }
    public function Information()
    {
        return $this->hasMany('App\Models\Information','information_id');
    }
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
    public function Collaborations()
    {
        return $this->hasMany('App\Models\Collaboration');
    }
    public function SocialProfile()
    {
        return $this->hasOne('App\Models\SocialProfilesInfluencer','SocialProfilesInfluencer_id');
    }
}
