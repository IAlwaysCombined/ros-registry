<?php

use App\Http\Controllers\Api\CadastralController;
use Illuminate\Support\Facades\Route;

Route::get('/list', CadastralController::class);
