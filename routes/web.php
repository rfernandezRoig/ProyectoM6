<?php

use App\Http\Controllers\CatalunyaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CatalunyaController::class, 'index']);

Auth::routes();

Route::resource('catalunya', CatalunyaController::class);