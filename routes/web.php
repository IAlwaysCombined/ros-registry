<?php

use App\Http\Controllers\Web\PlotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/plots', PlotController::class)->name('show-data');
