<?php

namespace App\Services\Requests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

abstract class BaseRequest
{
    private string $url;
    private array $options;

    /**
     * @return array
     * @throws GuzzleException
     */
    public function execute(): array
    {
        $client = new Client();

        $response = $client
            ->get($this->url, ['form_params' => $this->options])
            ->getBody()
            ->getContents();

        return json_decode($response, true);
    }

    /**
     * @param string $url
     * @return void
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @param array $options
     * @return void
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }
}
