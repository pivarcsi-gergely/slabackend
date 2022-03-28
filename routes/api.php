<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\FighterController;
use App\Http\Controllers\UserController;
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

Route::post('/users/login', [UserController::class, 'login']);
Route::post('/users/register', [UserController::class, 'store'])

Route::apiResource('/cards', CardController::class);
Route::apiResource('/fighters', FighterController::class);
Route::apiResource('/users', UserController::class);
