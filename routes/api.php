<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PobleAPIController;
use App\Http\Middleware\VerifyAccessKey;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('poble', [PobleAPIController::class, 'index']);
Route::get('poble/{poble}', [PobleAPIController::class, 'show']);
Route::post('poble', [PobleAPIController::class, 'store'])->middleware(VerifyAccessKey::class);
Route::put('poble/{poble}', [PobleAPIController::class, 'update'])->middleware(VerifyAccessKey::class);
Route::delete('poble/{poble}', [PobleAPIController::class, 'destroy'])->middleware(VerifyAccessKey::class);
