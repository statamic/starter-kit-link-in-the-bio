<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Statamic;
use Statamic\Facades\CP\Nav;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nav::extend(function ($nav) {
            $nav->remove('Dashboard');
            $nav->remove('Content', 'Navigation');
            $nav->remove('Content', 'Taxonomies');
            $nav->remove('Content', 'Globals');
            $nav->remove('Fields', 'Fieldsets');
            $nav->remove('Tools', 'Forms');
        });
    }
}
