<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CadastralResource;
use App\Services\Cadastral\Interfaces\CadastralInterface;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CadastralController extends Controller
{
    private CadastralInterface $cadastral;

    /**
     * @param CadastralInterface $cadastral
     */
    public function __construct(CadastralInterface $cadastral)
    {
        $this->cadastral = $cadastral;
    }

    /**
     * @return AnonymousResourceCollection
     */
    public function __invoke(): AnonymousResourceCollection
    {
        return CadastralResource::collection(
            $this->cadastral->index()
        );
    }
}
