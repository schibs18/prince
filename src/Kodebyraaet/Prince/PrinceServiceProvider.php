<?php namespace Kodebyraaet\Prince;

use Illuminate\Support\ServiceProvider;

class PrinceServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Kodebyraaet\Prince\PrinceInterface', function ($app) {
            return new Prince($app);
        });
    }

}