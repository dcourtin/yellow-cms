<?php

namespace Dcourtin\YellowCms;

use Dcourtin\YellowCms\Commands\YellowCmsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class YellowCmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        /*
        $package
            ->name('yellow-cms')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_yellow-cms_table')
            ->hasCommand(YellowCmsCommand::class);
            */
    }

    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'yellowcms');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'yellowcms');

        $this->publishes([
            __DIR__.'/../config/yellow-cms.php' => config_path('yellow-cms.php'),
        ],'yellowcms-config');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/yellowcms'),
        ], 'yellowcms-lang');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/yellowcms'),
        ], 'yellowcms-views');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/yellowcms'),
        ], 'yellowcms-public');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'yellowcms-migrations');

        /*
        $this->loadViewComponentsAs('yellowcms', [
            Alert::class,
            Button::class,
        ]);
         */
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/yellow-cms.php', 'yellowcms'
        );
    }
}
