<?php

namespace Jmaxl\Helper;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ .'/../database/migrations');
        if (File::exists(__DIR__ . '/helper.php')) {
            require __DIR__ . '/helper.php';
        }
    }

    public function register()
    {
    }
}
