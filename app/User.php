<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// implements MustVerifyEmail
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password','first_name','last_name','mobile','country_id','city','profile_picture','category_id','date_of_birth','instagram_username',
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
}
