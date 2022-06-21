<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repository\InfluencerProfileRepositoryInterface',
            'App\Repository\InfluencerProfileRepository');
        $this->app->bind(
            'App\Repository\AdvancedSearchRepositoryInterface',
            'App\Repository\AdvancedSearchRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
