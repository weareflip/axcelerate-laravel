<?php

namespace FlipNinja\AxcelerateLaravel;

use FlipNinja\Axcelerate\Axcelerate;
use Illuminate\Support\ServiceProvider;

class AxcelerateServiceProvider extends ServiceProvider
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
        $this->app->singleton(Axcelerate::class, function() {
            return new Axcelerate(
                $this->app['config']['services.axcelerate.apiToken'],
                $this->app['config']['services.axcelerate.wsToken'],
                $this->app->environment() === 'production' ? Axcelerate::PRODUCTION_BASE : Axcelerate::STAGING_BASE
            );
        });
    }
}
