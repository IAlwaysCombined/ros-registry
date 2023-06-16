<?php

namespace App\Console\Commands;

use App\Models\Plot;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Collection;

class CadastralController extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cadastral-controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get list cadastral form database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        return Plot::all();
    }
}
