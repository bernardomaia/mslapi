<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

// Rota com a função maxSumList
Route::post('/', [ListController::class, 'maxSumList']);

