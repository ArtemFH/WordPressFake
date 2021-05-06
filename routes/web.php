<?php

use Illuminate\Support\Facades\Route;

Route::name('home.')->group(function () {
    Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('head');
});

//Route::name('home.')->group(function () {
//    Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('head');
//});
