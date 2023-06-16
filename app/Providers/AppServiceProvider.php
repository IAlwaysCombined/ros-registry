<?php

namespace App\Providers;

use App\Services\Cadastral\CadastralService;
use App\Services\Cadastral\Interfaces\CadastralInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CadastralInterface::class, CadastralService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
