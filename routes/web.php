<?php

use App\Http\Controllers\PhimController;
use App\Http\Controllers\PhongController;
use App\Http\Controllers\TestController;
use App\Models\Phong;
use Illuminate\Support\Facades\Route;


Route::get('/', [TestController::class, 'index']);
Route::get('/test', [TestController::class, 'jquery']);

Route::group(['prefix' => '/admin'],function() {
    Route::group(['prefix' => '/phong'], function() {
        Route::get('/index', [PhongController::class, 'index']);
        Route::get('/data', [PhongController::class, 'getData']);
        Route::post('/index', [PhongController::class, 'store']);
        Route::post('/update', [PhongController::class, 'update']);

        Route::get('/change-status/{id}', [PhongController::class, 'changeStatus']);
        Route::get('/delete/{id}', [PhongController::class, 'destroy']);
        Route::get('/edit/{id}', [PhongController::class, 'edit']);

        Route::get('/data-ghe/{id_phong}', [PhongController::class, 'getDataGhe']);
    });

    Route::group(['prefix' => '/phim'], function() {
        Route::get('/index', [PhimController::class, 'index']);
        Route::post('/create', [PhimController::class, 'store']);
        Route::get('/data' , [PhimController::class, 'getData']);

        Route::get('/index-vue', [PhimController::class, 'indexVue']);
        Route::post('/index-vue', [PhimController::class, 'storeVue']);

        Route::post('/delete', [PhimController::class, 'destroy']);
        Route::post('/update', [PhimController::class, 'update']);
    });

});

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
