<?php

use App\Services\FastReportService;
use App\Services\InnService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/get-file', function (Request $request, FastReportService $service) {
    $json = json_decode($request->getContent(), true);
    $service->setDocType($json['docType']);
    $service->setFormData($json['formData']);
    $service->setFormat($json['format']);
    $service->setFileName($json['fileName']);

    return $service->getFileContent();
});
Route::get('/get-inn', function (InnService $innService, Request $request) {
    $params = json_decode($request->getContent(), true);

    $newParams = [];

    $newParams['fam'] = $params['lastName'];
    $newParams['nam'] = $params['name'];
    $newParams['otch'] = $params['patronymic'];
    $newParams['bdate'] = date('d.m.Y', strtotime((string)$params['birthday']));

    $newParams['docno'] = substr($params['passport'], 0, 2) . " " . substr($params['passport'], 2, 9);

    return $innService->getInn($newParams);
});


