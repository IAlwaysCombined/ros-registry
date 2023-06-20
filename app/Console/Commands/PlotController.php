<?php

namespace App\Console\Commands;

use App\Services\Plot\PlotService;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;

class PlotController extends Command
{
    private PlotService $plotService;

    /**
     * @param PlotService $plotService
     */
    public function __construct(PlotService $plotService)
    {
        parent::__construct();
        $this->plotService = $plotService;
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:plot-controller {cadastralNumbers?*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get list plot form database';

    /**
     * Execute the console command.
     * @throws GuzzleException
     */
    public function handle(): int
    {
        $cadastralNumbers = $this->argument('cadastralNumbers');

        $plots = $this->plotService->view($cadastralNumbers);

        $headers = ['Id', 'Cadastral number', 'Address', 'Price', 'Area'];
        $rows = [];

        foreach ($plots as $plot) {
            $rows[] = [
                'id' => $plot['id'],
                'cadastral_number' => $plot['cadastral_number'],
                'address' => $plot['address'],
                'price' => $plot['price'],
                'area' => $plot['area'],
            ];
        }

        $this->table($headers, $rows);

        return 0;
    }
}
