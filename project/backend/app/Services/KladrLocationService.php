<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class KladrLocationService implements LocationServiceInterface
{
    public const METHOD = 'GET';

    private Client $client;
    private string $queryParams;

    private string $apiKey;
    private string $url;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $config = config('app.locationApiConfig');

        $this->apiKey = $config['apiKey'];
        $this->url = $config['url'];
    }

    public function load(string $queryParams): void
    {
        $this->queryParams = $queryParams;
    }

    /**
     * @throws GuzzleException
     */
    public function getLocation(): string
    {
        $result = $this->client->request(self::METHOD, $this->getUrl())->getBody();
        $result =

        return $result->getBody();
    }

    private function getUrl(): string
    {
        return $this->url . '?' . $this->queryParams . '&token=' . $this->apiKey;
    }

    private function unsetFreeItem(string $result)
    {

    }
}
