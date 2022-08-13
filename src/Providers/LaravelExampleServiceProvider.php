<?php

declare(strict_types=1);

namespace Orlovdev\LaravelLinkShortener\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelExampleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        }
    }
}
