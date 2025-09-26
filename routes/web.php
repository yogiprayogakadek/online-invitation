<?php

use App\Http\Controllers\Ana\MainController;
use App\Http\Controllers\Ferry\MainController as FerryMainController;
use App\Http\Controllers\MainController as ControllersMainController;
use App\Http\Controllers\Mikrotik\MainController as MikrotikMainController;
use Illuminate\Support\Facades\Route;

Route::prefix('/ana')->name('ana.')->controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::post('/ucapan', 'storeUcapan')->name('ucapan.store');
    Route::get('/ucapan', 'getUcapans')->name('ucapan.get');
    Route::get('/to/{name}', 'getName')->name('invitation.name');
});

Route::prefix('/ferry-adel')->name('ferry-adel.')->controller(FerryMainController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::post('/ucapan', 'store')->name('ucapan.store');
    Route::get('/comment', 'getComment')->name('comment.get');
    Route::get('/to/{name}', 'getName')->name('invitation.name');
});


// MAIN VIEW
Route::controller(ControllersMainController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// // MIKROTIK
// Route::prefix('/mikrotik')->name('mikrotik.')->controller(MikrotikMainController::class)->group(function () {
//     Route::get('/', 'index')->name('index');
// });
