<?php

namespace Messages\Providers;

use Nova\Support\ServiceProvider;


class MessagesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the Application Events.
     *
     * @return void
     */
    public function boot()
    {
        $basePath = realpath(__DIR__ .'/../');

        // Configure the Package.
        $this->package('Messages', 'messages', $basePath);

        //
        require $basePath .DS .'Bootstrap.php';
    }

    /**
     * Register the Dashboard module Service Provider.
     *
     * This service provider is a convenient place to register your modules
     * services in the IoC container. If you wish, you may make additional
     * methods or service providers to keep the code more focused and granular.
     *
     * @return void
     */
    public function register()
    {
        // Register additional Service Providers.
        $this->app->register('Messages\Providers\AuthServiceProvider');
        $this->app->register('Messages\Providers\EventServiceProvider');
        $this->app->register('Messages\Providers\RouteServiceProvider');
    }

}
