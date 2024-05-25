<?php

// File: routes/web.php

use Illuminate\Support\Facades\Route;
use Vendor\PaperRockScissorsGame\Http\Controllers\PaperRockScissorsController;
Auth::routes();
Route::group(['namespace' => 'Vendor\PaperRockScissorsGame\Http\Controllers'], function() {
    Route::get('play', [PaperRockScissorsController::class, 'play'])->name('play');
    Route::post('play', [PaperRockScissorsController::class, 'playGame'])->name('play.game');
    Route::get('dashboard', [PaperRockScissorsController::class, 'dashboard'])->name('dashboard');
});
