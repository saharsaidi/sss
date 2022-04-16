<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SalarieController;



Route::prefix('salarie')->group(function () {
    Route::get('/',[ SalarieController::class, 'getAll']);
    Route::post('/',[ SalarieController::class, 'create']);
    Route::delete('/{id}',[ SalarieController::class, 'delete']);
    Route::get('/{id}',[ SalarieController::class, 'get']);
    Route::put('/{id}',[ SalarieController::class, 'update']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
