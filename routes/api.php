<?php

use App\Http\Controllers\Api\PlotController;
use Illuminate\Support\Facades\Route;

Route::get('/list', PlotController::class);
