<?php

namespace App\Services\Cadastral;

use App\Http\Dto\PlotDto;
use App\Models\Plot;

class ToModelService
{
    public static function save(PlotDto $dto): void
    {
        Plot::query()->where('cadastral_number', $dto->number)->delete();

        Plot::query()->create([
            'cadastral_number' => $dto->number,
            'address' => $dto->address,
            'price' => $dto->price,
            'area' => $dto->area,
        ]);
    }
}
