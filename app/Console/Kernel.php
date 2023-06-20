<?php

namespace App\Console;

use App\Services\Plot\SaveService;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    private SaveService $saveService;

    public function __construct(Application $app, Dispatcher $events, SaveService $saveService)
    {
        parent::__construct($app, $events);
        $this->saveService = $saveService;
    }

    protected $commands = [
        Commands\PlotController::class,
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function (){
            $this->saveService->request();
        })->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
