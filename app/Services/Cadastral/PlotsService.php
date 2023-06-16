<?php

namespace App\Services\Cadastral;

use App\Http\Dto\PlotDto;
use App\Services\Requests\Cadastral\CadastralRequest;
use GuzzleHttp\Exception\GuzzleException;

class PlotsService
{
    /**
     * @return void
     * @throws GuzzleException
     */
    public static function update(): void
    {
        $request = new CadastralRequest();
        $results = json_decode($request->execute());
        foreach ($results as $result){
            $dto = PlotDto::fromResponse($result);
            ToModelService::save($dto);
        }
    }
}
