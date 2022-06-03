<?php

namespace App\Http\Traits;

use App\Providers\RouteServiceProvider;

trait AuthTrait
{
    public function chekGuard($request){

        if($request->type == 'business'){
            $guardName= 'business';
        }
        else if($request->type == 'influencer'){
            $guardName= 'influencer';
        }
        return $guardName;
    }

    public function redirect($request){

        if($request->type == 'business'){
            return redirect()->intended(RouteServiceProvider::Business);
        }

        else if($request->type == 'influencer'){
            return redirect()->intended(RouteServiceProvider::Influencer);
        }
    }
}
