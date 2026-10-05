<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MataKuliahController;

Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class, 'profile']);
Route::get('/matakuliah', [MataKuliahController::class, 'index']);

Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])
    ->name('matakuliah.create');

Route::post('/matakuliah', [MataKuliahController::class, 'store'])
    ->name('matakuliah.store');