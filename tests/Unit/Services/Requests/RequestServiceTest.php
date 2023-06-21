<?php

namespace Services\Requests;

use App\Services\Requests\Cadastral\CadastralRequest;
use GuzzleHttp\Exception\GuzzleException;
use Tests\TestCase;

class RequestServiceTest extends TestCase
{
    /**
     * @throws GuzzleException
     */
    public function testRequestSendsCorrectData()
    {
        $request = new CadastralRequest();
        $response = $request->execute();
        $this->assertNotEmpty($response);
    }
}
