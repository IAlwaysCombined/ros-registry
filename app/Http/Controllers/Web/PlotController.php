<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Plot;
use App\Services\Plot\Interfaces\PlotInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PlotController extends Controller
{
    private PlotInterface $cadastral;

    public function __construct(PlotInterface $cadastral)
    {
        $this->cadastral = $cadastral;
    }

    public function __invoke(Request $request): View|\Illuminate\Foundation\Application|Factory|Application
    {
        /** @var Plot $results */
        $results = $this->cadastral->view($request->input('cadastral_number'));

        return view('cadastral');
    }
}