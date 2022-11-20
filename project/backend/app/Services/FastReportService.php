<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class FastReportService
{
    private string $format;
    private Client $client;
    private string $apiKey;
    private string $fileName;
    private string $docType;
    private array $formData;

    const METHOD_GET = "GET";
    const METHOD_POST = "POST";
    const API_KEY_PREFIX = 'apikey:';

    const DOMAIN = 'https://fastreport.cloud';

    const GET_SUBSCRIPTIONS_URL = '/api/manage/v1/Subscriptions';
    const GET_ROOT_TEMPLATE_FOLDER_URL = '/api/rp/v1/Templates/Root';
    const GET_ROOT_EXPORT_FOLDER_URL = '/api/rp/v1/Exports/Root';
    const GET_TEMPLATE_CREATE_URL = '/api/rp/v1/Templates/Folder/{id}/File';
    const EXPORT_REPORT_URL = '/api/rp/v1/Templates/File/{id}/Export';
    const EXPORT_STATUS_URL = '/api/rp/v1/Exports/File/{id}';
    const DOWNLOAD_URL = '/download/e/{id}';

    const STATUS_SUCCESS = 'Success';
    const STATUS_FAILED = 'Failed';

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->apiKey = $this->getApiKeyEncoded(config('app.fastReportsApiKey'));
    }

    public function setFormat(string $format): void
    {
        $this->format = $format;
    }

    public function setDocType(string $docType): void
    {
         $this->docType = $docType;
    }

    public function setFormData(array $formData): void
    {
        $this->formData = $formData;
    }

    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }

    public function getFileContent()
    {
        $subscriptionId = $this->getSubscriptionId();
        $rootTemplateFolderId = $this->getRootFolderId($subscriptionId, self::GET_ROOT_TEMPLATE_FOLDER_URL);
        $rootExportFolderId = $this->getRootFolderId($subscriptionId, self::GET_ROOT_EXPORT_FOLDER_URL);
        $formData = $this->formData;

        $templateFileContent = base64_encode(
            '<?xml version="1.0" encoding="utf-8"?>' . view('fastReport.' . $this->docType . '-template', compact('formData'))->render()
        );

        $templateId =  $this->createTemplate($rootTemplateFolderId, $templateFileContent);
        $exportFileId = $this->exportFile($rootExportFolderId, $templateId);

        while (($status = $this->getExportStatus($exportFileId)) != self::STATUS_SUCCESS) {
            if ($status == self::STATUS_FAILED) break;
            sleep(5);
        }

        header('Allowed-Hosts: *');
        header('Access-Control-Allow-Origin: *');

        return $this->downloadFile($exportFileId);
    }

    private function getApiKeyEncoded(string $apiKey): string
    {
        return base64_encode(self::API_KEY_PREFIX . $apiKey);
    }

    private function getSubscriptionId():string
    {
        $subscriptions = $this->sendRequest(self::METHOD_GET, $this->getFullUrl(self::GET_SUBSCRIPTIONS_URL))['subscriptions'];

        return $subscriptions[0]['id'];
    }

    private function getRootFolderId(string $subscriptionId, string $url): string
    {
        $folder = $this->sendRequest(self::METHOD_GET, $this->getFullUrl($url), [
            'subscriptionId' => $subscriptionId
        ]);

        return $folder['id'];
    }

    private function createTemplate(string $folderId, string $templateFileContent)
    {
        $url = str_replace('{id}', $folderId, self::GET_TEMPLATE_CREATE_URL);

        $template = $this->sendRequest(self::METHOD_POST, $this->getFullUrl($url), json_encode([
            'name' => $this->fileName,
            'content' => $templateFileContent
        ]));

        return $template['id'];
    }

    private function exportFile(string $folderId, string $templateId): string
    {
        $url = str_replace('{id}', $templateId, self::EXPORT_REPORT_URL);

        $exportFile = $this->sendRequest(self::METHOD_POST, $this->getFullUrl($url), json_encode([
            "fileName" => $this->fileName,
            "folderId" => $folderId,
            "pagesCount" => 10,
            "format" => $this->format
        ]));

        return $exportFile['id'];
    }

    private function getExportStatus(string $exportId)
    {
        $url = str_replace('{id}', $exportId, self::EXPORT_STATUS_URL);

        $exportFile = $this->sendRequest(self::METHOD_GET, $this->getFullUrl($url));

        return $exportFile['status'];
    }

    private function downloadFile(string $fileId): string
    {
        $url = str_replace('{id}', $fileId, $this->getFullUrl(self::DOWNLOAD_URL));

        return $this->client->request(self::METHOD_GET, $url, [
            'headers' => [
                'Authorization' => 'Basic ' . $this->apiKey,
                'Content-Type' => 'application/json',
                "Accept" => 'application/json',
            ],
        ] )->getBody()->getContents();
    }

    private function getFullUrl(string $url): string
    {
        return self::DOMAIN . $url;
    }

    private function sendRequest(string $method, string $url, array|string $body=null)
    {
        $params = [
            'headers' => [
                'Authorization' => 'Basic ' . $this->apiKey,
                'Content-Type' => 'application/json',
                "Accept" => 'application/json',
            ],
        ];

        if ($body) {
            $params[$method == self::METHOD_GET  ? 'params' : 'body'] = $body;
        }

        return json_decode($this->client->request($method, $url, $params)->getBody()->getContents(), true);
    }
}
