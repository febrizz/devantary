<?php

use Illuminate\Support\Facades\Route;
use Modules\StockOpname\Http\Controllers\StockOpnameController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('stockopnames', StockOpnameController::class)->names('stockopname');
});
