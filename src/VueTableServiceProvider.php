<?php

namespace Mutane\VueTable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mutane\VueTable\Commands\VueTableCommand;

class VueTableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('vue-inertia-tables')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_vue_inertia_tables_table')
            ->hasCommand(VueTableCommand::class);
    }
}
