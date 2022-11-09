<?php

use App\Http\Controllers\PhongController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/admin'],function() {
    Route::group(['prefix' => '/phong'], function() {
        Route::get('/index', [PhongController::class, 'index']);
        Route::post('/index', [PhongController::class, 'store']);
    });
});
