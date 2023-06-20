<?php

namespace App\Services\Plot;

use App\Http\Dto\PlotDto;
use App\Models\Plot;
use App\Services\Requests\Cadastral\CadastralRequest;
use GuzzleHttp\Exception\GuzzleException;

class SaveService
{
    private CadastralRequest $cadastralRequest;

    /**
     * @param CadastralRequest $cadastralRequest
     */
    public function __construct(CadastralRequest $cadastralRequest)
    {
        $this->cadastralRequest = $cadastralRequest;
    }

    /**
     * @return void
     * @throws GuzzleException
     */
    public function request(): void
    {
        foreach ($this->cadastralRequest->execute() as $result) {
            $dto = PlotDto::fromResponse($result);
            $this->updatePlot($dto);
        }
    }

    /**
     * @param PlotDto $dto
     * @return void
     */
    public function updatePlot(PlotDto $dto): void
    {
        $plot = Plot::query()
            ->where('cadastral_number', $dto->number)
            ->first();

        if ($plot) {
            $plot->update([
                'address' => $dto->address,
                'price' => $dto->price,
                'area' => $dto->area,
            ]);
        } else {
            Plot::query()->create([
                'cadastral_number' => $dto->number,
                'address' => $dto->address,
                'price' => $dto->price,
                'area' => $dto->area,
            ]);
        }
    }
}
