<?php

namespace JurreOutlawz\Test;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use JurreOutlawz\Test\Commands\TestCommand;
use Inertia\Inertia;
use JurreOutlawz\test\Http\Middleware\HandleInertiaRequests;


class TestServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('test')
            ->hasInertiaComponents()
            ->hasViews()
            ->hasRoutes('route');
    }

    public function boot()
    {   
        $this->publishes([
            __DIR__.'/../public/jurreoutlawz/test' => public_path('jurreoutlawz/test'),
        ], 'assets');

        Inertia::setRootView('test::app');

        parent::boot();
    }
    
}
