<?php

use App\Services\FastReportService;
use App\Services\KladrLocationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/location', function (Request $request, KladrLocationService $service) {
    $service->load($request->getQueryString());

    return var_dump(json_decode($service->getLocation()));
});

Route::post('/get-file', function (Request $request, FastReportService $service) {
    $json = json_decode($request->getContent(), true);
    $service->setDocType($json['docType']);
    $service->setFormData($json['formData']);
    $service->setFormat($json['format']);
    $service->setFileName($json['fileName']);

    $service->getFileContent();
});


