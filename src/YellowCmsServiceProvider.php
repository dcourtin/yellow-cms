<?php

namespace Dcourtin\YellowCms;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Dcourtin\YellowCms\Commands\YellowCmsCommand;

class YellowCmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('yellow-cms')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_yellow-cms_table')
            ->hasCommand(YellowCmsCommand::class);
    }
}
