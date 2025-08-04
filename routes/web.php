<?php

use App\Http\Controllers\Ana\MainController;
use App\Http\Controllers\MainController as ControllersMainController;
use Illuminate\Support\Facades\Route;

Route::prefix('/ana')->name('ana.')->controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::post('/ucapan', 'storeUcapan')->name('ucapan.store');
    Route::get('/ucapan', 'getUcapans')->name('ucapan.get');
    Route::get('/to/{name}', 'getName')->name('invitation.name');
});


// MAIN VIEW
Route::controller(ControllersMainController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});
