<?php

namespace JurreOutlawz\Test;

use Inertia\Inertia;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
