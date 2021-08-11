<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

// Calcular a soma máxima da sublista
Route::post('/', [ListController::class, 'maxSumList']);

