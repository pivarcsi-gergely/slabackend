<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\FighterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnemyController;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\GameController;
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
Route::post('/users/register', [UserController::class, 'store']);
Route::post('/users/{id}/ban', [UserController::class, 'banUser']);
Route::post('/users/{id}/unban', [UserController::class, 'unbanUser']);

Route::apiResource('/cards', CardController::class);
Route::apiResource('/fighters', FighterController::class);
Route::apiResource('/users', UserController::class);
Route::apiResource('/enemy', EnemyController::class);
Route::apiResource('/deck', DeckController::class);
Route::apiResource('/game', GameController::class);