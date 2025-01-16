<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoblesController;

Auth::routes(['register' => false]);

// Redirect the root `/` to the index method
Route::get('/', [PoblesController::class, 'index'])->name('index');

// Define other resourceful routes manually
Route::get('/create', [PoblesController::class, 'create'])->name('create')->middleware('auth');
Route::post('/', [PoblesController::class, 'store'])->name('store');
Route::get('/{id}', [PoblesController::class, 'show'])->name('show');
Route::get('/{id}/edit', [PoblesController::class, 'edit'])->name('edit');
Route::put('/{id}', [PoblesController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/{id}', [PoblesController::class, 'destroy'])->name('destroy')->middleware('auth');
