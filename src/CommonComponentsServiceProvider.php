<?php

namespace AhrimFakhriy\CommonComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AhrimFakhriy\CommonComponents\Commands\CommonComponentsCommand;

class CommonComponentsServiceProvider extends PackageServiceProvider
{

    protected final string $packageName = 'common-components';

    public function configurePackage(Package $package): void
    {
        $package
            ->name($this->packageName)
            ->hasViews('cc');
    }
}
