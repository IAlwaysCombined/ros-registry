<?php

use App\Http\Controllers\Web\PlotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastral', PlotController::class);
