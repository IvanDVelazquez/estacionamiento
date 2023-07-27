<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GarageController::class, 'index'])->name('index');

Route::get('/car', [CarController::class, 'index'])->name('car.index');
Route::get('/car/create', [CarController::class, 'create'])->name('car.create');
Route::post('/car/store', [CarController::class, 'store'])->name('car.store');
Route::get('/car/edit/{car}', [CarController::class, 'edit'])->name('car.edit');
Route::put('/car/update/{car}', [CarController::class, 'update'])->name('car.update');
Route::get('/car/show/{car}', [CarController::class, 'show'])->name('car.show');
Route::delete('/car/destroy/{car}', [CarController::class, 'destroy'])->name('car.destroy');


Route::get('/garage', [GarageController::class, 'index'])->name('garage.index');
Route::get('/garage/create', [GarageController::class, 'create'])->name('garage.create');
Route::post('/garage/store', [GarageController::class, 'store'])->name('garage.store');
Route::get('/garage/edit/{garage}', [GarageController::class, 'edit'])->name('garage.edit');
Route::put('/garage/update/{garage}', [GarageController::class, 'update'])->name('garage.update');
Route::get('/garage/show/{garage}', [GarageController::class, 'show'])->name('garage.show');
Route::delete('/garage/destroy/{garage}', [GarageController::class, 'destroy'])->name('garage.destroy');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{user}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/show/{user}', [UserController::class, 'show'])->name('user.show');
Route::delete('/user/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');