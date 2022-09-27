<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controllers;

Route::get('/', [Controllers\CalcController::class, 'index'])->name('index');
Route::post('/calc', [Controllers\CalcController::class, 'calc'])->name('calc');
