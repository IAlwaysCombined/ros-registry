<?php

namespace App\Services\Requests\Cadastral;

use App\Services\Requests\BaseRequest;

class CadastralRequest extends BaseRequest
{
    protected string $url;

    protected array $options;

    public function __construct()
    {
        $this->url = 'https://api.pkk.bigland.ru/test/plots';
        $this->options = [
            'collection' => [
                'plots' => [
                    "69:27:0000022:1306",
                    "69:27:0000022:1307"
                ]
            ]
        ];
    }
}
