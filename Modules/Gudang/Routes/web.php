<?php

use Illuminate\Support\Facades\Route;
use Modules\Gudang\Http\Controllers\GudangController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('gudangs', GudangController::class)->names('gudang');
});
