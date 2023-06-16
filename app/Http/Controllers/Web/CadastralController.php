<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Cadastral\Interfaces\CadastralInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CadastralController extends Controller
{
    private CadastralInterface $cadastral;

    public function __construct(CadastralInterface $cadastral)
    {
        $this->cadastral = $cadastral;
    }

    public function __invoke(Request $request): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $results = $this->cadastral->view($request->get('id'));

        return view('cadastral', [
            'results' => $results
        ]);
    }
}
