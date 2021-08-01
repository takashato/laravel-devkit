<?php

namespace Takashato\LaravelDevkit;

use Illuminate\Support\ServiceProvider;
use Takashato\LaravelDevkit\Services\ReCaptchaService;

class LaravelDevkitProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/devkit.php' => config_path('devkit.php'),
        ], 'config');;
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/devkit.php', 'devkit');

        $this->app->bind(ReCaptchaService::class);
    }
}
