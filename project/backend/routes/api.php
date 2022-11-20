<?php

use App\Services\FastReportService;
//use App\Services\KladrLocationService;
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

Route::get('/get-file', function (Request $request, FastReportService $service) {
//    $json = json_decode($request->getContent(), true);
    $service->setDocType('3-ndfl');

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
        "incomeCode001" => "12",
        "incomeSum010" => "12345.56",
        "totalTaxSumToPay070" => "1234512",
        "noTaxedIncomeSum020" => "64213.12",
        "taxedIncomeSum030" => "321523.78",
        "taxReturnSum040" => "213213.45",
        "taxReduceSum050" => "15415.67",
        "taxBase060" => "213124.23",
        "taxBaseSumSecondPoint061" => "632432.13",
        "taxBaseSumThirdPoint062" => "214512.67",
        "otherTaxBases063" => "595984.45",
    ];

    $formData1 = [
        "actNumber" => "1",
        "actDate" => "2022-10-10",
        "executorCompanyFormat" => "ООО",
        "executorCompanyName" => "\"Рабочие Решения\"",
        "executorINN" => "7838887898",
        "executorKPP" => "565001001",
        "executorCompanyLocation" => "398024, Липецк, ул Гоголя, дом 48",
        "executorCheckingAccount" => "21474836478364783815 в банке ФСКБ ПРИМОРЬЯ \"ПРИМСОЦБАНК\" В Г.ОМСКЕ, БИК 045209844, к/с 30101810700000000844",
        "representativePosition" => "Генеральный директор",

        "clientCompanyFormat" => "ОАО",
        "clientCompanyName" => "\"БОП\"",
        "clientINN" => "7701960763",
        "clientKPP" => "770101002",
        "clientCompanyLocation" => "г Москва, Спартаковская пл, д 10 стр 10",

        "reason" => "Счет № 1 от 20.10.2022",

        "servicesTable" => [
            [
            "serviceName" => "Уборка",
            "serviceAmount" => "1",
            "serviceMeasurement" => "шт.",
            "servicePrice" => "1000",
            "serviceCost" => "833",
            "NDS" => "13",
            ],
            [
                "serviceName" => "Уборка",
                "serviceAmount" => "1",
                "serviceMeasurement" => "шт.",
                "servicePrice" => "1000",
                "serviceCost" => "833",
                "NDS" => "13",
            ]
        ],

        "commentary" => " Вышеперечисленные услуги выполнены полностью и в срок. Заказчик претензий по объему, качеству и срокам оказания услуг не имеет"
    ];

    $service->setFormData($formData);
    $service->setFormat('pdf');
    $service->setFileName('ЯНеАнимечник');

    $service->getFileContent();
});
Route::get('/get-inn', function (\App\Services\InnService $innService, Request $request) {
    $params = json_decode($request->getContent(), true);

    $newParams = [];

    $newParams['fam'] = $params['lastName'];
    $newParams['nam'] = $params['name'];
    $newParams['otch'] = $params['patronymic'];
    $newParams['bdate'] = date('d.m.Y', strtotime((string)$params['birthday']));

    $newParams['docno'] = substr($params['passport'], 0, 2) . " " . substr($params['passport'], 2, 9);

    return $innService->getInn($newParams);
});


