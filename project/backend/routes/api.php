<?php

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

Route::get('/get-ndfl', function () {
    dd( '<?xml version="1.0" encoding="utf-8"?>' . view('fastReport.3-ndfl-template')->render());
});


