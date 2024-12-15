<?php

use App\Http\Controllers\AccommodationController;

Route::get('/accommodations', [AccommodationController::class, 'index']);
Route::get('/cetak', [AccommodationController::class, 'cetak']);
Route::post('/accommodations', [AccommodationController::class, 'store'])->name('accommodations.store');