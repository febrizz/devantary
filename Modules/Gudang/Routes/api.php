<?php

use Illuminate\Support\Facades\Route;
use Modules\Gudang\Http\Controllers\GudangController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('gudangs', GudangController::class)->names('gudang');
});
