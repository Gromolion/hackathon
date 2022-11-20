<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JetBrains\PhpStorm\ArrayShape;
use PHPUnit\Util\Exception;
use Psr\Http\Message\ResponseInterface;

class InnService implements InnServiceInterface
{

    private Client $client;
    private string $requestIdUrl;
    private string $innUrl;

    private const PARAMS_FOR_REQUEST_ID = [
        'c' => 'find',
        'captcha' => '',
        'captchaToken' => '',
        'doctype' => '21',
    ];

    private const PARAMS_FOR_INN = [
        'c' => 'get',
    ];

    private const METHOD = 'POST';

    public function __construct(Client $client)
    {
        $this->client = $client;

        $config = config('app.innApiConfig');
        $this->requestIdUrl = $config['requestIdUrl'];
        $this->innUrl = $config['innUrl'];

    }

    #[ArrayShape(['Content-Type' => "string"])]
    private function getHeaders(): array
    {
        return ['Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8'];
    }


    /**
     * @throws GuzzleException
     */
    public function getInn(array $params): ?string
    {

        $requestId = $this->getRequestId($params);

        if (!$requestId) {
            throw new Exception();
        }
        sleep(3);

        return $this->validateInn($requestId);
    }

    /**
     * @throws GuzzleException
     */
    private function getRequestId(array $params): string
    {
        $params = array_merge($params, self::PARAMS_FOR_REQUEST_ID);

        $response = $this->client->request('POST', $this->requestIdUrl, [
            'headers' => $this->getHeaders(),
            'form_params' => $params
        ]);

        return $this->getResultValueFromResponseByName($response, 'requestId');
    }

    private function getResultValueFromResponseByName(ResponseInterface $response, string $name): ?string
    {
        return json_decode($response->getBody(), true)[$name] ?? null;
    }

    /**
     * @throws GuzzleException
     */
    private function validateInn(string $requestId): ?string
    {
        $params = self::PARAMS_FOR_INN;
        $params['requestId'] = $requestId;

        $response = $this->client->request(self::METHOD, $this->innUrl, [
            'headers' => $this->getHeaders(),
            'form_params' => $params
        ]);

        return $this->getResultValueFromResponseByName($response, 'inn');
    }
}
