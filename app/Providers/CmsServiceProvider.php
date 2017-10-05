<?php

namespace Horsefly\Providers;

use Illuminate\Support\ServiceProvider;
use \Cms;
class CmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('cms', function($app)
        {
            return new \Cms();
        });
    }
}
