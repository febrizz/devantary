<?php

use Illuminate\Support\Facades\Route;
use Modules\AssetTracking\Http\Controllers\AssetTrackingController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('assettrackings', AssetTrackingController::class)->names('assettracking');
});
