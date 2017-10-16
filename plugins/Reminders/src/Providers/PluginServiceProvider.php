<?php

namespace AcmeCorp\Reminders\Providers;

use Nova\Foundation\AliasLoader;
use Nova\Support\ServiceProvider;

use AcmeCorp\Reminders\Console\ClearRemindersCommand;
use AcmeCorp\Reminders\Console\RemindersTableCommand;
use AcmeCorp\Reminders\PasswordBrokerManager;


class PluginServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the Application Events.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__ .'/../');

        // Configure the Package.
        $this->package('AcmeCorp/Reminders', 'reminders', $path);

        //
    }

    /**
     * Register the Reminders plugin Service Provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('auth.password', function ($app)
        {
            return new PasswordBrokerManager($app);
        });

        $this->app->bind('auth.reminder.broker', function ($app)
        {
            return $app->make('auth.password')->broker();
        });

        $this->registerFacades();

        $this->registerCommands();
    }

    protected function registerFacades()
    {
        $loader = AliasLoader::getInstance();

        $loader->alias('Password', 'Reminders\Support\Facades\Password');
    }

    protected function registerCommands()
    {
        $this->app->bindShared('command.auth.reminders.clear', function()
        {
            return new ClearRemindersCommand;
        });

        $this->app->bindShared('command.auth.reminders', function($app)
        {
            return new RemindersTableCommand($app['files']);
        });

        $this->commands('command.auth.reminders.clear', 'command.auth.reminders');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('auth.password', 'auth.password.broker', 'command.auth.reminders.clear');
    }
}
