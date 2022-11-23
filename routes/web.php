<?php

use App\Http\Controllers\PhimController;
use App\Http\Controllers\PhongController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/admin'],function() {
    Route::group(['prefix' => '/phong'], function() {
        Route::get('/index', [PhongController::class, 'index']);
        Route::get('/data', [PhongController::class, 'getData']);
        Route::post('/index', [PhongController::class, 'store']);
        Route::post('/update', [PhongController::class, 'update']);

        Route::get('/change-status/{id}', [PhongController::class, 'changeStatus']);
        Route::get('/delete/{id}', [PhongController::class, 'destroy']);
        Route::get('/edit/{id}', [PhongController::class, 'edit']);
    });

    Route::group(['prefix' => '/phim'], function() {
        Route::get('/index', [PhimController::class, 'index']);
        Route::post('/create', [PhimController::class, 'store']);

        Route::get('/data' , [PhimController::class, 'getData']);
    });

});
