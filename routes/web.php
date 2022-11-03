<?php

use App\Http\Controllers\SensorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SensorController::class, 'index'])->name('sensors.index');
Route::get('/sensors', [SensorController::class, 'sensors'])->name('sensors.sensors');
