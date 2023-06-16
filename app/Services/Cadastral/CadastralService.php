<?php

namespace App\Services\Cadastral;

use App\Models\Plot;
use App\Services\Cadastral\Interfaces\CadastralInterface;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CadastralService implements CadastralInterface
{
    /**
     * @return Collection|array
     * @throws GuzzleException
     */
    public function index(): Collection|array
    {
        $plots = Plot::query()->get();

        if ($plots->isEmpty()){
            PlotsService::update();
        }

        return Plot::query()->get();
    }

    /**
     * @param int $id
     * @return Model|Collection|Builder|array|null
     */
    public function view(int $id): Model|Collection|Builder|array|null
    {
        $plot = Plot::query()->findOrFail($id);

        return Plot::query()->findOrFail($id);
    }
}
