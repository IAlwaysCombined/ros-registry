<?php

use App\Http\Controllers\Web\PlotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plots', PlotController::class)->name('show-data');
