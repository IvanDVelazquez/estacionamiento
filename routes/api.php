<?php

use App\Http\Controllers\CarApiController;
use App\Http\Controllers\GarageApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/car',CarApiController::class);
Route::resource('/garage', GarageApiController::class);

