<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Plot\Interfaces\PlotInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PlotController extends Controller
{
    private PlotInterface $plotService;

    /**
     * @param PlotInterface $plotService
     */
    public function __construct(PlotInterface $plotService)
    {
        $this->plotService = $plotService;
    }

    /**
     * @param Request $request
     * @return View|\Illuminate\Foundation\Application|Factory|Application
     */
    public function __invoke(Request $request): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $cadastralNumber = $request->input('cadastral_number');
        $plots = $this->plotService->view(explode(',', str_replace(' ', '',$cadastralNumber)));
        return view('show', ['plots' => $plots]);
    }
}
