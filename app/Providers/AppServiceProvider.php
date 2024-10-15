<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\LoggerInterface;
use App\Factory\LoggerFactory;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(
            LoggerInterface::class,
            LoggerFactory::class
        );
    }
}
