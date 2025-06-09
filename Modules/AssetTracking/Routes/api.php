<?php

use Illuminate\Support\Facades\Route;
use Modules\AssetTracking\Http\Controllers\AssetTrackingController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('assettrackings', AssetTrackingController::class)->names('assettracking');
});
