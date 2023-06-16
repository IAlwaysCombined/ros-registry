<?php

namespace App\Services\Requests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

abstract class BaseRequest
{
    protected string $url;

    protected array $options;

    /**
     * @return string
     * @throws GuzzleException
     */
    public function execute(): string
    {
        $client = new Client();

        return $client
            ->get($this->url, ['form_params' => $this->options])
            ->getBody()
            ->getContents();
    }
}
