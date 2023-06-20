<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlotResource;
use App\Services\Plot\Interfaces\PlotInterface;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PlotController extends Controller
{
    private PlotInterface $cadastral;

    /**
     * @param PlotInterface $cadastral
     */
    public function __construct(PlotInterface $cadastral)
    {
        $this->cadastral = $cadastral;
    }

    /**
     * @return AnonymousResourceCollection
     */
    public function __invoke(): AnonymousResourceCollection
    {
        return PlotResource::collection(
            $this->cadastral->index()
        );
    }
}
