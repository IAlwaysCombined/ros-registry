<?php

use App\Http\Controllers\Web\CadastralController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastral', CadastralController::class);
