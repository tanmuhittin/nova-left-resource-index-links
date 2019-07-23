<?php

namespace TanMuhittin\LeftResourceIndexLinks;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class LeftResourceIndexLinksServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-scroll-top', __DIR__ . '/../dist/js/nova-left-resource-index-links.js');
        });
    }
}
