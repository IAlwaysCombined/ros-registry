<?php

namespace App\Services\Requests\Cadastral;

use App\Services\Requests\BaseRequest;

class CadastralRequest extends BaseRequest
{
    private array $plotIds = ['69:27:0000022:1306', '69:27:0000022:1307'];

    const BID_LAND_URL = 'https://api.pkk.bigland.ru/test/plots';

    public function __construct()
    {
        $this->setUrl(self::BID_LAND_URL);
        $this->setOptions([
            'collection' => [
                'plots' => $this->plotIds
            ]
        ]);
    }
}
