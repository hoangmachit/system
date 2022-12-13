<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DesignController;
use App\Http\Controllers\Api\DomainController;
use App\Http\Controllers\Api\HostingController;
use App\Http\Controllers\Api\ContractController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("design", DesignController::class);
Route::apiResource("hosting", HostingController::class);
Route::apiResource("domain", DomainController::class);
Route::apiResource("contract", ContractController::class);
