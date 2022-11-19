<?php

use App\Services\KladrLocationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/location', function (Request $request, KladrLocationService $service) {
//    $service->load($request->getQueryString());
//
//    return var_dump(json_decode($service->getLocation()));
//});

Route::get('/get-ndfl', function () {
    $formData = [
        'INN' => '614408168401',
        'correctionNumber' => '123',
        'taxPeriodCode' => '07',
        'reportingYear' => '2022',
        'providedToTheTaxCode' => '1234',
        'countryCode' => '123',
        'codeCategoryTaxpayer' => '321',
        'lastName' => 'Test1234',
        'name' => 'Юрий',
        'patronymic' => 'Testing',
        'birthday' => '2011-10-05T14:48:00.000Z',
        'codeDocumentType' => '01',
        'passport' => '1234567890',
        'codeStatusTaxpayer' => '1',
        'phoneNumber' => '89514971907',
        'presentTaxpayer' => '1',
        'presentTaxpayerLastName' => 'Человек',
        'presentTaxpayerName' => 'Молодой',
        'presentTaxpayerPatronymic' => 'Молодющий',
        "codeBudgetClassification020" => "1234567890123456",
        "codeOKTMO030" => "12345678901",
        "sumTaxesForPayToBudget040" => "1234567890112",
        "sumTaxesForReturnFromBudget050" => "1234567890112",
        "codeBudgetClassification060" => "1234567890123456",
        "codeOKTMO070" => "12345678901",
        "sumAdvancedPaymentFirstQuarter080" => "1234567890112",
        "codeOKTMO090" => "12345678901",
        "sumAdvancedPaymentHalfYear100" => "1234567890112",
        "sumAdvancedDecreaseHalfYear110" => "1234567890112",
        "codeOKTMO120" => "12345678901",
        "sumAdvancedPayedNineMonth130" => "1234567890112",
        "sumAdvancedDecreaseNineMonth140" => "1234567890112",
        "codeOKTMO150" => "12345678901",
        "sumAdvancedPayedYear160" => "1234567890112",
        "sumAdvancedDecreaseYear170" => "1234567890112",
    ];
    dd(base64_encode('<?xml version="1.0" encoding="utf-8"?>' . view('fastReport.3-ndfl-template', compact('formData'))->render()));
});

Route::get('/test', function (\App\Services\InnService $innService) {
    $params = [
        'fam' => 'Смирнов',
        'nam' => 'Юрий',
        'otch' => 'Николаевич',
        'bdate' => '2003-12-09T14:48:00.000Z',
        'docno' => '6017241956'
    ];

    $params['bdate'] = date('d.m.Y', strtotime((string)$params['bdate']));

    $params['docno'] = substr($params['docno'], 0, 2) . " " . substr($params['docno'], 2, 2) . " " . substr($params['docno'], 4, 6);

    return $innService->getInn($params);
});


