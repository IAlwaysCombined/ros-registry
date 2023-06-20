<?php

namespace App\Services\Plot;

use App\Models\Plot;
use App\Services\Plot\Interfaces\PlotInterface;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Eloquent\Collection;

class PlotService implements PlotInterface
{
    private SaveService $saveService;

    /**
     * @param SaveService $saveService
     */
    public function __construct(SaveService $saveService)
    {
        $this->saveService = $saveService;
    }

    /**
     * @return Collection|array
     * @throws GuzzleException
     */
    public function index(): Collection|array
    {
        $plots = Plot::all();

        if ($plots->isEmpty()) {
            $this->saveService->request();
            $plots = Plot::all();
        }

        return $plots;
    }

    /**
     * @param array $cadastralNumbers
     * @return array
     * @throws GuzzleException
     */
    public function view(array $cadastralNumbers): array
    {
        $plots = Plot::query()
            ->whereIn('cadastral_number', $cadastralNumbers)
            ->get();

        if ($plots->isEmpty()) {
            $this->saveService->request();
            $plots = Plot::query()
                ->whereIn('cadastral_number', $cadastralNumbers)
                ->get();
        }

        return $plots->toArray();
    }
}
