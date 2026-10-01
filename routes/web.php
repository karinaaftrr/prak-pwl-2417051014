<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class, 'profile']);

Route::get('/user/create', [UserController::class, 'create'])
    ->name('user.create');

Route::post('/user', [UserController::class, 'store'])
    ->name('user.store');

Route::get('/user', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])
    ->name('user.edit');

Route::put('/user/{id}', [UserController::class, 'update'])
    ->name('user.update');

Route::delete('/user/{id}', [UserController::class, 'destroy'])
    ->name('user.destroy');