<?php

use App\Http\Controllers\BarcelonaController;
use App\Http\Controllers\GironaController;
use App\Http\Controllers\LleidaController;
use App\Http\Controllers\TarragonaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tarragonas', [TarragonaController::class, 'index'])->name('tarragonas.index');
Route::get('/barcelonas', [BarcelonaController::class, 'index'])->name('barcelonas.index');
Route::get('/gironas', [GironaController::class, 'index'])->name('gironas.index');
Route::get('/lleidas', [LleidaController::class, 'index'])->name('lleidas.index');

Route::resource('tarragona', TarragonaController::class);
Route::resource('barcelona', BarcelonaController::class);
Route::resource('lleida', LleidaController::class);
Route::resource('girona', GironaController::class);