<?php

namespace AhrimFakhriy\CommonComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CommonComponentsServiceProvider extends PackageServiceProvider
{

    public string $packageName = 'common-components';

    public function configurePackage(Package $package): void
    {
        $package
            ->name($this->packageName)
            ->hasViews('cc');
    }
}
