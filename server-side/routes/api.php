<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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

Route::apiResource('mesures', MesuresController::class)->middleware('cors');
Route::apiResource('history', HistoryController::class)->middleware('cors');
Route::apiResource('module', ModuleController::class)->middleware('cors');
Route::apiResource('type', TypeController::class)->middleware('cors');
Route::apiResource('generate', GeneratorController::class)->middleware('cors');
