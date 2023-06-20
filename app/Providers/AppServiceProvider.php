<?php

namespace App\Providers;

use App\Services\Plot\PlotService;
use App\Services\Plot\Interfaces\PlotInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PlotInterface::class, PlotService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
